@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{url('/')}}/create" class="btn btn-success" type="button">글쓰기</a>
                </div>
            </div>
        </div>
        <hr>

        @if(count($posts)>0)
            <div class="row mt-3">
                <div class="col-12">
                    <h4>{{$category_title}}</h4>
                    <ul class="list-group">
                        @foreach($posts as $post)
                            <li class="list-group-item list-group-item-action">
                                <a href="{{url('/')}}/1/view"
                                   style="text-decoration : none"
                                   class="text-dark">
                                    {{$post->title}}
                                </a>
                                <span class="badge rounded-pill bg-info"><i class="far fa-comment-dots"></i>4</span>
                                <span class="badge rounded-pill bg-success"><i class="fas fa-heart"></i>2</span>
                                <br>
                                <small>{{$post->created_at}} | by jo</small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr>

        @endif


    </div>

@endsection
