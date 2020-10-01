<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    
    public function index()
    {
        $shoppinglist = ShoppingList::get();

        return view('shoppinglist.index', ['shoppinglist' => $shoppinglist]);
    }

    public function create()
    {
        return view('shoppinglist.create');
    }

    
    public function store(Request $request)
    {
        $shoppinglist = new ShoppingList();
        $shoppinglist->product = $request->product;
        $shoppinglist->amount = $request->amount;
        
        $shoppinglist->save();

        return redirect(route('shoppinglist.index'));
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(ShoppingList $shoppinglist)
    {

        return view('shoppinglist.edit', ['shoppinglist' => $shoppinglist]);
    }

    
    public function update(Request $request, ShoppingList $shoppinglist)
    {
        // $shoppinglist->product = $request->product;
        // $shoppinglist->amount = $request->amount;

        // $shoppinglist->update($shoppinglist);

        
    }

    
    public function destroy(ShoppingList $shoppinglist)
    {
        //
    }
}
