<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_interface extends CI_Controller {

	public function index()
	{
        
        redirect('welcome', 'refresh');
		
	}

    public function alerts(){
		$this->template->load('template','ui/alerts');
    }

    public function animations(){
		$this->template->load('template','ui/animations');
    }

    public function badges(){
		$this->template->load('template','ui/badges');
    }

    public function breadcrumbs(){
		$this->template->load('template','ui/breadcrumbs');
    }

    public function buttons(){
		$this->template->load('template','ui/buttons');
    }

    public function collapse(){
		$this->template->load('template','ui/collapse');
    }

    public function colors(){
		$this->template->load('template','ui/colors');
    }

    public function dialogs(){
		$this->template->load('template','ui/dialogs');
    }

    public function icons(){
		$this->template->load('template','ui/icons');
    }

    public function labels(){
		$this->template->load('template','ui/labels');
    }

    public function list_group(){
		$this->template->load('template','ui/list-group');
    }

    public function media_object(){
		$this->template->load('template','ui/media-object');
    }

    public function modals(){
		$this->template->load('template','ui/modals');
    }

    public function notifications(){
		$this->template->load('template','ui/notifications');
    }

    public function pagination(){
		$this->template->load('template','ui/pagination');
    }

    public function preloaders(){
		$this->template->load('template','ui/preloaders');
    }

    public function progressbars(){
		$this->template->load('template','ui/progressbars');
    }

    public function range_sliders(){
		$this->template->load('template','ui/range-sliders');
    }

    public function sortable_nestable(){
		$this->template->load('template','ui/sortable-nestable');
    }

    public function tabs(){
		$this->template->load('template','ui/tabs');
    }

    public function thumbnails(){
		$this->template->load('template','ui/thumbnails');
    }

    public function tooltips_popovers(){
		$this->template->load('template','ui/tooltips-popovers');
    }

    public function waves(){
		$this->template->load('template','ui/waves');
    }
}