<?php

namespace App\Http\Controllers\API\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $response = [
            'sucess' => true,
            "message" => "Welcome to API version 2",
        ];

        return reponse()->json($response, 200);
    }
}
