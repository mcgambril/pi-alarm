<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 5/18/2017
 * Time: 9:38 PM
 */

class third_party_controller extends CI_Controller {
    function __construct() {
        parent::__construct();

        include APPPATH . 'third_party\Milight.php';
    }

    function index() {

        $milight = new Milight();

        $milight->index();
    }
}
?>