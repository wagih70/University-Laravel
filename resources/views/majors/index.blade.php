@extends('layouts.app')

@section('content')
<div class="container">
         <div class="row">
           <div class="col-8 text-center offset-2 mt-5">
            

            <h1></h1>

            <ul class="list-group">
              @foreach($majors as $major)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 
                {{$major->name}}
                <div class="d-flex justify-content-between align-items-center"> 
                <a href='/majors/{{$major->id}}/edit'>
                  <button name="submit" class="btn btn-success mr-3">Edit</button>
                </a>
                

               
                <form action="{{ url('/majors',['id' => $major->id]) }}" method="post">
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
