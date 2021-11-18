
@extends('lay.master')
@section('content')



<div class="main-panel">
    <div class="content-wrapper">
      {{-- <a class="btn btn-primary me-2" href="{{url('profile')}}">Create User</a> --}}
  
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
                        
                                  <a  href="{{route('user.edit',$user)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="edit-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                  </a>
                            </div>
                          </td>
                      </tr>
                 
  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
  
    </div>
  </div>
  
@endsection