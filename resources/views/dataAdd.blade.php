

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admit</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
        

<div class="wrapper">
       <!---sidebar--->
        @include('sidebar')
        
        <div class="table-wrapper">
            <div class="table-title">
              <h1>Form</h1>
                <div class="row">
                   
                   <div class="col-md-12">
                   @if(Session::has('message_add'))
                       <p>{{Session::get('message_add')}}</p>
                     @endif
                     <table class="table table-bordered">
						
							
                                <form id="add" action="{{url('add')}}" method="post">
									                @csrf

                                    <div class="form-group">
                                   <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="one" required>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Roll</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="two" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Class</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="three" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="four" required>
                                  </div>
                                  
                                  <button type="submit" class="btn btn-primary">Add</button>
                                  <small id="emailHelp" class="form-text text-muted">Please Fillup</small>
                                </form>
							
					            </table>
				       </div>	   
				   </div>
      </div>
  </div>
</div>
</body>
</html> 