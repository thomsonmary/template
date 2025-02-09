@extends('welcome')

@section('templatePertama')
@yield('template1', View::make('tampilwebsite.template1.template1'))
@endsection

@section('templateKedua')
@yield('template2', View::make('tampilwebsite.template2.template2'))
@endsection

@section('templateKetiga')
@yield('template3', View::make('tampilwebsite.template3.template3'))
@endsection

@section('templateKeempat')
@yield('template4', View::make('tampilwebsite.template4.template4'))
@endsection

@section('templateKelima')
@yield('template5', View::make('tampilwebsite.template5.template5'))
@endsection

