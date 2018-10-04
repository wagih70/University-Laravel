@extends('layouts.app')

@section('content')
<div class="container">
         <div class="row">
           <div class="col-8 text-center offset-2 mt-5">
            

            <h1>Create major</h1>

             <form method="post" action="{{ url('/majors/{{$major->id}}')}}">
              {!! csrf_field() !!}
              <div class="form-group">
                <textarea class="form-control mt-3"  rows="3" placeholder="Insert Major Name" name='name'></textarea>
              </div>
              <button type="submit" class="btn btn-success" value="submit">Store</button>
            </form>


          </div>
         </div>

    </div>
@endsection

