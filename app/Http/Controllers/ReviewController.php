<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    public function index(){
        $review=review::paginate(10);
        return view('review.index',['reviews'=>$review]);
    }

    public function create(){
        return view('review.create');
    }
    public function show($review){
        $review=review::find($review);
        return view('review.show',compact('review'));
    }

    public function store(Request $request){
        $review=new review();
        $review->title = $request->title;
        $review->comment = $request->comment;
        $review->score = $request->score;

        $review->save();
        Alert::success('Reseña guardada','La reseña se creo correctamente');
        return redirect('/reseña');
    }
    
    public function edit($review){
        $review=review::find($review);
        return view('review.edit',compact('review'));
    }

    public function update(Request $request, $review){
        $review=review::find($review);
        $review->title = $request->title;
        $review->comment = $request->comment;
        $review->score = $request->score;

        $review->save();
        Alert::success('Reseña editada','Se editó la reseña correctamente');
        return redirect("/reseña/{$review->id}");
    }
    
    public function destroy($review){
        $review=review::find($review);
        $review->delete();
        Alert::success('Reseña eliminada','La reseña se eliminó correctamente');
        return redirect("/usuario");
    }
}
