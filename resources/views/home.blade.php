@extends('layouts.app')

@section('title_name')
    Home
@endsection

@section('content')
    <x-lists-post :posts="$posts" />
@endsection
