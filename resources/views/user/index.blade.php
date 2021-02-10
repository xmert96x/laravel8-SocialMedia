@extends('layouts.user')

@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')



@section('content')
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-success rounded shadow">
                <div class="panel-heading no-border">
                    <div class="pull-left half">
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="..." class="img-circle img-post">
                            </div>
                            <div class="media-body">
                                <a href="#" class="media-heading block mb-0 h4 text-white">John Doe</a>
                                <span class="text-white h6">on 8th June, 2014</span>
                            </div>
                        </div>
                    </div><!-- /.pull-left -->
                    <div class="pull-right">
                        <a href="#" class="text-white h4"><i class="fa fa-heart"></i> 15.5K</a>
                    </div><!-- /.pull-right -->
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body no-padding">
                    <img  src="https://via.placeholder.com/340x210/" alt="..." class="img-responsive full-width">
                    <div class="inner-all block">
                        view all <a href="#">7 comments</a>
                    </div><!-- /.inner-all -->
                    <div class="line no-margin"></div><!-- /.line -->
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left -->
                        <div class="media-body">
                            <a href="#" class="h4">John Doe</a>
                            <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body -->
                    </div><!-- /.media -->
                    <div class="line no-margin"></div><!-- /.line -->
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left -->
                        <div class="media-body">
                            <a href="#" class="h4">John Doe</a>
                            <small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo ea voluptate nesciunt deleniti.</small>
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body -->
                    </div><!-- /.media -->
                </div><!-- /.panel-body -->
                <div class="panel-footer">
                    <form action="#" class="form-horizontal">
                        <div class="form-group has-feedback no-margin">
                            <input class="form-control" type="text" placeholder="Your comment here...">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                        </div>
                    </form>
                </div><!-- /.panel-footer -->
            </div><!-- /.panel -->
        </div>
        <div class="col-sm-6">
            <div class="panel panel-success rounded shadow">
                <div class="panel-heading no-border">
                    <div class="pull-left half">
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="img-circle img-post">
                            </div>
                            <div class="media-body">
                                <a href="#" class="media-heading block mb-0 h4 text-white">John Doe</a>
                                <span class="text-white h6">on 8th June, 2014</span>
                            </div>
                        </div>
                    </div><!-- /.pull-left -->
                    <div class="pull-right">
                        <a href="#" class="text-white h4"><i class="fa fa-heart"></i> 15.5K</a>
                    </div><!-- /.pull-right -->
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body no-padding">
                    <div class="inner-all block">
                        <h4>Upload on my album :D</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste omnis fugiat porro consequuntur ratione iure error reprehenderit cum est ab similique magnam molestias aperiam voluptatibus quia aliquid! Sed, minima.
                        </p>
                        <blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, delectus!</blockquote>

                        <img data-no-retina="" src="https://via.placeholder.com/340x210/" alt="..." width="100">
                        <img data-no-retina="" src="https://via.placeholder.com/340x210/" alt="..." width="100">
                        <img data-no-retina="" src="https://via.placeholder.com/340x210/" alt="..." width="100">
                    </div><!-- /.inner-all -->
                    <div class="inner-all bg-success">
                        view all <a href="#">7 comments</a>
                    </div>
                </div><!-- /.panel-body -->
                <div class="panel-footer no-padding no-border">
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left -->
                        <div class="media-body">
                            <a href="#" class="h4">John Doe</a>
                            <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body -->
                    </div><!-- /.media -->
                    <div class="line no-margin"></div><!-- /.line -->
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left -->
                        <div class="media-body">
                            <a href="#" class="h4">John Doe</a>
                            <small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo ea voluptate nesciunt deleniti.</small>
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body -->
                    </div><!-- /.media -->
                    <div class="line no-margin"></div><!-- /.line -->
                    <form action="#" class="form-horizontal inner-all">
                        <div class="form-group has-feedback no-margin">
                            <input class="form-control" type="text" placeholder="Your comment here...">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                        </div>
                    </form><!-- /.form-horizontal -->
                </div><!-- /.panel-footer -->
            </div><!-- /.panel -->


    </div>
    </div>
@endsection

