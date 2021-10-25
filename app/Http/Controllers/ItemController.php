<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Routing\Route;

class ItemController extends Controller
{

    public function index(){
        $items = Item::orderBy('id', 'desc')->get();
        return view('items.index', compact('items'));
    }
    
    public function show(Item $item){
        return view('items.show', compact('item'));
    }

    public function create(){
        return view('items.create');
    }

    public function store(Request $request){
        Item::create($request->all());
        $items = Item::all();
        return redirect()->route('items.index', compact('items'));
    }

    public function update(Request $request, Item $item){
        // dd($request->all());
        $item->update($request->all());
        return redirect()->route('items.show', $item);
    }

    public function delete(Item $item){
        $item->delete();
        return redirect()->route('items.index')
                         ->with('success', 'El registro ha sido eliminado');
    }
}
