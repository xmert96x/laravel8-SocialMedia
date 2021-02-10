@extends('layouts.user')

@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')




@section('content')


    <style>

        div[class="shadow overflow-hidden sm:rounded-md"]{max-width:600px; font-size:15px;}


        div[class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"]{max-width:600px; font-size:15px;}
    </style><div  class="row" >
    @include("profile.show")
    </div>
@endsection



