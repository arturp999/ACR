<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosController extends Controller
{
    private $arrayCarros = [
        ["id" => 1, "nome" => "Bugati", "desc" =>  "Parece um aspirador", "img" => "/img/car1.jpg", "preco" => 11000],
        ["id" => 2, "nome" => "Ferrari", "desc" =>  "Carro de rico", "img" => "/img/car2.jpg", "preco" => 6100],
        ["id" => 3, "nome" => "Lambrogin", "desc" =>  "Carro de quem e nao sabe o que compra", "img" => "/img/car3.jpg", "preco" => 4010],
        ["id" => 4, "nome" => "Laranja", "desc" =>  "Carro de quem quer ser rico", "img" => "/img/car4.jpg", "preco" => 22150]
    ];

    public function index(){
        return view('carros',['carros' => $this->arrayCarros]);
    }

    public function showCar($id){
        $selecionado = NULL;
        foreach ($this ->arrayCarros as $carro ) {
            if ($carro['id'] ==$id) {
                $selecionado = $carro;
            }   
        }
        return view('detalhes',['carro' => $selecionado]);
    }
}
