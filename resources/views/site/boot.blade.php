 @extends('lay.master')
 @section('content')




 <a class="btn btn-primary m-2" href="{{url('post')}}">Create Post</a>

              <div class="row flex-grow">
           
        @foreach ($posts as $post )
  
              <div class="col-6 grid-margin stretch-card ">
                <div class="card card-rounded table-darkBGImg">
                  <div class="card-body">
                    <div class="col-sm-3">
                      <h4 class="text-white upgrade-info mb-0 " >
                        {{$post->name}}
                      </h4>
                       <img src="{{asset($post->file)}}" style="" class="image-site" >
                       <a href="#" class="btn btn-info upgrade-btn">Show</a>
                       <span class="fw-bold text-white" style="font-size: 15px;">Price:{{$post->price}}</span>
                       <p class="fw-bold text-white"> {{$post->desc}}</p>
                    </div>
                  </div>
                </div>
              </div>
         @endforeach


            </div>


    </div>
  </div>
</div>
</div>






@endsection