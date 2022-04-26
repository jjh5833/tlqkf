@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3 class="bg-light border-1 py-3 px-3 mt-3">{{$post->title}}</h3>
                {!!$post->content!!}
                <hr>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <a href="{{url('/')}}/{{$post->id}}/edit" class="btn btn-primary me-md-2" type="button">수정</a>
                    <form method="POST" action="/{{$post->id}}/delete">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">삭제</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 col-1 mx-auto">
                    <button class="btn btn-outline-danger fs-3">
                        <i class="fas fa-heart"></i>2
                    </button>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">A second item</li>
                    <li class="list-group-item list-group-item-action">A third item</li>
                    <li class="list-group-item list-group-item-action">A fourth item</li>
                    <li class="list-group-item list-group-item-action">And a fifth one</li>
                </ul>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <input type="text" class="form-control">
            </div>
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                    <button class="btn btn-primary" type="button">저장</button>
                </div>
            </div>
        </div>
    </div>
@endsection
