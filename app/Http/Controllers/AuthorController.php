<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use function Laravel\Prompts\alert;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource. retorna una vista y se crea el recurso
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. fisicamente se guarda los datos en la base de datos
     */
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author  = Author::find($id);
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = Author::find($id);
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage. eliminar
     */
    public function destroy($id)
    {
        $author = new Author();
        $author = Author::find($id);

        if ($author) {
            $author->delete();
            return redirect()->route('authors.index');
        }
    }
}