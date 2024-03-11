<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemImage;

class ItemsController extends Controller
{
    //
    public function index(){
        $items = Item::with('images')->get();
        return view('shop',compact('items'));
    }

    public function create(Request $request){
        if($request->isMethod('POST')){
            // 商品情報の保存
            $item = Item::create(['name'=> $request->name,'user_id'=> $request->user_id,'fee'=> $request->fee, 'detail'=> $request->detail]);

            // 商品画像の保存
            foreach ($request->file('files') as $index=> $e) {
                $ext = $e['image']->guessExtension();
                $filename = "{$item->id}_{$index}.{$ext}";
                $path = $e['image']->storeAs('', $filename);
                // imagesメソッドにより、商品に紐付けられた画像を保存する
                $item->images()->create(['path'=> $path]);
        }
        return redirect('/top')->with(['success'=> '保存しました！']);
    }
        return view('item.create');
    }
}
