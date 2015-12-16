<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->helper('file');
            $this->load->helper("url");
        }
        
	public function index() {
            $data = array(
                "temperature" => $this->_get_temperature()
            );
            
            $this->load->view('show.php', $data);
	}
        
        public function get_temperature_ajax() {
            $t = $this->_get_temperature();
            if ($t) {
                die ($this->input->get_post("callback")."(".json_encode(array("success"=>true, "errors"=>false, "temperature"=>$t)).")");
            }
            die ($this->input->get_post("callback")."(".json_encode(array("success"=>false, "errors"=>array("No temperature available"), "temperature"=>false)).")");
        }
        
        function _get_temperature() {
            $s = read_file("./assets/temperature.txt");
            if (!$s) {
                return false;
            }
            $json = json_decode($s);
            if (!array_key_exists("temperature", $json) || !array_key_exists("timestamp", $json)) {
                return false;
            }
            return (object)array(
                "value" => $json->temperature,
                "timestamp" => $json->timestamp
            );
        }
}
