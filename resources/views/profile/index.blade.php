@extends('lay.master')
@section('content')


        <div class="main-panel">        
            <div class="content-wrapper">

                <a class="btn btn-primary me-2" href="{{ url('user')}}">Back</a>

              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"> Form elements</h4>
                      <p class="card-description">
                        Input post information to form 
                      </p>
                      <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('user.update',$user)}}">
                        @csrf
                       
                          @method('PUT')
                       
                      
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" value="{{$user->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">twitter_link</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="{{$user->twitter}}" name="twitter">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">facebook_link</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="{{$user->facebook}}" name="facebook">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">youtube_link</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="{{$user->youtube}}" name="youtube">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">instagram_link</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="{{$user->instagram}}" name="instagram">
                        </div>

                          <div class="form-group">
                            <label for="exampleInputName1">Image</label>
                            <input type="file" class="form-control" id="exampleInputName1"  name="image">
                          </div>
  
                        <div class="form-group">
                          <label for="exampleTextarea1">description</label>
                          <textarea class="form-control" id="exampleTextarea1" rows="4" value="{{$user->desc}}" name="desc" ></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Update</button>

                        
                        <a class="btn btn-light" href="{{url('user')}}" >Cancel</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>



@endsection