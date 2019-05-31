<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
      public function store(Request $request, $micropots_id)
    {
        \Auth::user()->favorite($micropots_id);
        return back();
    }

    public function destroy($micropots_id)
    {
        \Auth::user()->unfavorite($micropots_id);
        return back();
    }
}
