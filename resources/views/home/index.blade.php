@extends('layouts.app')

@section('content')
@if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center section-gaping">
        <div class="col">
            <div class="card auth">
                <div class="card-header">My posts/ads</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                @foreach( $posts as $post )
                    <div class="card box" style="width:210px">
                        <img class="card-img-top" src="/storage/files/{{$post->photos->first()->url}}" alt="Card image"
                            style="width:100%">
                        <div class="card-body card-content ">
                            <h4 class="card-title">{{ $post->title }}<span id="value-product"><i
                                        class="fas fa-check-circle"></i></span></h4>
                            <p class="card-text">{{ $post->description }}</p>
                            <p class="card-text"><span>{{$post->price}}</span></p>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="{{route('post.get',['id'=>$post->id])}}" class="btn btn-outline-danger">View
                                        Product</a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="{{route('post.get',['id'=>$post->id])}}" class="btn btn-outline-danger">View
                                        Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
