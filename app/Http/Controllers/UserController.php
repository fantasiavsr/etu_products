<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_image;
use App\Models\Bank;
use App\Models\dummy_bankdef;
use App\Models\list_transaksi;
use App\Models\produk_image;
use App\Models\dummy_laba;
use App\Models\googlefin_format;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* dd(Auth::user()); */
        $user = Auth::user();
        $level = Auth::user()->level;

        /* dd($level); */
        if ($level == "Admin") {
            return view('pages.admin.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
            ]);
        } else if ($level == "User") {
            return view('pages.user.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
            ]);
        } else if ($level == "Developer") {
            return view('pages.developer.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
            ]);
        } else if ($level == "SubAdmin") {
            return view('pages.subadmin.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
            ]);
        } else {
            return back();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


}
