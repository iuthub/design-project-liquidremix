@extends('layouts.admin')
@section('styles')
    <style>
        .product-container{
            margin-top: 5%;
        }
        #products{
            padding:3%;
        }
    </style>
@endsection
    
@section('content')
    <div class="product-container">
        <div class="row">
            @for($x=1;$x<16;$x++)
                <?php  $link = 'https://mdbootstrap.com/img/Photos/Others/photo'.$x.'.jpg'  ?>
                @include('admin.item')
            @endfor
        </div>
    </div>
@endsection
