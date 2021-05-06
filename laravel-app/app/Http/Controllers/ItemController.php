<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::paginate(5);
        return view('item', compact('items'));
    }
    
    public function show($id){
        $item = Item::find($id);
        return view('item-show', compact('item'));
    }

    public function create(){
        return view('item.create');
    }

    public function store(Request $request){
        Item::create($request->all());
        return view('item');
    }

    public function update(Request $request){
        Item::saved($request->all());
        return view('item');    
    }

    public function delete(Item $item){
        $item->delete();
        return redirect()->route('item.index')
                         ->with('success', 'El registro ha sido eliminado');
    }
}
