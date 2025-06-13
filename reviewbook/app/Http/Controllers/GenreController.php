<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index()
    {
        $posts = DB::table('genres')->get();
        return view('genre.genre', ["posts" => $posts]);
    }

    public function create()
    {
        return view("genre.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),

        ]);

        return redirect('/genre');
    }

    public function show($id)
    {

        $post = DB::table('genres')->where('id', $id)->first();




        return view('genre.detail', ["post" => $post]);
    }

    public function edit($id)
    {
        $edit = DB::table('genres')->where('id', $id)->first();
        return view('genre.edit', ["edit" => $edit]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $edit = DB::table('genres')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

        return redirect('/genre');
    }

    public function destroy($id)
    {
        $posts = DB::table('genres')->where('id', $id)->delete();

        return redirect('/genre');
    }
}
