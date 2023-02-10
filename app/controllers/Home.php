<?php 

    Class Home extends Controller {

        public function index() {
            $data['page-title'] = 'Home';
            $data['user'] = $this->model('HomeModel')->getUser();

            $this->view('home/index', $data);
        }

    }
