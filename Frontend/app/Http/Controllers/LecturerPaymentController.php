<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LecturerPaymentController extends Controller
{
    //
    public function lecturerPayment(){
        $http = new \GuzzleHttp\Client();

        $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_employee');
        $result = json_decode((string)$response -> getBody(), true)['new_employee'];

        return view('LecturerPayment', ['employees' => $result]);

    }
}
