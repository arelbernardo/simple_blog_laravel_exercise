@extends('master')

@section('content')
    <div class="container-fluid" id="profile_info_container">
        <div class="container">
            <header class="header pull-left">
                <img id="profile_image" src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.0-9/19222_1595608517344135_7632225686300314458_n.jpg?oh=1f19cb8b01beb6f9d9c89b5e26fe6d3c&oe=59935576">
                <div class="pull-right" id="profile_name_container">
                    <p class="profile_name">{{$userInfo->profileName}}</p>
                    <h2 class="profile_position">{{$userInfo->job_position}}</h2>
                </div>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row" id="profile_newsfeed">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 panels">
                <section class="section profile_create_post">
                    <div class="section-inner">
                        <h1 class="headings">Create a Post</h1>
                        {{--@if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif--}}
                        <form method="POST" action="{{route('profile_post_create', session('profile_name'))}}">
                            {{ csrf_field() }}
                            <div class="contents">
                                <div class="item">
                                    <textarea id="content" name="content" class="form-control" rows="5" placeholder="What's on your mind?"></textarea>
                                </div>
                                <button class="btn btn-primary">Post</button>
                            </div>
                        </form>
                    </div>
                </section>
                @if($articles)
                    @foreach($articles as $article)
                        <section class="section profile_blog_lists">
                            <div class="section-inner">
                                <div class="contents">
                                    {{$article->content}}
                                </div>
                                <hr>
                                <div class="timestamp">{{\Carbon\Carbon::parse($article->updated_at)->diffForHumans()}}</div>
                            </div>
                        </section>
                    @endforeach
                @endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 panels">
                <section class="section profile_links">
                    <div class="section-inner">
                        <div class="contents">

                        </div>
                    </div>
                </section>
                <section class="section profile_others">
                    <div class="section-inner">
                        <h1 class="headings">Skills</h1>
                        <div class="contents">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection