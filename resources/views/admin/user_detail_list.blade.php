@extends('layouts.admin')

@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')

@section('content')

    <style type="text/css">
        #hover:hover {
            background: #ffffff;
        }
    </style>
    <div class="col-12 col-lg-12     col-xxl-12 d-flex">
        <div style="display: table" class="card col-12 ">
            <div class="card-header">

                <h5 class="card-title mb-0">Kullanıcı Listesi</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th class="d-none d-md-table-cell">Eposta</th>
                    <th class="d-none d-xl-table-cell">Üyelik Tarihi</th>
                    <th class="d-none d-xl-table-cell">Son Giriş</th>
                 
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($userlist as  $user)
                    <tr>
                        <td>{{$user["name"]}}</td>
                        <td class=" ">{{$user["surname"]}}</td>
                        <td class="d-none d-md-table-cell">{{$user["email"]}}</td>
                        <td class="d-none d-xl-table-cell">{{$user["created_at"]}}</td>
                        <td class="d-none d-xl-table-cell">{{$user["updated_at"]}}</td>
                        <td>  <span style="padding:3px; font-size: 10px" type="button" class="badge badge-success"
                                    data-toggle="modal" data-target="#exampleModalCenter{{$user["id"]}}">
        Profile Detayı
    </span>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter{{$user["id"]}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 style="font-weight: bold;" class="modal-title"
                                                id="exampleModalLongTitle">Profil Detayı</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @php
                                                echo App\Http\Controllers\admin::user_detail($user["id"]);
                                            @endphp


                                        </div>
                                        <div class="modal-footer">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <th></th>
                    </tr>@endforeach


                <tr>

                    <td id="hover" colspan="6" class=" d-xl-table-cell">
                        <div style="  display: flex;
  justify-content: center;
  align-items: center;"> {{$userlist->links()}}</div>
                        <style>
                            nav > .pagination > {
                                display: flex;
                                flex: 1;
                                width: 100%;
                            }
                        </style>
                    </td>


                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <style>


        body .modal-dialog { /* Width */
            max-width: fit-content;

        }


    </style>

@endsection



