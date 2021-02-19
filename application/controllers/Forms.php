<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function index()
	{
        
        redirect('welcome', 'refresh');
		
	}

    public function basic_form_elements(){
		$this->template->load('template','forms/basic-form-elements');
    }

    public function advanced_form_elements(){
		$this->template->load('template','forms/advanced-form-elements');
    }

    public function form_examples(){
		$this->template->load('template','forms/form-examples');
    }

    public function form_validation(){
		$this->template->load('template','forms/form-validation');
    }

    public function form_wizard(){
		$this->template->load('template','forms/form-wizard');
    }

    public function editors(){
		$this->template->load('template','forms/editors');
    }

   
}