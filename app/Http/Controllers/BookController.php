<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    public function index(){
        $book=book::paginate(5);
        return view('book.index',['books'=>$book]);
    }

    public function create(){
        return view('book.create');
    }
    public function show($book){
        $book=book::find($book);
        return view('book.show',compact('book'));
    }

    public function store(Request $request){
        $book=new book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->title = $request->title;

        $book->save();
        Alert::success('Libro guardado','El libro se creo correctamente');
        return redirect('/libro');
    }
    
    public function edit($book){
        $book=book::find($book);
        return view('book.edit',compact('book'));
    }

    public function update(Request $request, $book){
        $book=book::find($book);
        $book->title = $request->title;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->title = $request->title;

        $book->save();
        Alert::success('Libro editado','Se editó la información del libro');
        return redirect("/libro/{$book->id}");
    }
    
    public function destroy($book){
        $book=book::find($book);
        $book->delete();
        Alert::success('Libro eliminado','El libro se eliminó correctamente');
        return redirect("/libro");
    }
}
