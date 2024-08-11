<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\Contracts\UserContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
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
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        try{
            $user = $this->repository->create($request->validated());
            DB::commit();
            return redirect()->route('login.form')->with('success', 'Registration successful! Please log in.');
        } catch(Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.'])->withInput();
        }
    }
}
