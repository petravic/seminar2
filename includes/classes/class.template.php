<?php

require(ROOT_PATH . 'includes/libs/Smarty/libs/Smarty.class.php');

class template extends Smarty
{
	protected $jsscript	= array();
	protected $script	= array();
	
	function __construct()
	{	
		parent::__construct();
		$this->smartySettings();
	}
	
	function smartySettings()
	{	
		$this->force_compile 			= false;
		$this->caching 					= true; #Set true for production!
		$this->merge_compiled_includes	= true;
		$this->compile_check			= true; #Set false for production!
		$this->php_handling				= Smarty::PHP_REMOVE;
		
		$this->setCompileDir(ROOT_PATH . 'cache/');
		$this->setCacheDir(ROOT_PATH . 'cache/templates');
		$this->setTemplateDir(ROOT_PATH . 'templates/');
		#$this->loadFilter('output', 'trimwhitespace');
	}
	
	public function loadscript($script)
	{
		$this->jsscript[]			= substr($script, 0, -3);
	}
	
	public function execscript($script)
	{
		$this->script[]				= $script;
	}
		
	public function assign_vars($var, $nocache = true) 
	{		
		parent::assign($var, NULL, $nocache);
	}
	
	public function show($file)
	{
		$this->assign_vars(array(
			'scripts'		=> $this->jsscript,
			'execscript'	=> implode("\n", $this->script),
		));
		
		parent::display($file);
	}
	
}

?>