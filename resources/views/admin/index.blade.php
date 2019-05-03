@extends('layouts.admin')
@section('styles')
    <style>
        
        nav{
            background: rgba(22, 21, 21, 0.918);
            color:rgba(255,255,255,0.5);
        }
        nav a{
            color: white;
            color:rgba(255,255,255,0.5);
        }

        #navbarDropdownMenuLink-4{
            color:rgba(255,255,255,0.5);
        }

        #navbarDropdownMenuLink-4:hover{
            color:rgba(255,255,255,1);
        }
        #products{
            padding:3%;
        }
        .product-container{
            margin-top: 5%;
        }
    </style>
@endsection

@section('nav')
    <nav class="mb-1 navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">
                        <i class="fas fa-bell"></i> Notification
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-user"></i> Profile </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="#">Statistics</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection
    
@section('content')
    <div class="product-container">
        <div class="row">
            @for($x=1;$x<15;$x++)
                <?php  $link = 'https://mdbootstrap.com/img/Photos/Others/photo'.$x.'.jpg' ?>
                @include('admin.item')
            @endfor
        </div>
    </div>
    @include('admin.reader')
@endsection
