@extends('admin.layouts.master')

@section('title','Attendees')
@section('styles')
@endsection

@section('content')
<div class="container">
         <h2 class="text-center">Attendees Form Edit</h2>
          <hr>
          </div>
          <div class="container">
        <form method="POST" action="{{route('attendees.update',['id' =>$attendee->id ])}}" class="ValidationForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                    <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                        <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                        </div>
                        <input name="attendee_name" class="name form-control" placeholder="* Name Name" type="text" value="{{$attendee->attendee_name}}">
                        </div> <!-- form-group Name -->
                    </div>


                    
                    <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                        <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                        </div>
                        <input name="mobile" class="name form-control" placeholder="* Attendee Mobile" type="tel" value="{{$attendee->mobile}}">
                        </div> <!-- form-group Name -->
                    </div>



                    
                    <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                        <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                        </div>
                        <input name="side" class="name form-control" placeholder="* Attendee Side" type="text" value="{{$attendee->side}}">
                        </div> <!-- form-group Name -->
                    </div>

                    <!------------------------------- Submit Button ------------------------------->
                    <div class="form-group offset-md-4 col-md-4">
                        <!-- offset-3 col-6 -->
                        <!-- disabled -->
                        <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>
                    </div> <!-- form-group// -->
                    </div>

                </form>
          </div>
   
@section('scripts')
@endsection

