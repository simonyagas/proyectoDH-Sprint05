<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuariosController extends Controller
{
  public function index()
  {
    $usuarios = User::All();
      return view('perfil')->with("usuarios",$usuarios);
  }
}
