@extends('layouts.user')

@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')



@section('content')
      <div class="container ">
        <div class="row"  style=" @if(!$user['myprofile']) margin-top: 15px; @endif display: flex;  "  >
       @livewire('post', ['user' => $user])


        </div>
    </div>
@endsection

