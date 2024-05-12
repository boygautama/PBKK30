<?php

namespace App\Http\Controllers;

use App\Models\Kelas as Kelas;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KelasController extends Controller
{
    public function index(): View
    {
        $datakelas = Kelas::latest()->paginate(10);
        return view('kelas.index', compact('datakelas'));
    }

    public function create(): View
    {
        return view('kelas.create');
    }

    public function store(Request $request): RedirectResponse
    {

        //validate form
        $request->validate([
            'username' => 'required|min:5|unique:users,username',
            'email' => 'required|min:5|unique:users,email|email',
            'password' => 'required|min:5',
            'level' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ]);
        //redirect to index
        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Request $request){
         $pengguna = Kelas::findOrFail($id);

         return view('kelas.edit', compact('pengguna'));
    }
}
