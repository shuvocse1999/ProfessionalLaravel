<?php

namespace App\Services;

interface ConvertServiceInterface{

    function convert(string $from, string $to, float $amount):float;
}