<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data = product::all();

        /* dd($list_transaksi); */
        return view('index', [
            'title' => "Home",
            'data' =>$data,
        ]);
    }

    public function list_produk()
    {
        $data = product::all();
        $data1 = product::where('type', 'now')->get();
        $data2 = product::where('type', 'alumni')->get();

        /* dd($list_transaksi); */
        return view('list_products', [
            'title' => "List Produk",
            'data' => $data1,
            'data2' => $data2,
        ]);
    }

    public function detail_produk($id)
    {
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('detail_produk.detail_produk', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

    // login

    public function loginIndex()
    {
        return view('auth.login', [
            'title' => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        /* dd($request->all()); */
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('user');
        }
        /* dd('Invalid credentials'); */
        return back()->withErrors([
            'msg1' => 'Login Error, Please Try Again.', 'msg2' => 'Check your username and password.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function alumni1()
    {
        $id = 13;
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('alumni.alumni1', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

    public function alumni2()
    {
        $id = 14;
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('alumni.alumni2', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

    public function alumni3()
    {
        $id = 15;
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('alumni.alumni3', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

    public function alumni4()
    {
        $id = 16;
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('alumni.alumni4', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

    public function alumni5()
    {
        $id = 17;
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('alumni.alumni5', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

    public function alumni6()
    {
        $id = 19;
        /* $user = Auth::user(); */
        $data = product::where('id', $id)->first();

        return view('alumni.alumni6', [
            'title' => $data->nama,
            'data' => $data,
        ]);
    }

}
