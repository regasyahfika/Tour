<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourCtrl extends Controller
{

    private $base_url = 'https://sandbox.antavaya.com/';

    public function index()
    {
        return view('tour');
    }

    private function post_curl($url, $data_string)
    {
        $headers = array(
            'Content-Type:application/json'
        );
        $authorization = 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHBpcmVkQXQiOjE1ODQ0MDY1NDcsImV4cGlyZWQiOiIyMDIwLTAzLTE3VDAwOjU1OjQ3LjExODM5MzU4NFoiLCJhZ2VudElEIjo1LCJhZ2VudENvZGUiOiJ0ZXN0IiwiYWdlbnROYW1lIjoiVEVTVCIsImFnZW50UGhvbmVOdW1iZXIiOiI2MjIxMjM0NTY3OCIsImFnZW50RW1haWwiOiJ0ZXN0QGFudGF2YXlhLmNvbSIsImRpc3RyaWJ1dGlvblR5cGVJRCI6Miwicm9sZXMiOlsiL3RvdXIvc2VyaWVzL2F2YWlsYWJpbGl0eSIsIi90b3VyL3Nlcmllcy9jYXRlZ29yeSIsIi90b3VyL21hc3Rlci9zZWFzb24iLCIvdG91ci9tYXN0ZXIvY291bnRyeSIsIi90b3VyL21hc3Rlci9yZWdpb24iLCIvdG91ci9tYXN0ZXIvdHlwZSIsIi90b3VyL21hc3Rlci9jYXRlZ29yeSJdfQ.BlzI2GfNzDlMCUjA1zSw4eDUcgvLGBTOC8NhydL97Jo';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        if (app()->environment() == 'production') {
            curl_setopt($ch, CURLOPT_USERPWD, $this->xendit_key.":");
        } else {
            curl_setopt($ch, CURLOPT_USERPWD, $this->xendit_dev_key.":");
        }

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: '.strlen($data_string),
                'Authorization: '. $authorization
            )
        );

        $result = curl_exec($ch);
        return $result;
    }

    public function getApi(Request $request)
    {
        $data = [];
        $url = $this->base_url.'tour/series/availability';
        $data_string = json_encode($data);
        $res = json_decode($this->post_curl($url, $data_string));
        dd($request);
    }
}
