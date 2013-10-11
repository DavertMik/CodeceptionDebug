<?php
namespace Codeception\Module;

// here you can define custom functions for WebGuy 

class WebHelper extends \Codeception\Module
{
	function debug()
	{
		$driver = $this->getModule('WebDriver')->webDriver;
		$debugger = new \Wdebug\Debug($driver);
		$debugger->execute();
	}	
}
