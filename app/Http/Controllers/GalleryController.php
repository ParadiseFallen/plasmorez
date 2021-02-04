<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($gallery_id)
    {
        dd($gallery_id);
        $mock_data= [
            (object)[],
            (object)[],
            (object)[],
            (object)[]
        ];

//        $page = $request->input('page')??1;
        return view()
            ->with('images',[])
            ->with('title','')
            ->with('description','');
    }
}
