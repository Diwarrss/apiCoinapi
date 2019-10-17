<?php

namespace App\Http\Controllers;

//importo cliente Guzzle para las peticiones http
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CoinapiController extends Controller
{
    //creamos el la funcion para obtener los BTC
    public function getbtc(Request $request)
    {
        //Inicializacion de Client
        $client = new Client();
        //realizo la peticion http enviando headers necesarios para consumir la API de coinapi.io
        $request = $client->request('GET', 'https://rest.coinapi.io/v1/exchangerate/BTC/USD', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json',
                'X-CoinAPI-Key' => '2DE76137-E89B-4B83-B975-1306D10B80B2' //key solicitada a coinapi pla Free
            ]
        ]);
        //capturo el resultado de la peticion
        $response = $request->getBody()->getContents();

        return $response;
    }

    //creamos el la funcion para obtener los ETC
    public function getetc(Request $request)
    {
        //Inicializacion de Client
        $client = new Client();
        //realizo la peticion http enviando headers necesarios para consumir la API de coinapi.io
        $request = $client->request('GET', 'https://rest.coinapi.io/v1/exchangerate/ETC/USD', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json',
                'X-CoinAPI-Key' => '2DE76137-E89B-4B83-B975-1306D10B80B2' //key solicitada a coinapi pla Free
            ]
        ]);
        //capturo el resultado de la peticion
        $response = $request->getBody()->getContents();

        return $response;
    }

    //creamos el la funcion para obtener los XRP
    public function getxrp(Request $request)
    {
        //Inicializacion de Client
        $client = new Client();
        //realizo la peticion http enviando headers necesarios para consumir la API de coinapi.io
        $request = $client->request('GET', 'https://rest.coinapi.io/v1/exchangerate/XRP/USD', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/json',
                'X-CoinAPI-Key' => '2DE76137-E89B-4B83-B975-1306D10B80B2' //key solicitada a coinapi pla Free
            ]
        ]);
        //capturo el resultado de la peticion
        $response = $request->getBody()->getContents();

        return $response;
    }
}
