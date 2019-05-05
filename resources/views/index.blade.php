@extends('layouts.app')
@section('content')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        var timeout;
        $('#title').keyup(function () {
            var key = $(this).val();
            $('#searchForm').attr('action',`/search/${key}`);
            console.log($('#searchForm').attr('action'));
            if (key != '') {
                var _token = $('input[name="_token"]').val();
                if (timeout) {
                    clearTimeout(timeout);
                }
                timeout = setTimeout(() => {
                    $.ajax({
                        url: `/api/search/${key}`,
                        method: "GET",
                        dataType: "json",
                        data: {
                            _token: _token
                        },
                        success: function (data) {
                            //console.log(data[0]);
                            $('#searchResults').fadeIn();
                            var res = '<ul>';
                            for (var i = 0; i < data.length; i++) {
                                res +=`<a href="/post/${data[i].id}">${data[i].title}</a><br>`
                            }
                            res += '</ul>';
                            console.log(res);
                            //Used jQuery's docs for the line below line. http://api.jquery.com/html/
                            $('#searchResults').html(res);
                        }
                    });
                }, 500);
            }
        });
        

    })
</script>
<header class=" text-white filters">
   <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      </div>
   </div>
   <div class="container text-center">
      <h1 class="text">{{ config('app.name','melon') }}</h1>
      <p class="lead">Find anything, sell anything</p>
      <div>
         <div class="form-group">
            <input type="text" name="title" id="title" class="form-control input-lg" placeholder="Search">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div id="searchResults">
            </div>
         </div>
      </div>
      {{ csrf_field() }}
      <div class="category"></div>
      <div class="row item">
         <a href="{{route('category',['category'=>'electronics'])}}" class="col item-1">
            <div class="item-group pointer">
               <h6><i class="fa fa-cloud"></i> Electronics</h6>
            </div>
         </a>
         <a href="{{route('category','garden')}}" class="col item-1">
            <div class="item-group pointer">
               <h6><i class="fa fa-cloud"></i> Garden</h6>
            </div>
         </a>
         <a href="{{route('category','clothes')}}" class="col item-1">
            <div class="item-group pointer">
               <h6>  <i class="fas fa-tshirt"></i> Clothes </h6>
            </div>
         </a>
         <a href="{{route('category','services')}}" class="col item-1">
            <div class="item-group pointer">
               <h6><i class="fas fa-concierge-bell"></i> Services </h6>
            </div>
         </a>
      </div>
      <div class="row item">
         <a href="{{route('category','children')}}" class="col item-1">
            <div class="item-group pointer">
               <h6><i class="fas fa-child"></i> Children</h6>
            </div>
         </a>
         <a href="{{route('category','home-real-estate')}}" class="col item-1">
            <div class="item-group pointer">
               <h6><i class="fas fa-home"></i> Home Real Estate</h6>
            </div>
         </a>
         <a href="{{route('category','fashion')}}" class="col item-1">
            <div class="item-group pointer">
               <h6> <i class="fas fa-tshirt"></i> Fashion </h6>
            </div>
         </a>
         <a href="{{route('category','cars')}}" class="col item-1">
            <div class="item-group pointer">
               <h5> <i class="fas fa-car"></i>  Cars </h5>
            </div>
         </a>
      </div>
   </div>
   </div>
</header>

<section id="about">
  
  <div class="container">
    <div class="row">
      <h1 class="text-center">Premium Products</h1>
    </div>
 
    <div class="box-panel">
      <div class="row">
       @foreach( $posts as $post )
        <div class="card box"style="width:210px">
          <img class="card-img-top" src="/storage/files/{{$post->photos->first()->url}}" alt="Card image" style="width:100%">
          <div class="card-body card-content ">
            <h4 class="card-title">{{ $post->title }}<span id="value-product"><i class="fas fa-check-circle"></i></span></h4>
            <p class="card-text">{{  Str::limit($post->description, 70, ' (...)') }}</p>
            <p class="card-text"><span>{{$post->price}}</span></p>
            <a href="{{route('post.get',['id'=>$post->id])}}" class="btn btn-outline-danger">View Product</a><i class="fas fa-cart-plus icons"></i>
          </div>
        </div>
          @endforeach

    


</section>

<section id="services" class="bg-light">
    <div class="container text-center">
        <h1 class="ad-banner">Some relevant Photos</h1>
    </div>
    <div class="bd-example ">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://www.raincloudmagic.com/wp-content/uploads/2011/09/propsheader-1000x300.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.catbirdnyc.com/media/catalog/category/2018_Categories-Fragrance2-1000x300.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://static1.squarespace.com/static/57dea572579fb3ea46810d43/t/580e06ddd1758e7907272fdc/1477314272980/Background+B+1000x300.png?format=2500w"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</section>
@endsection