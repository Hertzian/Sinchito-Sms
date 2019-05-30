<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemList;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getBatch($id){
        $batch = ItemList::find($id);
        $items = Item::where('item_list_id', $batch->id)->get();

        return view('item.getitemlist',[
            'batch' => $batch,
            'items' => $items
        ]);
    }

    public function newItemView($id){
        $itemlist = ItemList::find($id);

        return view('item.newitem',[
            'itemlist' => $itemlist
        ]);
    }

    public function newItem(Request $request, $id){
        $itemlist = ItemList::find($id);
        $item = new Item();

        $item->name = $request->input('name');
        $item->number = $request->input('number');
        $item->item_list_id = $request->input('item_list_id');

        $request->validate([
            'name' => 'required',
            'number' => 'required'
        ]);

        $item->save();

        return redirect('/')
            ->with('message', 'El item se ha creado con éxito');
    }


}
