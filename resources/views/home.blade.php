@extends('layouts.app')







@section('content')
        <!-- page-content" -->
        <div class="container">
          <h2 class="text-center">Conferences</h2>
          <hr>
        </div>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Attendees</th>
                    <th scope="col">Venue</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($conference as $conference)
                <tr>
                    <th scope="row">{{$conference->id}}</th>
                    <td>{{$conference->date}}</td>
                    <td>{{$conference->time}}</td>
                    <td>{{$conference->duration}}</td>
                    <td>{{$conference->subject}}</td>
                    <td>{{$conference->name}}</td>
                    <td>{{$conference->attendee_name}}</td>

                    
                </tr>
                @endforeach
               
                
            
            </tbody>
        </table>
         
        </div>

      <!-- End page-content -->
      <!-- ------------------------------------- -->
  @endsection
