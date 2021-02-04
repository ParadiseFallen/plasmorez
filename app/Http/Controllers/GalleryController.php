<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Database\Eloquent\Collection;

class GalleryController extends Controller
{
    public function index($gallery_id)
    {
        #$page = $request->input('page')??1;

        $mock_data= new Collection([
            (object)[],
            (object)[],
            (object)[],
            (object)[]
        ]);
        return view('pages.gallery')
            ->with('images',$mock_data)
            ->with('title','')
            ->with('description','');
    }
}
