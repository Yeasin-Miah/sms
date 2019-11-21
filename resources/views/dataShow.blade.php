@extends("home.app")
@section("container")

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}
	.table-wrapper {
		width: 100%;
		margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
</style>
</head>
<body>
    <div class="wrapper">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
				<div class="col-sm-4"> 
				
				    @if(Session::has('message_add'))
				       <p>{{Session::get('message_add')}}</p>
			         @endif
				     @if(Session::has('message_update'))
				       <p>{{Session::get('message_update')}}</p>
			         @endif
					 @if(Session::has('message_delete'))
				       <p>{{Session::get('message_delete')}}</p>
			         @endif
				</div>
                    <div class="col-sm-4"><h2>Students <b>Details</b></h2></div>
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Roll</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($data as $i) :?>
                    <tr>
                        <td>{{$i->name}}</td>
                        <td>{{$i->dept}}</td>
                        <td>{{$i->roll}}</td>
                        <td>{{$i->class}}</td>
                        <td>
                            <a class="edit" href="{{url('/edit',$i->id)}}" title="Edit"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" href="{{url('delete',$i->id)}}" title="Delete"><i class="material-icons">&#xE872;</i></a>
                        </td> 
                    </tr>
				<?php endforeach; ?>
                    
                    
                </tbody>
            </table>
        </div>
		
    </div>     
</div>
</body>
</html> 

@endsection