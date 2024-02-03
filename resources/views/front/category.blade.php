@extends('layouts.app')

@section('content')
<div class="container">
   <h1>{{$category->name}}</h1>
   @foreach ($category->products as $item)
       <li><a href="/{{$category->slug}}/{{$item->slug}}">{{$item->name}}</a></li>
   @endforeach
</div>
@endsection
