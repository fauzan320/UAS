<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use App\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::where('id', FacadesAuth::user()->id)->first();

    	return view('profil.index', compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'password'  =>'min:3', 'confirmed',
        ]);

    	$user = User::where('id', facadesAuth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->nohp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	Alert()->success('User Sukses diupdate', 'Success');
    	return redirect('profile');
    }
    
}
