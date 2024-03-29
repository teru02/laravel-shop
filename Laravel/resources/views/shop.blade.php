@extends('layouts.login')

@section('content')
  <div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
            <a href="/create">商品登録</a>
               <div class="d-flex flex-row flex-wrap">
                   商品一覧
                   @foreach($items as $item)
                      <div class="item " style="border:1px solid; margin:10px;">
                        <div><a href="/{{$item->id}}/detail">{{$item->name}}</a></div>
                        <div>{{$item->fee}}円</div>
                        <div>{{$item->detail}}</div>
                        @foreach($item->images as $image)
                        <img src="{{ asset('storage/'.$image->path) }}">
                        @endforeach
                      </div>
                   @endforeach
               </div>

           </div>
       </div>
   </div>
  </div>
  @endsection
