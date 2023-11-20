@extends('layouts.app')

@section('title', '')




@section('content')
    <h2>Les bières</h2>
    <ul>
    @foreach ($beers as $beer)
        <li>{{ $beer->name }}</li>
    @endforeach
    </ul>
@endsection