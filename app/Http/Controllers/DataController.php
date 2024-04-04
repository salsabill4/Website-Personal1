<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataEvent;
use App\Models\Post;

class DataController extends Controller
{
    public function news(){
        return view('layouts.news', [
            "title" => "News",
            "posts" => Post::all()
        ]);
    }

    public function news1($slug){
        return view('layouts.news1', [
            "title" => "Single News",
            "post" => Post::find($slug)
        ]);
    }

    public function news2($slug){
        return view('layouts.news2', [
            "title" => "Single News",
            "post" => Post::find($slug)
        ]);
    }

    public function event(){
        return view('layouts.event', [
            "title" => "Event"
        ]);
    }

    public function index(){
        return view('layouts.home', [
            "title" => "About"
        ]);
    }

    public function page(){
        return view('layouts.tambahEvent', [
            "title" => "About"
        ]);
    }

    public function detail(){
        return view('layouts.detail', [
            "title" => "About"
        ]);
    }

    public function simpan(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'date' => 'required',
            'location' => 'required',
            'daftar' => 'required',
        ]);

        $event = new DataEvent;
        $event->title = request('title');
        $event->description = request('description');
        $event->category = request('category');
        $event->date = request('date');
        $event->location = request('location');
        $event->daftar = request('daftar');

        $event->save();
        return redirect('/tambahEvent')->with('success', 'Data Berhasil');
 
        // if($events->save()){
        //     return redirect('/tambahEvent')->with('success', 'Data Berhasil');
        // }else{
        //     return redirect('/tambahEvent')->with('fail', 'Data Gagal Disimpan');
        // }
    }
}
