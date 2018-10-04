@extends('layouts.app')

@section('content')
<div class="container">
         <div class="row">
           <div class="col-8 text-center offset-2 mt-5">
            

            <h1>Faculties</h1>

            <ul class="list-group">
              @foreach($faculties as $faculty)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 
                <a href="/faculties/{{$faculty->id}}"> {{$faculty->name}} </a>
                <div class="d-flex justify-content-between align-items-center"> 
                <a href='/faculties/{{$faculty->id}}/edit'>
                  <button name="submit" class="btn btn-success mr-3">Edit</button>
                </a>
                

               
                <form action="{{ url('/faculties', ['id' => $faculty->id]) }}" method="post">
                    <input type="hidden" name="_method" value="delete" />
                    {!! csrf_field() !!}
                    <button class="btn btn-default" >Delete</button>
                </form>
              
                </div>
              </li> 
              @endforeach
            </ul>


            <a href="/faculties/create"><button class="btn btn-dark mt-3">Add Faculty</button></a>


          </div>
         </div>

    </div>
@endsection
