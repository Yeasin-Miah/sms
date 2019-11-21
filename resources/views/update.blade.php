@extends("home.app")
@section("container")
<div class="table-wrapper">
            <div class="table-title">
            
                <div class="row">
                   <div class="col-md-12">
                   
                     <table class="table table-bordered">
                     @if(Session::has('message'))
                       <p>{{Session::get('message')}}</p>
                     @endif
                        
                            
                            <form action="{{url('update',$data->id)}}" method="post">
                                    @csrf
                                    
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="one"value="{{$data->name}}">
                                    
                                  
                                  
                                    <label for="exampleInputPassword1">Roll</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="two" value="{{$data->roll}}">
                                 
                                  
                                    <label for="exampleInputPassword1">Class</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="three" value="{{$data->class}}">
                                  
                                  
                                    <label for="exampleInputPassword1">Department</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="four" value="{{$data->dept}}">
                                  
                                  
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  <small id="emailHelp" class="form-text text-muted">Edit Now</small>
                                </div>
                            </form>
                            
                    </table>
                       
                </div>
            </div>
         </div>
    </div>
    @endsection