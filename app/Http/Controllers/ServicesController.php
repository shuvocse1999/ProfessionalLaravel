<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ConvertService;
use App\Services\ConvertServiceInterface;



class ServicesController extends Controller
{
    public function invoice(ConvertServiceInterface $converter){

        return [

        ['Name' => "shuvo", 'Amount' => $converter->convert('USD','USD',200), 'Currency' => 'USD'],
        ['Name' => "Masud", 'Amount' => $converter->convert('USD','EUR',200), 'Currency' => 'EUR'],
        ['Name' => "Parvej", 'Amount' => $converter->convert('USD','CAD',500), 'Currency' => 'CAD'],

        ];
        
    }
}
