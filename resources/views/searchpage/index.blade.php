@extends('layouts.search')

@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')


@section('content')



    <style type="text/css">
        body {
            margin-top: 20px;
            background: #eee;
        }

        .btn {
            margin-bottom: 5px;
        }

        .grid {
            position: relative;
            width: 100%;
            background: #fff;
            color: #666666;
            border-radius: 2px;
            margin-bottom: 25px;
            box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
        }

        .grid .grid-body {
            padding: 15px 20px 15px 20px;
            font-size: 0.9em;
            line-height: 1.9em;
        }

        .search table tr td.rate {
            color: #f39c12;
            line-height: 50px;
        }

        .search table tr:hover {

        }

        .search table tr td.image {
            width: 50px;
        }

        .search table tr td img {
            width: 50px;
            height: 50px;
        }

        .search table tr td.rate {
            color: #f39c12;
            line-height: 50px;
        }

        .search table tr td.price {
            font-size: 1.5em;
            line-height: 50px;
        }

        .search #price1,
        .search #price2 {
            display: inline;
            font-weight: 600;
        }
    </style>




    @livewire('searchpage', ['item' => $request,'direction'=>$direction])



@endsection

