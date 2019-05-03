<div class="col-md-3" id="products">
    <!-- Rotating card -->
    <div class="card-wrapper">
        <div id="card-2" class="card card-rotating text-center">

            <!--Front Side-->
            <div class="face front">

                <!-- Image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ $link }}" alt="Example photo">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Content-->
                <div class="card-body">

                    <h4 class="">Card title {{ $x*10 }}</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    <a class="link-text">
                        <h5 id="{{ $x }}" onclick="app(this.id)" data-toggle="modal" data-target="#exampleModalPopovers">Read more <i class="fas fa-angle-double-right"></i></h5>
                    </a>

                </div>

            </div>
            <!--Front Side-->

       </div>
    </div>
    <!-- Rotating card -->
</div>

<script>
    function app(clicked_id){
        window.alert(clicked_id);
        @include('admin.reader')
    }

</script>
