@extends('admin.layouts.master')

@section('title','Venues')
@section('styles')
@endsection

@section('content')
        <!-- page-content" -->
        <div class="container">
          <h2 class="text-center">Venues Conferences</h2>
          <hr>
        </div>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($venues as $venues)
                <tr>
                    <th scope="row">{{$venues->id}}</th>
                    <td>{{$venues->name}}</td>
                    <td>
                    <form action="{{route('venues.edit', ['id' => $venues->id])}}" method="post" style="float:left">
                         {{ csrf_field() }}
                     
                         <a href="{{route('venues.edit',['id' => $venues->id])}}">
                           <button type="button">Edit</button>
                          </a>
                    </form>


                    <form action="{{route('venues.delete', ['id' => $venues->id])}}" method="post">
                         {{ csrf_field() }}
                     
                         <a href="{{route('venues.delete',['id' => $venues->id])}}">
                           <button type="button">Delete</button>
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


