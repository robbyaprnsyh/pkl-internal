<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class KasirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', Role::class]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = Kasir::orderBy('id', 'desc')->get();
        return view('kasir.index', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kasir' => ['required', 'string', 'max:255'],
            'tempat_tinggal' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:Kasirs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $kasir = new Kasir;
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->tempat_tinggal = $request->tempat_tinggal;
        $kasir->jenis_kelamin = $request->jenis_kelamin;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->save();

        return redirect()->route('kasir.index')
            ->with('success', 'Data Berhasil Di Tambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kasir $kasir)
    {

        return view('kasir.show', compact('Kasir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasir $kasir)
    {
        return view('kasir.edit', compact('kasir'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasir $kasir)
    {
        $request->validate([
            'nama_kasir' => ['required', 'string', 'max:255'],
            'tempat_tinggal' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email',
                Rule::unique('kasirs')->ignore($kasir->id),
            ],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->tempat_tinggal = $request->tempat_tinggal;
        $kasir->jenis_kelamin = $request->jenis_kelamin;
        $kasir->email = $request->email;
        // $Kasir->password = Hash::make($request->password);

        $kasir->save();
        return redirect()->route('kasir.index')
            ->with('success', 'Data Berhasil Di Ubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasir $kasir)
    {
        if (Auth::kasir()->id != $kasir->id) {
            $kasir->delete();
            return redirect()->route('kasir.index');
        }
        return redirect()->route('kasir.index')
            ->with('success', 'Data Berhasil Di Hapus!');
    }
}
