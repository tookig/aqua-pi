<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
            $this->load->helper('file');
            $this->load->helper("url");
             
            $data = array(
                "temperature" => $this->_get_temperature()
            );
            
            $this->load->view('show.php', $data);
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
