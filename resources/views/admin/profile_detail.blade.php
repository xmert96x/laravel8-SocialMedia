@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')

@section('content')


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>Table user information - Bootdey.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            .inf-content{
                border:1px solid #DDDDDD;
                -webkit-border-radius:10px;
                -moz-border-radius:10px;
                border-radius:10px;
                box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>
    <body>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{$photo}}" data-original-title="Usuario">

                </div>
                <div class="col-md-6">
                    <strong>Bilgiler</strong><br>
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                        id
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user["id"]}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-user  text-primary"></span>
                                        Ad
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user["name"]}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-cloud text-primary"></span>
                                       Soyad
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user["surname"]}}
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-envelope text-primary"></span>
                                        Email
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user["email"]}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                      Role
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    Admin
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                       İlk Giriş
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user["created_at"]}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Son Giriş
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{$user["updated_at"]}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
    </body>
    </html>

@show

