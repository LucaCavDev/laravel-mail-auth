<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //api libera, senza controllo dell'autenticazione
    public function testApi() {

        return response() -> json([
            'hello' => 'world'
        ]);
    }
}
