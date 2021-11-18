@extends('lay.master')
@section('content')
  
<div class="main-panel">
  <div class="content-wrapper">
    <a class="btn btn-primary me-2" href="{{url('category')}}">Create Category</a>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Category table</h4>
            <p class="card-description">
              Add Categories 
            </p>
            <div class="table-responsive pt-3">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th> id     </th>
                    <th> Name   </th>
                    <th> Parent_id </th>
                    <th> Subject   </th>
                    <th>Delete/Edit</th>
                

                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as  $category)
                    
                    <tr>
                        <td>{{$category->id}}   </td>
                        <td>{{$category->name}} </td>
                        <td> {{$category->parent_id}}</td>
                        <td> {{$category->subject}}</td>
                        <td>

                          <div class="d-flex">
                            <form method="POST" action="{{route('category.destroy',$category)}}">
                              @csrf
                              @method('DELETE')
                            <button type="submit" style="background:unset; border:none">
                              <svg xmlns="http://www.w3.org/2000/svg" class="delete-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                            </form>
                                <a  href="{{route('category.edit',$category)}}">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="edit-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                  </svg>
                                </a>
                          </div>
                        </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>



            {{-- Post Table --}}
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Post table</h4>
            <p class="card-description">
              Add Posts 
            </p>
            <div class="table-responsive pt-3">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th> id     </th>
                    <th> Name   </th>
                    <th> Cat_id </th>
                    <th>image</th>
                    <th>Price</th>
                    <th> Description</th>
                    <th>Delete/Edit</th>
                

                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as  $post)
                    
                    <tr>
                        <td>{{$post->id}}   </td>
                        <td>{{$post->name}} </td>
                        <td> {{$post->cat_id}}</td>
                        <td><img src="{{asset($post->file)}}"></td>
                        <td>{{$post->price}}
                        <td> {{$post->desc}}</td>
                        <td>

                          <div class="d-flex">
                            <form method="POST" action="{{route('post.destroy',$post)}}">
                              @csrf
                              @method('DELETE')
                            <button type="submit" style="background:unset; border:none">
                              <svg xmlns="http://www.w3.org/2000/svg" class="delete-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                            </form>
                                <a  href="{{route('post.edit',$post)}}">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="edit-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                  </svg>
                                </a>
                          </div>
                        </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
            {{-- End of Post Table  --}}




            {{--User Tablet--}}
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User table</h4>
                    <p class="card-description">
                      Add User 
                    </p>
                    <div class="table-responsive pt-3">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> id     </th>
                            <th> Name   </th>
                            <th> email   </th>
                            <th> password   </th>
                            <th> Description </th>
                            <th> image  </th>
                            <td>instagram_link</td>
                            <td>twitter_link</td>
                            <td>youtube_link</td>
                            <td>facebook_link</td>
      
                            <th>Edit</th>
                        
        
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as  $user)
                            
                            <tr>
                                <td>{{$user->id}}   </td>
                                <td>{{$user->name}} </td>
                                <td> {{$user->email}}</td>
                                <td> {{$user->password}}</td>
                                <td> {{$user->desc}}</td>
                                <td><img src="{{asset($user->image)}}"></td>
                                <td> {{$user->instagram}}</td>
                                <td> {{$user->youtube}}</td>
                                <td> {{$user->facebook}}</td>
                                <td> {{$user->twitter}}</td>
                                <td>
                                  <div class="d-flex">
                                    <form method="POST" action="{{route('user.destroy',$user)}}">
                                      @csrf
                                      @method('DELETE')
                                    <button type="submit" style="background:unset; border:none">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="delete-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                    </button>
                                    </form>
                                        <a  href="{{route('user.edit',$user)}}">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="edit-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                          </svg>
                                        </a>
                                  </div>
                                </td>
                            </tr>
                          @endforeach
        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            {{--End of Table User --}}
  </div>
</div>

 
@endsection