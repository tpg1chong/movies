<?php

class Index_Controller extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $this->view->js('jquery/jquery.easing');
        $this->view->elem('body')->addClass('home');
        $this->view->setPage('has_home', 1);

        $this->view->render('design/home');
    }

    public function search($page=null) {


        $this->movie(2017, '');
        // $this->error();
    }

    
    public function movie($year, $name) {
        

        $this->view->render('movie/profile/display');
    }
}
