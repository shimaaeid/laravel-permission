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


