@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.items', ['items' => $items,'rank_by'=>'Have'])
@endsection