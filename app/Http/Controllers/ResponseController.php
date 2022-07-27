<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;

class ResponseController extends Controller
{
    public function index()
    {
        $id = uniqid();
        $timestamp = date("Y-m-d H:i:s");

        $response = new Response;
        $response->setId($id);
        $response->setMessage("Hello PHP! This is PHPH Laravel rest api!");
        $response->setTimestamp($timestamp);

        return response()->json($response, 201);
    }
}
