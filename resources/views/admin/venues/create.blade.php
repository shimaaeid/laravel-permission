@extends('admin.layouts.master')

@section('title','Venues')
@section('styles')
@endsection

@section('content')
<div class="container">
          <h2 class="text-center">Venues Form Create</h2>
          <hr>
        </div>
        <div class="container">
<form method="POST" action="{{route('venues.store')}}" class="ValidationForm" enctype="multipart/form-data">
            @csrf
            <div class="row">

            <div class="offset-md-3 col-md-6 col-xs-12 mt-5">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="width: 2.5rem;"> <i class="fas fa-flask"></i>
                  </div>
                  <input name="name" class="name form-control" placeholder="* Venue Name" type="text">
                </div> <!-- form-group Name -->
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
