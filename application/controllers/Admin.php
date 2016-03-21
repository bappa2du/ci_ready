<?php

class Admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        if (!(isset($_SESSION['auth']) && $_SESSION['auth']->role == 'admin'))
            redirect('/');
    }

     
}