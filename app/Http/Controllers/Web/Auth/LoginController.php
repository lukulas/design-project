<?php

namespace App\Http\Controllers\Web\Auth;

use App\Repositories\Login\LoginRepo;
use Illuminate\Http\Request;

class LoginController
{
    /**
     * Declaração das variaveis
     * globais de autenticação
    */
    protected $request;
    protected $loginRepo;

    /**
     * Define o valor das variaveis
     * para toda a classe
    */
    public function __construct(Request $request, LoginRepo $loginRepo)
    {
        $this->request      = $request;
        $this->loginRepo    = $loginRepo;
    }

    /**
     * Mostrar a tela de login
     * para o usuario
    */
    public function login ()
    {
        return view('auth.login');
    }
}
