@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <label>Category Title</label>

                <form method="POST" action="/category/store">
                    @csrf
                    <input type="text" class="form-control" name="title">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                        <button class="btn btn-primary" type="submit">생성</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @foreach ($categories as $category) <!-- DB에 있는 카테고리를 전부 불러오는 코드 -->
                    <li class="list-group-item">
                        <a href="{{url('/')}}/category/{{$category->id}}/view">
                            {{$category->title}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
