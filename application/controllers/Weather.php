<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Weather extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Api_weather_model', 'Api');
        }

        public function index(){
            $city = $this->input->get('city') ? $this->input->get('city') : 'Paris';
            $data = $this->Api->getWeather($city);
            $this->load->view('weatherView', $data);
        }
    }