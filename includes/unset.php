<?php

unset(
	// Unset template scripts ========================================================================
	// unset($this->_scripts[$this->baseurl .'/media/jui/js/bootstrap.min.js']);
	$this->_scripts[$this->baseurl .'/media/jui/js/jquery-noconflict.js'],
	$this->_scripts[$this->baseurl .'/media/jui/js/jquery-migrate.min.js'],
	$this->_scripts[$this->baseurl .'/media/jui/js/jquery.min.js'],
	// $this->_scripts[$this->baseurl .'/media/system/js/core.js'],
	// $this->_scripts[$this->baseurl .'/media/system/js/mootools-core.js'],
	// $this->_scripts[$this->baseurl .'/media/system/js/mootools-more.js'],
	// $this->_scripts[$this->baseurl .'/media/system/js/modal.js'],
	$this->_scripts[$this->baseurl .'/media/system/js/caption.js'],
	$this->_scripts[$this->baseurl .'/media/system/js/html5fallback.js'],
	
	// Unset template styles =========================================================================
	$this->_styleSheets[JURI::root(true).'/media/system/css/modal.css'],
	$this->_styleSheets[JURI::root(true).'/media/jui/css/chosen.css']
);

