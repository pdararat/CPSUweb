<div class="col-md-4 col-sm-6 col-xs-12 row-card" style="padding: 1%;">
    <div class="card card-bg" style="background-image: url('{{ url('image/show/'.$blog->cover) }}')">
        <div class="col-md-2 col-md-offset-10 col-xs-2 col-xs-offset-10 card-action">
            <a href="#" class="fa fa-share" data-toggle="modal" data-target="#sharePanel{{$blog->id}}" style="font-size: 20px; color: #FFFFFF"></a>
        </div>
        <a href="{{ url('blog/'.$blog->slug) }}">
            <div class="card-caption" data-toggle="tooltip" data-placement="auto bottom" title="{{ $blog->title }}">
                @if(mb_strlen($blog->title, 'UTF-8') < 22)
                    <h2><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8') !!}</span></h2>
                @else
                    <h2><span>{!! iconv_substr($blog->title, 0, 22, 'UTF-8').'...' !!}</span></h2>
                @endif
                <p><span>By {!! $blog->user->name !!}</span></p>
            </div>
        </a>
    </div>

    @if(Request::is('admin/*'))
        <div class="col-md-6 col-xs-6">
            <a href="{{ url('blog/'.$blog->slug.'/edit') }}" class="btn btn-warning btn-lg btn-block">
                Edit
                <span class="glyphicon glyphicon-wrench"></span>
            </a>
        </div>
        <div class="col-md-6 col-xs-6">
            {!! Form::model($blog, ['method' => 'DELETE', 'url'=>'blog/'.$blog->id]) !!}
            <button class="btn btn-danger btn-block btn-lg" type="submit">
                Delete
                <span class="glyphicon glyphicon-remove-sign"></span>
            </button>
            {!! Form::close() !!}
        </div>
    @endif

    <div id="sharePanel{{$blog->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Share {{ $blog->title }} to ...</h4>
                </div>
                <div class="modal-body" style="height: 200px">
                    <div class="col-md-6 col-xs-6" style="padding: 8%">
                        <button type="button" class="btn btn-primary" id="shareToFB{{$blog->id}}">
                            <img style="height: 100px" class="img-responsive" src="{{ URL::asset('image/fb_circle.png') }}" alt="share to facebook">
                        </button>
                    </div>
                    <div class="col-md-6 col-xs-6" style="padding: 8%">
                        <button type="button" class="btn btn-info" id="shareToTW{{$blog->id}}">
                            <img style="height: 100px" class="img-responsive" src="{{ URL::asset('image/twitter_circle.png') }}" alt="share to twitter">
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('shareToFB{{$blog->id}}').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                href: '{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}',
            }, function(response){});
        };

        document.getElementById('shareToTW{{$blog->id}}').onclick = function() {
            var url = "{{ 'http://202.28.72.71/CPSUweb/public/index.php/blog/'.$blog->slug }}";
            var text = "{{ $blog->title }}";
            window.open('http://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text), '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
        };
    </script>
</div>