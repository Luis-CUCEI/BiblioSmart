<?php

namespace App\Http\Controllers;

use App\Book;
use App\Degree;
use App\Division;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all();

        return view('book.indexBook', compact('books'));
    }

    public function create()
    {
        $divisions = Division::all()->pluck('name', 'id')->toArray();
        $degrees = Degree::all()->pluck('career', 'id')->toArray();

        return view('book.formBook')->with(['divisions'=>$divisions, 'degrees'=>$degrees]);

    }

    public function store(Request $request)
    {
        $rules = [
            'tittle' => 'required',
            'n_system' => 'required',
            'isbn' => 'required',
            'pages' => 'required',
            'author' => 'required',
            'theme' => 'required',
            'copies' => 'required',
            'bar_code' => 'required',
            'classification' => 'required',
        ];

        $messages = [
            'tittle.required' => 'Ingresa Titulo para poder continuar.',
            'n_system.required' => 'Ingresa Numero de sistema para poder continuar.',
            'isbn.required' => 'Ingresa ISBC para poder continuar.',
            'pages.required' => 'Ingresa Paginas para poder continuar.',
            'author.required' => 'Ingresa Autor para poder continuar.',
            'theme.required' => 'Ingresa Tema para poder continuar.',
            'copies.required' => 'Ingresa Copias para poder continuar.',
            'bar_code.required' => 'Ingresa Codigo de Barras para poder continuar.',
            'classification.required' => 'Ingresa Calificacion para poder continuar.',
        ];

        $this->validate($request, $rules, $messages);

        Book::create($request->all());

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        $divisions = Division::all()->pluck('name', 'id')->toArray();
        $degrees = Degree::all()->pluck('career', 'id')->toArray();

        return view('book.showBook')->with(['book'=>$book, 'divisions'=>$divisions, 'degrees'=>$degrees]);
    }

    public function edit(Book $book)
    {
        $divisions = Division::all()->pluck('name', 'id')->toArray();
        $degrees = Degree::all()->pluck('career', 'id')->toArray();
        return view('book.formBook')->with(['book'=>$book, 'divisions'=>$divisions, 'degrees'=>$degrees]);
    }

    public function update(Request $request, Book $book)
    {
        $rules = [
            'tittle' => 'required',
            'n_system' => 'required',
            'isbn' => 'required',
            'pages' => 'required',
            'author' => 'required',
            'theme' => 'required',
            'copies' => 'required',
            'bar_code' => 'required',
            'classification' => 'required',
        ];

        $messages = [
            'tittle.required' => 'Ingresa Titulo para poder continuar.',
            'n_system.required' => 'Ingresa Numero de sistema para poder continuar.',
            'isbn.required' => 'Ingresa ISBC para poder continuar.',
            'pages.required' => 'Ingresa Paginas para poder continuar.',
            'author.required' => 'Ingresa Autor para poder continuar.',
            'theme.required' => 'Ingresa Tema para poder continuar.',
            'copies.required' => 'Ingresa Copias para poder continuar.',
            'bar_code.required' => 'Ingresa Codigo de Barras para poder continuar.',
            'classification.required' => 'Ingresa Calificacion para poder continuar.',
        ];

        $this->validate($request, $rules, $messages);

        Book::where('id', $book->id)->update($request->except('_token', '_method'));

        return redirect()->route('books.show', $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
