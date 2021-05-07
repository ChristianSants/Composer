<?php

include('../vendor/autoload.php');
use PHPUnit\Framework\TestCase;
use christian\composer\search;

class searchTeste extends TestCase
{
    /**
    * @dataProvider dadosTeste
    **/
    public function testGetCepDefaultUsage(string $input, array $esperado)
    {
        $busca = new search();
        $resultado = $busca->getCep($input);

        $this->assertEquals($esperado, $resultado);

    }

    public function dadosTeste()
    {
        return [
            "Endereco Centro de Viamão" => [
                "94410020",
                [
                    "cep" => "94410-020", 
                    "logradouro" => "Rua Marechal Deodoro", 
                    "complemento" =>'' ,
                    "bairro" => "Centro" ,
                    "localidade" => "Viamão" ,
                    "uf" => "RS" ,
                    "ibge" => "4323002" ,
                    "gia" =>"",
                    "ddd" => "51",
                    "siafi" => "8963"
                ]
            ],

            "Endereco Qualquer" => [
                "94510020",
                [
                    "cep" => "94510-020", 
                    "logradouro" => "Avenida Osvaldo Godoy Gomes", 
                    "complemento" =>'' ,
                    "bairro" => "Augusta" ,
                    "localidade" => "Viamão" ,
                    "uf" => "RS" ,
                    "ibge" => "4323002" ,
                    "gia" =>"",
                    "ddd" => "51",
                    "siafi" => "8963"
                ]
            ]
        ];
    }

}

?>