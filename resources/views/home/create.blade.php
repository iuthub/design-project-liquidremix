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
                    <h2 class="text-center">Post your Adverts in Your timeline</h2><hr>
                </div>
          <div class="row">
        
              <div class="col">
                <div class="card">
              
               <div class="card-body col-8">
                   <div class="card-title">
                        <form>
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Sarlavha</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"  placeholder="Example input" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">Category</label>
                                  <select class="form-control" id="exampleFormControlSelect1" placeholder="choose...">
                                    <option value="1">choose...</option>
                                    <option value="#">Children</option>
                                    <option value="#">Gardern</option>
                                    <option value="#">Fashion</option>
                                    <option value="#">Service</option>
                                    <option value="#">Car</option>
                                    <option value="#">Electronics</option>
                                  </select>
                                </div>
                          
                                <div class="form-group">
                                        <legend for="formGroupExampleInput3">Definition</legend>
                                        <textarea rows="4" cols="63"></textarea><br><small>white your def.</small>
                                </div>
                                <div class="form-group">
                                        <legend for="formGroupExampleInput4">UPLOAD PRODUCT PHOTOS</legend>
                                       
                                            <div class="col-4">
                                        <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileLangHTML">
                                                <label class="custom-file-label" for="customFileLangHTML" data-browse="photo">upload via computer</label>
                                              </div>
    
                                              <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFileLangHTML">
                                                    <label class="custom-file-label" for="customFileLangHTML" data-browse="photo">upload via computer</label>
                                                  </div>
                                                  
                                              <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFileLangHTML">
                                                    <label class="custom-file-label" for="customFileLangHTML" data-browse="photo">upload via computer</label>
                                                  </div>
                                                  
                                              <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFileLangHTML">
                                                    <label class="custom-file-label" for="customFileLangHTML" data-browse="photo">upload via computer</label>
                                                  </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <legend>Contact infomation</legend>
                                                <label class=""></label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                              
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary">POST</button>
    
                              </form>    
                  
                  </div>
               </div>
           </div>
              </div>
          </div>
        </div>
      </section>
@endsection