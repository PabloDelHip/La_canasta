<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class Sitio extends Controller
{
    public function home()
    {
        // echo "<script>alert('chido aqui ando')</script>";

        // Cart::add('293ad', 'Product 1', 1, 9.99);
        // Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['Tamano' => 'Grande']]);
        // $rowId = "8cbf215baa3b757e910e5305ab981172";
        // Cart::update($rowId, ['name' => 'Producto actualizado']);
        // dd(Cart::content());
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function galeria()
    {
        return view('galeria');
    }
    public function contactanos()
    {
        return view('contactanos');
    }

    public function taquizas_y_eventos()
    {
        return view('taquizas-y-eventos');
    }
}
