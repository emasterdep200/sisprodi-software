<?php 

namespace App\Helpers\Request; 
	/**
	 * clase manejadora de peticiones http del usuario y tratamiento de peticiones
	 * @author Edward Romero
	 * @since 18-04-2020
	 */
	class Request
	{
		private $post = [];

		private $get = [];

		public function __construct()
		{
			if ( isset($_GET)) {
				$this->setArrayAsocGET($_GET);
			}
			if ( isset($_POST) ) {
				$this->setArrayAsocPOST($_POST);
			}
			
		}

		/* se valor del array asociativo para posterior llamado
		*/
		private function setArrayAsocGET($getArray)
		{
			foreach ($getArray as $value => $key) {
				$this->get[$value] = $key;
			}
		}

		/* set valor de la propiedad post para posterior llamado
		*/
		private function setArrayAsocPOST($postArray)
		{
			foreach ($postArray as $value => $key) {
				$this->post[$value] = $key;
			}
		}		

		public function requestGet($value)
		{
			return $this->get[$value];
		}

		public function requestPost($value)
		{
			return $this->post[$value];
		}

	}
