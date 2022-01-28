<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use App\Models\Owner;
use Illuminate\Support\Facades\Storage;

// use Carbon\Carbon;

class ShopController extends Controller
{
    public function __construct()
     {
        $this -> middleware('auth:owners');


        $this->middleware(function($request,$next){
            $id = $request->route()->parameter('shop');
            if(!is_null($id)){
               $shopOwnerId = Shop::findOrFail($id)->owner->id;

               $shopId = (int)$shopOwnerId;

               $ownerId = Auth::id();

               if($shopId !== $ownerId){
                   abort(404);
               }
            }
         
            return $next($request);
        });

     }

     public function index()
{

    $ownerId = Auth::id();
    $shops=Shop::where('owner_id',$ownerId)->get();
    return view('owner.shops.index',compact('shops'));
}


public function edit($id)
{
   $shop = Shop::findOrFail($id);
   return view('owner.shops.edit',compact('shop'));

}

public function update(Request $request, $id)
{
   $imageFile = $request->image;
   if(!is_null($imageFile) && $imageFile->isValid()){
       Storage::putFile('public/shops',$imageFile);
   }

   return redirect()->route('owner.shops.index');
}
}


