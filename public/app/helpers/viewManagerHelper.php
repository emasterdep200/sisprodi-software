<?php

namespace App\Helpers\ViewHelper;

 class ViewHelper
 {
 	private $path;

 	private $footer;

 	private $header;

 	private $component = [];

 	public function __construct($valueDefault)
 	{
 		if ($valueDefault == true) 
 		{
 			$this->loadDefaultHeaderFooter();
 		}
 	}

 	public function setPath(String $path)
 	{
 		$this->path = $path;
 	}

 	public function setHeader(String $header)
 	{
 		$this->header = $header;
 	}

 	public function setFooter(String $footer)
 	{
 		$this->footer = $footer;
 	}

 	public function header()
 	{
 		include_once 'view/'.$this->path.'/'.$this->header.'.php';
 	}

 	public function footer()
 	{
 		include_once 'view/'.$this->path.'/'.$this->footer.'.php';
 	}

 	public function include($pathToView)
 	{
 		include_once 'view/'.$pathToView.'.php';
 	}

 	private function loadDefaultHeaderFooter()
 	{
 		$this->header = 'header';
 		$this->footer = 'footer';
 		$this->path = 'general';
 	}

 	public function toUrl($path)
 	{
 		header('location:'.$path);
 	}

 } 