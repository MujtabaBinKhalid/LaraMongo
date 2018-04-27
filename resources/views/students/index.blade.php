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
  var input, filter, table, tr, td, i;
  var selection = document.getElementById("selection");
	var selectionIndex = selection.selectedIndex;
  console.log(selectionIndex);
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[selectionIndex];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
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
                              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">                   
    
      <select id="selection">
       <option value="1">Serial No.</option>
       <option value="1">Name</option>
       <option value="2">ID</option>
       <option value="3">Email</option>
    </select>
                    </div>
                    	
                 </div>
                 <br><br>
            <div class="panel-body">
              
<table id="myTable"  class="order-table table">
<thead>
                        <tr class="header">
                             <th>Serial No.</th>
                              <th>Name</th>
                              <th>ID</th>
                               <th>Email</th> 
                               <th>Student Phone</th> 
                               <th>Student Gender</th>   
                              <th>Edit</th>
                              <th>Delete</th>
                              </tr>
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
