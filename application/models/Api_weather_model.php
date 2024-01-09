<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Api_weather_model extends CI_Model{
        
        //Insert your API key here
        private $apiKey = '';
        private $apiUrl = 'http://api.openweathermap.org/data/2.5/weather';
        public function __construct(){
            parent::__construct();
            
        }

        
        
        public function getWeather($city){
            $url = $this->apiUrl.'?q='.$city.'&appid='.$this->apiKey.'&units=metric&lang=fr';
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($data);
            return $data;
        }
    }