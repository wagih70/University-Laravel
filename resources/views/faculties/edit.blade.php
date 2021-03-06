@extends('layouts.app')

@section('content')
<div class="container">
         <div class="row">
           <div class="col-8 text-center offset-2 mt-5">
            

            <h1>Edit Faculty</h1>

             <form method="post" action="{{ url('/faculties', ['id' => $faculty->id]) }}">
              {!! csrf_field() !!}
              {{ method_field('PATCH') }}
              <div class="form-group">
                <textarea class="form-control mt-3"  rows="3" placeholder="{{$faculty->name}}" name='name'></textarea>
              </div>
              <button type="submit" class="btn btn-success" value="submit">Update</button>
            </form>


          </div>
         </div>

    </div>
@endsection
