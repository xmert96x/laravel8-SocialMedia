<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile with tabs like facebook page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #eee;
        }

        .divider {
            height: 20px;
            display: block;
        }

        /* ========================================================================
         * FORM MISC
         * ======================================================================== */
        .input-group-addon {
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
            min-width: 39px;
        }

        .input-group-addon .ckbox, .input-group-addon .rdio {
            position: absolute;
            top: 4px;
            left: 10px;
        }

        .input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-group-xs > .form-control, .input-group-xs > .input-group-addon, .input-group-xs > .input-group-btn > .btn {
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        .input-sm, .form-group-sm .form-control {
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        .form-control {
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        @media (max-width: 640px) {
            .form-inner-all [class*="col-"]:last-child .form-control {
                margin-top: 15px;
            }
        }


        /* ========================================================================
         * PROFILE
         * ======================================================================== */
        .profile-cover {
            width: 100%;
        }

        .profile-cover .cover {
            position: relative;
            border: 10px solid #FFF;
        }

        .profile-cover .cover .inner-cover {
            overflow: hidden;
            height: auto;
        }

        .profile-cover .cover .inner-cover img {
            border: 1px solid transparent;
            text-align: center;
            width: 100%;
        }

        .profile-cover .cover .inner-cover .cover-menu-mobile {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .profile-cover .cover .inner-cover .cover-menu-mobile button i {
            font-size: 17px;
        }

        .profile-cover .cover ul.cover-menu {
            padding-left: 150px;
            position: absolute;
            overflow: hidden;
            left: 1px;
            float: left;
            bottom: 0px;
            width: 100%;
            margin: 0px;
            background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.24);
        }

        .profile-cover .cover ul.cover-menu li {
            display: block;
            float: left;
            margin-right: 0px;
            padding: 0px 10px;
            line-height: 40px;
            height: 40px;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .profile-cover .cover ul.cover-menu li:hover {
            background-color: rgba(0, 0, 0, 0.44);
        }

        .profile-cover .cover ul.cover-menu li.active {
            background-color: rgba(0, 0, 0, 0.64);
        }

        .profile-cover .cover ul.cover-menu li a {
            color: #FFF;
            font-weight: bold;
            display: block;
            height: 40px;
            line-height: 40px;
            text-decoration: none;
        }

        .profile-cover .cover ul.cover-menu li a i {
            font-size: 18px;
        }

        .profile-cover .profile-body {
            margin: 0px auto 10px;
            position: relative;
        }

        .profile-cover .profile-timeline {
            padding: 15px;
        }

        .img-post {
            width: 30px;
            height: 30px;
        }

        .img-post2 {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
@include('user._header')
@section('content')
@show
@include("user._footer")
</body>
</html>
