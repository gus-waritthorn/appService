<?php

namespace App\Http\Controllers\Api;
use GuzzleHttp\Client;
require '../vendor/autoload.php';
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ShoesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $client = new Client([
            'base_uri' => 'http://swapi.co/api/people/',
            'timeout' => 2.0
      ]);
      //I use 'http://swapi.co/api/people/1/'
      $response = $client->request("get", "1");
      // echo $response->getStatusCode(),"<br>";
      $body = $response->getBody();
      // echo $body->getContents(),"<br>";
      return view('shoes.index', [
        'statusCode' => $response->getStatusCode(),
        'content' => $body->getContents()
      ]);

      // echo $res->getStatusCode();
      // // "200"
      // echo $res->getHeader('content-type');
      // // 'application/json; charset=utf8'
      // echo $res->getBody();
      // // {"type":"User"...'
      //
      // // Send an asynchronous request.
      // $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
      // $promise = $client->sendAsync($request)->then(function ($response) {
      //     echo 'I completed! ' . $response->getBody();
      // });
      // $promise->wait();


      // $client = new \GuzzleHttp\Client();
      // $call = "people";
      // $response = $client->request('GET', "{$this->api}{$call}", [
      // 'form_params' => []
      // ]);
      // $resBody = $response->getBody();
      // $res = json_decode($resBody);
      // return view('shoes.index', [
      //     'statusCode' => $response->getStatusCode(),
      //     'responseHeader' => $response->getHeader('content-type')[0],
      //     'success' => $res->success,
      //     'data' => $res->data,
      //     'resBody' => $response->getBody()
      // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $EU=array(0 => '35',1 => '36',2 => '37',3 => '38',4 => '39',5 => '40',6 => '41',7 => '42',8 => '43',9 => '44',10 => '45',11 => '46');
      $index = array_search($id, $EU);
      if($id >= 35 && $id <= 46){
      $US=array(0 => '3.5',1 => '4.5',2 => '5',3 => '6',4 => '7',5 => '7.5',6 => '8',7 => '8.5',8 => '9',9 => '10',10 => '11',11 => '12');
      $UK=array(0 => '3',1 => '4',2 => '4.5',3 => '5.5',4 => '6.5',5 => '7',6 => '7.5',7 => '8',8 => '8.5',9 => '9.5',10 => '10.5',11 => '11.5');
      $CEN=array(0 => '22.8',1 => '23.5',2 => '23.8',3 => '24.5',4 => '25.1',5 => '25.4',6 => '25.7',7 => '26',8 => '26.3',9 => '27',10 => '27.6',11 => '28.3');
        return [
          "EU" => $EU[$index],
          "US" => $US[$index],
          "UK" => $UK[$index]
        ];
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
