<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Age;
use App\Models\News;


class UserController extends Controller
{
    public function index()
    {
        $event = DB::table('events')->get();
        $news = DB::table('news')->get();
        return view('index', compact('event', 'news'));
    }

    public function allEvents()
    {
        $event = DB::table('events')->paginate(3);
        return view('allEvents', compact('event'));
    }

    public function allNews()
    {
        $event = DB::table('news')->paginate(3);
        return view('allNews', compact('news'));
    }

    public function signin_show()
    {
        return view('signin');
    }



    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('adminIndex')->with('success', 'Вы успешно авторизовались');
        } else {
            return back()->withErrors(['email' => 'Неверные данные!'])->withInput();
        }
    }
}
