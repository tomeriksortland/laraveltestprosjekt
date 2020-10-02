<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class WishListController extends Controller
{
    
    public function index()
    {
        $wishlists = WishList::get();

        return view('wishlist.index', compact('wishlists'));
    }

    
    public function create()
    {
        return view('wishlist.create');
    }

    
    public function store(Request $request)
    {
        $wishlist = new WishList();
        $wishlist->wish = $request->wish;
        $wishlist->name = $request->name;
        
        $wishlist->save();

        return redirect(route('wishlist.index'));
    }

    
    public function show(WishList $wishlist)
    {
        //
    }

    
    public function edit(WishList $wishlist)
    {
        return view('wishlist.edit', ['wishlist' => $wishlist]);
    }

    
    public function update(Request $request, WishList $wishlist)
    {
        $wishlist->wish = $request->wish;
        $wishlist->name = $request->name;
        
        $wishlist->update();

        return redirect(route('wishlist.index'));
    }

    
    public function destroy(WishList $wishlist)
    {
        $wishlist->delete();

        return redirect(route('wishlist.index'));
    }
}
