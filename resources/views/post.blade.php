@extends('layouts.app')
@section('content')
<section id="services" class="bg-light">
        <div class="container">
        
              <nav aria-label="breadcrumb" class="nav-route">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                </nav>
          
          <div class="row">
    
            <div class="col-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        @foreach ($post->photos as $photo)
                        <img src="{{$photo->url}}" style="width: 100%; height:400px;" class="d-block w-100"
                            alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://gmuzbekistan.uz/chevro/images/team/nexia.png"
                                style="width: 100%; height:400px;" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://kazan.riaavto.ru/images/car/daewoo/picCar/2654/4fdenexia.png"
                                style="width: 100%; height:400px;" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
           
    
            <div class="product-detail">
                <h2>Nexia</h2>
                <hr>
                <p class="lead"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente ducimus non, voluptate ipsam consequatur debitis in, quasi molestiae ratione reprehenderit lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam a sequi ea corrupti maxime fugit harum explicabo amet modi atque obcaecati odio perferendis Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto voluptates iure explicabo nemo! Autem similique cum perspiciatis nisi odio consectetur commodi quae aliquid ex mollitia dolore, laboriosam omnis, dolores voluptatum? accusantium sapiente quibusdam, vitae rerum corporis voluptatem. voluptatum perspiciatis quibusdam quas ex quos error quod quidem illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
              </div>
            </div>
    
              <div class="col-4">
                  
                  <ul class="list-group">
                      <li class="list-group-items text-center">20,000,000 So'm</li>
                    </ul>
              <div class="card">
                <div class="card-body">
                  <img class="card-img-top" src="http://www.carlogos.org/logo/Chevrolet-logo-2004-1920x1080.jpg" alt="">
                </div>
                <div class="card-title title-panel">
                      <p><i class="fas fa-address-book"></i> Contact Number:<span>(99) 800 55 98</span></p>
                </div>
                <div class="card-title title-panel">
                    <p><i class="fas fa-thumbtack"></i> Address: Yunusobod region, Ahmad street, 34 Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto vero natus quaerat a quasi asperiores placeat blanditiis. Distinctio natus quae recusandae maiores, at aspernatur facere modi, nulla iusto vitae quis.</p>
              </div>
              <div class="card-title title-panel">
                  <p>Additional info:<span>telegram link</span></p>
            </div>
           
              </div>
              </div>
          </div>
        </div>
      </section>
@endsection