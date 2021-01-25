<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
    <div class="row">
@include("user._menu")
@include("user._information ")

        </div>
        <div class="col-lg-9 col-md-9 col-sm-8">

        @include("user._cover")
           @if($page=="timeline")
                <div class="divider"></div>
                <div class="panel rounded shadow">
                    <form action="...">
                        <textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' class="form-control input-lg no-border"  style=" overflow: hidden; resize:none" rows="2" placeholder="What are you doing?..."></textarea>
                    </form>
                    <div class="panel-footer">
                        <button class="btn btn-success pull-right mt-5">POST</button>
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-user"></i></a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                            <li><a href="#"><i class="fa fa-camera"></i></a></li>
                            <li><a href="#"><i class="fa fa-smile-o"></i></a></li>
                        </ul><!-- /.nav nav-pills -->
                    </div><!-- /.panel-footer -->
                </div><!-- /.panel -->
@else

@endif

