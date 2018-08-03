@extends('admin-layout')
@section('content')
    <div class="col-md-8 well">
       @foreach($posts as $post)
         <h2>$post-></h2>
       
       <pre>
             $post->description
         </pre>
       @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1 well">

    </div>
@endsection