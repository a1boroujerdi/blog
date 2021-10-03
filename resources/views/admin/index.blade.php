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
  </div>
</div>

 
@endsection