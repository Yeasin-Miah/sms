




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
                        
                            
                            <form action="{{url('tupdate',$data->id)}}" method="post">
                                    @csrf
                                    
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="one"value="{{$data->name}}">
                                    
                                  
                                  
                                    <label for="exampleInputPassword1">Subject</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="two" value="{{$data->subject}}">
                                 
                                  
                                    <label for="exampleInputPassword1">Qualification</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="three" value="{{$data->qualification}}">
                                  
                                  
                                    <label for="exampleInputPassword1">Department</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="four" value="{{$data->department}}">
                                  
                                  
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