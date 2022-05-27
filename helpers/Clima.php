<?php

class Clima
{
    private $key;
    private $cityId;

    public function __construct()
    {
        $this->key = "6a79cfc4dc6ce3f052c93336beefa808";
        $this->cityId = "3514211";
    }

    public function getClima()
    {
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $this->cityId . "&lang=en&units=metric&APPID=" . $this->key;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        return json_decode($response);
    }
}