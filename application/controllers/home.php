<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 05/15/2017
 * Time: 10:39 PM
 * Pi-Alarm/application/controllers/home.php
 */

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('home_view');
    }
}
