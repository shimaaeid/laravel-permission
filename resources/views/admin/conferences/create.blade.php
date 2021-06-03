@extends('admin.layouts.master')

@section('title','Conferences')
@section('styles')
@endsection

@section('content')

@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
 <div class="container">
          <h2 class="text-center">Conference Form Create</h2>
          <hr>
        </div>
 <div class="container">
<form method="POST" action="{{route('conferences.store')}}" class="ValidationForm" enctype="multipart/form-data">
            @csrf
            <div class="row">

            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                  </div>
                  <input name="date" class="name form-control" placeholder="* Conference Date" type="date">
                </div> <!-- form-group Name -->
            </div>


            
            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                  </div>
                  <input name="time" class="name form-control" placeholder="* Conference Time" type="time">
                </div> <!-- form-group Name -->
            </div>


            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                  </div>
                  <input name="duration" class="name form-control" placeholder="* Conference Duration" type="number">
                </div> <!-- form-group Name -->
            </div>

   
            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                  </div>
                  <input name="subject" class="name form-control" placeholder="* Conference Subject" type="text">
                </div> <!-- form-group Name -->
            </div>


            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group">
                  <select class="custom-select selected-governorate" name="attendee_id" id="governorate_id">
                    <option selected disabled value="">* Attendees</option>
                    @foreach($attendee as $attendee )
                      <option value="{{$attendee->id}}">{{$attendee->attendee_name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>


            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group">
                  <select class="custom-select selected-governorate" name="venue_id" id="governorate_id">
                    <option selected disabled value="">* Venues</option>
                    @foreach($venues as $venues)
                      <option value="{{$venues->id}}">{{$venues->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

              <!------------------------------- Submit Button ------------------------------->
              <div class="form-group offset-md-4 col-md-4">
                <!-- offset-3 col-6 -->
                <!-- disabled -->
                <button type="submit" name="submit" class="btn btn-success btn-block">Add</button>
              </div> <!-- form-group// -->
            </div>
          </form>

          </div>
   
@section('scripts')
@endsection

