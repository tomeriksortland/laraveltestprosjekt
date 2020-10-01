<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    
    public function index()
    {
        $wishlist = WishList::get();

        return view('wishlist.index', ['wishlist' => $wishlist]);
    }

    
    public function create()
    {
        return view('wishlist.create');
    }

    
    public function store(Request $request)
    {
        $wish = new WishList;
        $wish->wish = $request->wish;
        $wish->name = $request->name;
        $wish->date_added = getCurrentDate();

        return $wish;

        $wish->create();

        return redirect(route('shoppinglist.index'));
    }

    
    public function show(WishList $wishList)
    {
        //
    }

    
    public function edit(WishList $wishList)
    {
        //
    }

    
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    
    public function destroy(WishList $wishList)
    {
        //
    }
}
