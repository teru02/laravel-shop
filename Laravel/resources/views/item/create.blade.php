@extends('layouts.login')

@section('content')
  <div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
                  <!-- メッセージ -->
@if (count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<!-- フォーム -->
<form action="/create" method="POST" enctype="multipart/form-data">
    <label for="name">商品名:</label>
    <input type="text" class="form-control" name="name" value="">
    <br>
    <label for="name">ユーザーID:</label>
    <input type="text" class="form-control" name="user_id" value="">
    <br>
    <label for="name">金額:</label>
    <input type="text" class="form-control" name="fee" value="">
    <br>
    <label for="name">商品説明:</label>
    <input type="text" class="form-control" name="detail" value="">
    <br>
    <label for="photo">画像ファイル（複数可）:</label>
    <input type="file" class="form-control" name="files[][image]" multiple>
    <br>
    <hr>
    {{ csrf_field() }}
    <button class="btn btn-success"> Upload </button>
</form>
               </div>
           </div>
       </div>
   </div>
  </div>
  @endsection
