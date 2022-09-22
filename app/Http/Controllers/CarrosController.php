<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;
class CarrosController extends Controller
{
    //
function listarcarros(  ){
    $carros = Carros::all();
    echo json_encode($carros);
}
}
