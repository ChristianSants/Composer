<?php

namespace christian\composer;

class search
{

    private $url = "https://viacep.com.br/ws/";

    public function getCep(string $cep): array
    {
        $cep = preg_replace('/[^0-9]/im', '', $cep);
        //$get [] = file_get_contents($this->url . $cep . "/json");
        $get = file_get_contents($this->url . $cep . "/json");

        //return $get;
        return (array) json_decode($get);
    }
}
