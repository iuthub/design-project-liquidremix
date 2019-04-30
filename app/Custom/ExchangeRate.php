<?php
use Illuminate\Http\Request;
namespace App\Custom;

class ExchangeRate {
    
    public static function getRates()
    {
        //Reference: ReadTheDocs, link: https://guzzle.readthedocs.io/en/latest/
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET','http://data.fixer.io/api/latest?access_key=a3c7fc8647324e32c500e458eaeb1520&format=1');
        $body = json_decode($res->getBody()->getContents());
        $uzs = round(($body->rates->UZS)/($body->rates->USD),2);
        return $uzs;
    }

}