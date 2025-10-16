@extends('layout.layout')
@section('header_content')
navbar
@endsection

@section('main_content')
    Iini body obcontent
@endsection

@section('main_content')
    <a href="{{ url('/') }}" > Home </a> |
    <a href="{{ url('/latihan') }}" > Latihan </a> |
    <a href="{{ url('/latihan_dua') }}" > Latihan 2 </a> |
    <a href="https://matanauniversity.ac.id/"> Website Matana </a> |
    <p> this is homepage </p>
@endsection