<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repositories\Contracts\UserContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * RegisterController constructor.
     * @param UserContract $repository
     */

    public $repository;

    public function __construct(UserContract $repository)
    {
        $this->repository = $repository;
    }

    public function showRegisterForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        
    }
}
