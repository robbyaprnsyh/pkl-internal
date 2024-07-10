<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
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
        $produk = Produk::all();
        $user = User::orderBy('id', 'desc')->get();
        return view('user.index', compact('user', 'produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'name' => ['required', 'string', 'max:255'],
            'tempat_tinggal' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cover' => ['required'],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->tempat_tinggal = $request->tempat_tinggal;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cover = $request->cover;

        // upload image
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/user', $name);
            $user->cover = $name;
        }
        $user->save();

        return redirect()->route('user.index')
            ->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tempat_tinggal' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cover' => ['required'],
        ]);

        $user->name = $request->name;
        $user->tempat_tinggal = $request->tempat_tinggal;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cover = $request->cover;

        // upload image
        if ($request->hasFile('cover')) {
            $user->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/user', $name);
            $user->cover = $name;
        }

        $user->save();

        return redirect()->route('user.index')
            ->with('success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::user()->id != $user->id) {
            $user->delete();
            return redirect()->route('user.index');
        }
        return redirect()->route('user.index');
        // ->with('success', 'Data Berhasil Di Hapus!');
    }
}
