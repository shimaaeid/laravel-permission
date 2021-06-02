@extends('admin.layouts.master')

@section('title','Attendees')
@section('styles')
@endsection

@section('content')
        <!-- page-content" -->
        <div class="container">
          <h2 class="text-center">Attendees Conferences</h2>
          <hr>
        </div>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Side</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($attendees as $attendees)
                <tr>
                    <th scope="row">{{$attendees->id}}</th>
                    <td>{{$attendees->attendee_name}}</td>
                    <td>{{$attendees->mobile}}</td>
                    <td>{{$attendees->side}}</td>
                    <td>
                    <a><input type="submit" value="Update"></a>
                    <form action="{{route('attendees.delete', ['id' => $attendees->id])}}" method="post">
                         {{ csrf_field() }}
                     
                         <a href="{{route('attendees.delete',['id' => $attendees->id])}}">
                           <button type="button">delete</button>
                          </a>
                    </form>
                    </td>
                    
                </tr>
                @endforeach
               
                
            
            </tbody>
        </table>
         
        </div>

      <!-- End page-content -->
      <!-- ------------------------------------- -->
  @endsection

  @section('scripts')
  @endsection


