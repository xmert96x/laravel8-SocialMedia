@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
    @endsection
    @section('keywords','Facebook','Twitter','İnstagram')


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>Table user information - Bootdey.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style type="text/css">
            .inf-content {


                display: block;
                display: inline-block;

                border: 1px solid #DDDDDD;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;

                padding: 15px 15px 0px 15px;
            }

            tr:not(:first-child) {
                border-top: 1px solid #dee2e6;
            }

        </style>
    </head>
    <body>

    <div class="card-block inf-content   ">
        <div class=" ">

            <img alt="" style="max-width:200px; max-height: *; width:600px;" title=""
                 class="   rounded-circle img-thumbnail isTooltip"
                 src="{{$photo}}" data-original-title="Usuario">

<br>
            <strong>Bilgiler</strong><br>
            <div class="table" style="display: flex">
                <table class="table table-hover table-user-information">
                    <tbody>
                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                id
                            </strong>
                        </td>
                        <td style="       word-break: break-all;" class="text-primary">
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
                        <td style="       word-break: break-all;" class="text-primary">
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
                            <td  style="       word-break: break-all;"class="text-primary">
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
                            <td style="       word-break: break-all;" class="text-primary">
                                {{$user["email"]}}
                            </td>
                        </tr>

                    <tr>
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span>
                               Admin
                            </strong>
                        </td>
                        <td style="       word-break: break-all;" lass="text-primary">

                            @livewire('changerole', ['id' => $user["id"]], key($user["id"]))


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
                        <td style="       word-break: break-all;" class=" text-primary">
                                {{$user["updated_at"]}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>




    </script>
    </body>
    </html>



