<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 5/7/2017
 * Time: 8:12 PM
 */

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home_view');
    }
}