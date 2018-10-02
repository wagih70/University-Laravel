@extends('layouts.app')

@section('content')
<div class="container">
         <div class="row">
           <div class="col-8 text-center offset-2 mt-5">
            

            <h1>Faculties</h1>

            <ul class="list-group">
              
              <li class="list-group-item d-flex justify-content-between align-items-center">

                
                <div class="d-flex justify-content-between align-items-center"> 
                <a href="#">
                  <button name="submit" class="btn btn-success mr-3">Edit</button>
                </a>

                <form action='#' method="post">
                  <input type="hidden" name="id" value="#">
                  <button name="submit" class="btn btn-danger">Delete</button>
                </form>

                </div>
              </li> 
              
            </ul>


            <a href="#"><button class="btn btn-dark mt-3">Add Todo</button></a>


          </div>
         </div>

    </div>
@endsection
