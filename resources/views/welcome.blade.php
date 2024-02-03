@extends('layouts.app')

@section('content')
<div class="container">
   @foreach ($categories as $item)
       <li><a href="/{{$item->slug}}">{{$item->name}}</a></li>
   @endforeach
</div>
@endsection
