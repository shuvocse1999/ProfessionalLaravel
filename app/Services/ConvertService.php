<?php

namespace App\Services;
use Http;

class ConvertService implements ConvertServiceInterface
{

    function convert(string $from, string $to, float $amount):float
    {

    $url = env('CURRENCY_API_URL');
    $key = env('CURRENCY_API_KEY');

      $api =  Http::get("{$url}?apikey={$key}&currencies=EUR%2CUSD%2CCAD");

      if($api->ok()){
        
        $rates = ($api->json()['data']);

      }else{

        throw new \RuntimeException("Api Errors");
      }


      return round($rates[$to]['value']*$amount);



    }
  
}
