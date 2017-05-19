<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 5/18/2017
 * Time: 11:03 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Milight_lib {
    public function __construct() {
        require_once APPPATH . 'third_party/Milight.php';
    }
}