<div>

    <div wire:init="return('{{$user['id']}}')">
<div></div>


        @foreach( $post as $item)


    <div  class="col-sm-6">
        <div class="panel panel-success rounded shadow">
            <div class="panel-heading no-border">
                <div class="pull-left half">
                    <div class="media">
                        <div class="media-object pull-left">
                            <img src="{{url($user['photo'])}}" alt="..." class="img-circle img-post">
                        </div>
                        <div class="media-body">
                            <a href="{{url("profile/".$user['id'])}}" class="media-heading block mb-0 h4 text-white">{{$user['name']}}</a>
                            <span class="text-white h6">on 8th June, 2014</span>
                        </div>
                    </div>
                </div><!-- /.pull-left -->
                <div class="pull-right">
                    <a href="javascript:void(0)"  wire:click="likes('{{$item->likes}}','{{$item->id}}')"class="text-white h4"><i class="fa fa-heart"></i> {{$item->likes}}</a>
                </div><!-- /.pull-right -->
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div class="inner-all block">
                <!--    <h4>Upload on my album :D</h4>-->
                    <p>
                      {{$item->content}}              </p>
                <!--    <blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, delectus!</blockquote>-->
                    @php $media = $item->media ;
            $media = json_decode($media);  @endphp
                    @if(isset($media))
                    @foreach( $mdedia as $img)
                    <img data-no-retina="" src= "{{url($img)}}" alt="..." width="100"> @endforeach
                    @endif
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
            @endforeach
    @livewireStyles

    <script src="{{ mix('js/app.js') }}"></script>

@livewireScripts

