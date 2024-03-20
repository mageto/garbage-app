<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }
}
