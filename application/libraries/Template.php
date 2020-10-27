<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
	
	private $template_data = array();
	private $ci;

    public function set($name, $value){
        $this->template_data[$name] = $value;
    }
	
	public function load($template = 'template', $view = '' , $view_data = array(), $return = FALSE){
		$this->ci =& get_instance();
		if ($view == '') {
			$this->set('content', '');
		} else {
			$this->set('content', $this->ci->load->view($view, $view_data, TRUE));
		}
		return $this->ci->load->view($template, $this->template_data, $return);
	}
	
}