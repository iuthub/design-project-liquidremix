<div class="col-md-3" id="products">
    <!-- Rotating card -->
    <div class="card-wrapper">
        <div id="card-2" class="card card-rotating text-center">

            <!--Front Side-->
            <div class="face front" id="face">

                <!-- Image-->
                <div class="view overlay">
                    <img id="image-card" class="card-img-top" src="{{ $link }}" alt="Example photo">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Content-->
                <div class="card-body">
                    <h4 class="">Card title {{ $x*10 }}</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    <a class="link-text">
                        <a dialogimage="{{ $link }}" dialogtitle="Card title {{ $x*10 }}" class="opendialog" style="background: transparent; border:0;"  data-toggle="modal" data-target="#exampleModalPopovers">Read more <i class="fas fa-angle-double-right"></i></a>
                    </a>
                </div>

            </div>
            <!--Front Side-->

       </div>
    </div>
    <!-- Rotating card -->
</div>
@include('admin.reader')
<script>
    $(document).ready(function(){
        $('.opendialog').click(function(){
            $('#dialog-image')[0].src = $(this)[0].attributes.dialogimage.value;
            $('.dialog-title')[0].innerHTML = $(this)[0].attributes.dialogtitle.value;
        });
    });
</script>
