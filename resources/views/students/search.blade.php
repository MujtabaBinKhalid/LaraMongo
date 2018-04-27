@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            	<br>
                 <div class="panel-heading panel-headingi">
                 	<div class="col-md-4">
                     		</div>
                 	<div class="col-md-6" style="float: right;">
                 		<form class="form-inline" method="GET" action="">
                    		   <div class="form-group">
                                 <input style="width: 300px;" class="form-control" placeholder="Search By Student ID" type="text" name="search">
                                 
                              </div>
                    		<input type="submit" class="btn btn-info" value="Search">
                    	</form>
                 	</div>
                 
                 </div>
                 <br><br>

            <div class="panel-body">
              <h4 style="margin-left: 10px;"><b>Search For:</b> </h4><br>
                    <table class="table table-hover">
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
                        </thead>

                        <tbody>
                          @if($students->count()>0)
                            <?php $i=0;?>
                          @foreach($students as $student)
                          
                            <tr>
                              <td><?php echo ++$i;?></td>
                              <td>{{ $student->name }}</td>
                              <td>{{ $student->sid }}</td>
                              <td>{{ $student->email }}</td>
                              <td>{{ $student->phone }}</td>
                              <td>{{ $student->gender }}</td>
                            </tr>
                          @endforeach
                          @else
                          <tr class="text-center">
                              <td colspan="5"><b>OOpss!!!!!! No Data Found</b></td>
                          </tr>
                          @endif
                        </tbody>
                    </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
