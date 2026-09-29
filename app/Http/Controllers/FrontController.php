<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class FrontController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('front.index', compact('items'));
    }

    public function shopItem($id){
        $item = Item::find($id);
        return view('front.detail' , compact('item'));
    }
}
