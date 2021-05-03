<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Models\Endereco;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clientes', function () {
    $clientes = Cliente::all();
    foreach($clientes as $cliente){
        echo "<p>ID:" . $cliente->id . "</p>";
        echo "<p>Nome:" . $cliente->nome . "</p>";
        echo "<p>Telefone:" . $cliente->telefone . "</p>";
        $end = Endereco::where('cliente_id', $cliente->id)->first();
        echo "<p>ID cliente:" . $end->cliente_id . "</p>";
        echo "<p>Rua:" . $end->rua . "</p>";
        echo "<p>Numero:" . $end->numero . "</p>";
        echo "<p>Bairro:" . $end->bairro . "</p>";
        echo "<p>Cidade:" . $end->cidade . "</p>";
        echo "<p>UF:" . $end->uf . "</p>";
        echo "<p>CEP:" . $end->cep . "</p>";
        echo "<hr>";
    }
});


Route::get('/enderecos', function () {
    $enderecos = Endereco::all();
    foreach($enderecos as $end){
        echo "<p>ID cliente:" . $end->cliente_id . "</p>";
        echo "<p>Rua:" . $end->rua . "</p>";
        echo "<p>Numero:" . $end->numero . "</p>";
        echo "<p>Bairro:" . $end->bairro . "</p>";
        echo "<p>Cidade:" . $end->cidade . "</p>";
        echo "<p>UF:" . $end->uf . "</p>";
        echo "<p>CEP:" . $end->cep . "</p>";
        echo "<hr>";
    }
});
