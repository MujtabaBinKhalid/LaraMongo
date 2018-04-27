<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="nh6VB5cicKzzrzUAqZSLPa6Rg7OIzCIdyRkRTfpc">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://localhost:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://localhost:8000/css/app.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function myFunction() {
    alert("Hello! I am an alert box!");
}
</script>
<script>
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="http://localhost:8000">
                    Laravel
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

  @if(!session()->has('checking')) 
    <li><a class="nav-link" href="http://localhost:8000/login">Login</a></li>
    @endif

    @if(session()->has('checking')) 
<li><a class="nav-link" href=""> <b>Team Nerdware </b></a></li>
<li><a class="nav-link" href="/logout">Logout</a></li>
    @endif


                                            </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            	<br>
                 <div class="panel-heading panel-headingi">
                 	<div class="col-md-4">
                 		<a href="/surveyresult"><button class="btn btn-primary">Survey Detail</button></a>
                         <a href="/create"><button class="btn btn-primary">Add Students</button></a>
                 	</div>
                 	<div class="col-md-6" style="float: right;">
                 		
                       	   <div class="form-group">
                                 <input style="width: 300px;" class=" light-table-filter" placeholder="Search By Student Name" data-table="order-table" type="search" name="search">
                                 
                              </div>
                    	
                 </div>
                 <br><br>
            <div class="panel-body">
                    <table class="order-table table">
                        <thead>
                             <th>No. </th>
                              <th>
                                    Student Name
                              </th>
                              <th>
                                   Student ID
                              </th>
                               <th>
                                   Student Mail
                              </th> 
                               <th>
                                   Student Phone
                              </th> 
                               <th>
                                   Student Gender
                              </th>   
                              <th>
                                    Edit
                              </th>

                              <th>
                                    Delete
                              </th>
                        </thead>

                        <tbody>
                            <?php $i=0;?>
                          @foreach($students as $student)
                          
                            <tr>
                              <td><?php echo ++$i;?></td>
                              <td>{{ $student->name }}</td>
                              <td>{{ $student->id }}</td>
                              <td>{{ $student->email }}</td>
                              <td>{{ $student->phone }}</td>
                              <td>{{ $student->gender }}</td>
                              <td>
                                    <a href="/edituser/{{$student->id}}" class="btn btn-xs btn-info">Edit</a>
                              </td>
                              <td>
                              <a href="/deleteuser/{{$student->id}}" class="btn btn-xs btn-danger">Delete</a>
                                   
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
</main>
    </div>
</body>
</html>
