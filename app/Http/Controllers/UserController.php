<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Age;
use App\Models\News;
use App\Models\Event;


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
        $news = DB::table('news')->paginate(3);
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


    public function adminIndex()
    {
        $news = DB::table('news')->get();
        return view('admin/adminInex', compact('news'));
    }


    public function newsShow($id)
    {
        $news = News::findOrFail($id);
        return view('newsShow', compact('news'));
    }

    public function eventShow($id)
    {
        $events = DB::table('events')
            ->join('age_restrictions', 'events.id_age_restriction', '=', 'age_restrictions.id')
            ->select('events.title', 'events.subtitle', 'events.duration', 'age_restrictions.tvalue', 'events.description', 'events.show_date')
            ->where('events.id', '=', $id)
            ->first();

        return view('eventShow', compact('events'));
    }

    public function addNewsForm()
    {
        return view('admin.addNews');
    }

    public function addNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        News::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ]);

        return redirect()->route('adminIndex')->with('success', 'Новость успешно добавлена!');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')->with('success', 'Вы успешно вышли');
    }

    public function editNewsForm($id)
    {
        $news = News::findOrFail($id);
        return view('admin.editNews', compact('news'));
    }

    public function editNews(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|string',
        ]);

        $news = News::findOrFail($id);

        $news->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ]);

        return redirect()->route('adminIndex')->with('success', 'Новость успешно обновлена!');
    }

    public function admin_poster_add(Request $request)
    {
        $events = Event::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'duration' => $request->duration,
            'id_age_restriction' => $request->id_age_restriction,
            'description' => $request->description,
            'team' => $request->team,
            'image' => $request->image,
            'show_date' => $request->show_date,
        ]);

        return redirect()->route('adminEvent');
    }

    public function admin_poster_edit_post(Request $request, Event $id)
    {
        $id = $request->id;
        $events = Event::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'duration' => $request->duration,
            'id_age_restriction' => $request->id_age_restriction,
            'description' => $request->description,
            'team' => $request->team,
            'image' => $request->image,
            'show_date' => $request->show_date,
        ]);

        return redirect()->route('adminEvent');
    }

    public function editEventForm($id)
    {
        $event = Event::findOrFail($id);
        $ageRestrictions = Age::all();

        return view('admin/editEvent', compact('event', 'ageRestrictions'));
    }

    public function editEvent(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'id_age_restriction' => 'required|integer',
            'duration' => 'required|string',
            'show_date' => 'required|date',
            'description' => 'required|string',
            'team' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $event = Event::findOrFail($id);

        $event->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'id_age_restriction' => $request->input('id_age_restriction'),
            'duration' => $request->input('duration'),
            'show_date' => $request->input('show_date'),
            'description' => $request->input('description'),
            'team' => $request->input('team'),
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images', 'public');
            $event->image = $imagePath;
            $event->save();
        }

        return redirect()->route('adminIndex')->with('success', 'Новость успешно обновлена!');
    }
}
