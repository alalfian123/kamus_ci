<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends CI_Controller {

	public function index()
	{
        
        redirect('welcome', 'refresh');
		// $this->load->view('template');
	}

    public function cards_basic(){
		$this->template->load('template','widgets/cards/basic');
    }

    public function cards_colored(){
		$this->template->load('template','widgets/cards/colored');
    }

    public function cards_noheader(){
		$this->template->load('template','widgets/cards/no-header');
    }

    public function infobox_1(){
		$this->template->load('template','widgets/infobox/infobox-1');
    }

    public function infobox_2(){
		$this->template->load('template','widgets/infobox/infobox-2');
    }

    public function infobox_3(){
		$this->template->load('template','widgets/infobox/infobox-3');
    }

    public function infobox_4(){
		$this->template->load('template','widgets/infobox/infobox-4');
    }

    public function infobox_5(){
		$this->template->load('template','widgets/infobox/infobox-5');
    }
}
