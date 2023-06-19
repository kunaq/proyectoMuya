<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class FuncionesController extends Controller
{

    public function logout()
    {
        Auth::logout();
        // Opcionalmente, puedes redirigir al usuario a una página específica después de cerrar sesión
        return redirect('index.php');
    }

}
