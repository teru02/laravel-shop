@extends('layouts.login')
@section('content')

<div>
  <span>{{$item->name}}</span>
</div>
<div>
  <form action="{{route('item.delete',$item->id)}}" method="post">
    @csrf
    <input type="submit" value="削除" onclick='return confirm("本当に削除しますか？")'>
  </form>
</div>

@endsection
