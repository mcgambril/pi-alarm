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
        //echo phpinfo();
        //current api server is http://api.easybulb.com/v1/
        //ctrl_box privte ip address 192.168.1.69
        //ctrl_box mac address f0:fe:6b:14:b9:54

        //https://www.robertprice.co.uk/robblog/usng_ph_to_send_a_udp_message-shtml/
        //php.net/manual/en/function.socket-create.php
        $ch = curl_init(); if($ch === false) {echo 'didnt work';} else {echo 'curl works';}
        $ctrl_box = '192.168.1.69';
        $port = 80;
        $mac_addr = 'f0:fe:6b:14:b9:54';
        $api_url = 'http://api.easybulb.com/v1/';
        $on_msg = 'GET white/on/';

        $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
        socket_sendto($socket, $on_msg, strlen($on_msg), 0, $ctrl_box, $port);
        socket_close($socket);

        $this->load->view('home_view');
    }
}
