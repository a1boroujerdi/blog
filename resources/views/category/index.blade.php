@extends('lay.master')
@section('content')


        <div class="main-panel">        
            <div class="content-wrapper">

                <a class="btn btn-primary me-2" href="{{($edit) ? route('category.update',$category) :  url('admin')}}">Back</a>

              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"> Form elements</h4>
                      <p class="card-description">
                        Input category information to form 
                      </p>
                      <form class="forms-sample" method="POST" action="{{($edit) ? route('category.update',$category) :  url('category')}}">
                        @csrf
                        @if ($edit)
                          @method('PUT')
                        @endif
                      
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" value="{{($edit) ? $category->name : ""}}" name="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputCity1">Parent_id</label>
                          <select type="text" class="form-control" id="exampleInputCity1"  name="parent_id">
                            <option>Main Category</option>
                            @foreach ($categories as  $item)
                              <option value="{{$item->id}}" {{$edit && $parent_id==$item->id ?'selected':''}}>{{$item->name}}</option>
                              @foreach ($item->children as $child)
                              <option value="{{$child->id}}" {{$edit && $parent_id==$item->id ?'selected':''}}>{{$item->name}}-->{{$child->name}}</option>
                                  
                              @endforeach
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleTextarea1">Subject</label>
                          <textarea class="form-control" id="exampleTextarea1" rows="4" value="{{($edit) ? $category->subject : ""}}" name="subject" ></textarea>
                        </div>
                        @if ($edit)
                        <button type="submit" class="btn btn-primary me-2">Update</button>

                        @else
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                       @endif
                        <a class="btn btn-light" href="{{route('admin')}}" >Cancel</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>



@endsection