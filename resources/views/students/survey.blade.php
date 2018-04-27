@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-body">
                    @if(count($errors)>0)
                      <div class="alert alert-danger" style="max-width: 500px;">
                         <strong>Error</strong> 
                         <ul>
                            @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                            @endforeach
                         </ul>
                      </div>

                    @endif
                    <form class="form-horizontal" method="POST" action="/storingsurveydata">
                    {{ csrf_field() }}

                      <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">1</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q1" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q1" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q1" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q1" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                     
                     <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">2</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q2" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q2" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q2" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q2" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    
                     <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">3</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q3" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q3" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q3" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q3" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->


                     <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">4</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q4" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q4" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q4" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q4" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        

                     <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">5</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q5" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q5" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q5" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q5" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        

                     <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">6</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q6" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q6" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q6" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q6" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                          <!--  -->
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> <font size="4">7</font>Student q1</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="q7" value="Excellent" required>Excellent</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q7" value="Good">Good</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q7" value="Average">Average</label>
                                    <label style="margin-left: 15px;"><input type="radio" name="q7" value="Poor">Poor</label>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        
                     
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                  
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
