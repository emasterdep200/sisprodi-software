<?php 

namespace Core\Frontal;

	use App\Helpers\ManagerError;
	/**
	 * clase para manejar las peticiones del usuario
	 */
	class Frontal 
	{
		private $controller;

		private $action;

		private $folder;

		private $url;

		public function __construct($url)
		{	
			$this->url = $url;
			$this->autoloadFilesArray();
			$this->managerRouteClient();
		}

		//instanciar el controlador y ejecutar su accion
		private function instanceController()
		{
			global $error;
			if ( count($this->url) > 3 ) {
				$file = 'app/controller/'.$this->controller.'Controller.php';
			} else {
				$file = 'app/controller/'.URL_CONTROLLER.'Controller.php';
			}
			
			if ( empty($this->folder) )
				{
					$pathFile = 'App\Controller\\'.$this->controller.'Controller';
					$class = $pathFile.'\\'.$this->controller.'Controller';
					
				}else
				{
					$pathFile = 'App\Controller\\'.$this->folder.'\\'.$this->controller.'Controller';
					$class = $pathFile.'\\'.$this->controller.'Controller';
					$file = 'app/controller/'.$this->folder.'/'.$this->controller.'Controller.php';
				}
			$accionController = $this->action;
			
			// ejecucion de un bloque try and catch para poder gestionar el error
			if ( file_exists($file) ) 
			{
				$object = new $class();
				$object->$accionController();
			}else
			{
				$error = new ManagerError\ManagerError('Archivo no encontrado','404','User');
			}

		}

		/*
		* esta funcion carga todos los archivos en la carpeta app
		*/
		private function autoloadFilesArray()
		{
			require_once 'core/autoloadFiles.php';

			foreach ($files as $main) 
			{
				foreach ($main['files'] as $file)
				{
					$path = 'app/'.$main['type'].'/'.$file.$main['name'].'.php';
					require_once $path;
				}	
			}
		}

		// funcion para gestionar los pedidos de la url
		/* los indices del array $url son los siguientes
		* | [2] -> el controlador de la url 
		* | [3] -> la accion del controlador 
		* | [4] -> la carpeta donde se encuentra el archivo
		*/
		private function managerRouteClient()
		{ 
			if( count($this->url) >= 3){
				//cargar el controlador
			    if(isset($this->url[3])){
			        if( $this->url[3] == '' || $this->url[3] == '/'){
			            $this->controller = CONTROLLER_DEFAULT;
			        }else{
			        	$this->controller = $this->url[3];
			        }    
			    }else{
			        $this->controller = CONTROLLER_DEFAULT;
			        $this->action = ACTION_DEFAULT;
			    }
			    // carga la accion del controlador
			    if(isset($this->url[4])){
			        if( $this->url[4] == '' || $this->url[4] == '/' ){
			             $this->action = ACTION_DEFAULT;
			        } else{
			        	 $this->action = $this->url[4];
			        }
			    }else{
			        $this->action = ACTION_DEFAULT;
			    }
			    //para cargar la carpeta donde esta el controlador que se llama
			    if(isset($this->url[5])){
			        if( $this->url[5] != '' || $this->url[5] != '/' ){
			            $this->folder = $this->url[5];
			            /* aqui se necesita mejorar porque no se tiene logica de include cuando el archivo esta en una carpeta 
			            */
			        }
			    }
			    $this->instanceController();
			}
		}

	}
