@extends('layouts.app')
@section('content')
@include('partials.errors')
<section id="services" class="bg-light">
    <div class="container section-gaping">

        <nav aria-label="breadcrumb" class="nav-route">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Your profile</a></li>
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Your ads</a></li>
                <li class="breadcrumb-item active" aria-current="page">New ad</li>
            </ol>
        </nav>
        <div class="row">
            <h2 class="text-head">Post your advertisement to <span class="text-reg">melon</span></h2>
            <hr>
        </div>
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body col-8">
                        <div class="card-title">
                          <form method="POST" action="{{ route('home.create') }}">
                                
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" 
                                        placeholder="Title of the ad" data-toggle="popover"
                                        data-placement="right">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" placeholder="Choose category">
                                        <option value="1">choose...</option>
                                        <option value="children">Children</option>
                                        <option value="garden">Garden</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="services">Service</option>
                                        <option value="cars">Car</option>
                                        <option value="electronics">Electronics</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                  </div>
                                <div class="form-group">
                                    <legend for="formGroupExampleInput4">Upload some photos</legend>

                                    <div class="col-4">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                                            <label class="custom-file-label" for="customFileLangHTML"
                                                data-browse="photo">Browse</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">POST</button>
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
