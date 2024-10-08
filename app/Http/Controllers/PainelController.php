<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('painel.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * stores a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            auth()->logout();
            auth()->attempt($credentials);

            return redirect()->route('painel.index')->with('success', 'Login efetuado com sucesso!');
        }

        return redirect()->back()->with('error', 'Usuário ou senha inválidos!');
    }
}
