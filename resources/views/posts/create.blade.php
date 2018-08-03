@extends('admin-layout')
@section('content')
    <div class="col-md-8 col-md-offset-2 well">
            {!!Form::open( array('route' =>'posts.store','method'=>'post','class'=>'form-horizontal contact_form'))!!}

            <div class="form-group">
                {{Form::label('title', 'Title', array('class' => ''))}}
                {{Form::text('title', $title = null, array('class' => 'form-control','id'=>'title',  'placeholder' => 'Title'))}}
                @if ($errors->has('title')) <p class="text-danger">{{ $errors->first('title') }}</p> @endif
            </div>
            <div class="form-group">
                {{Form::label('category_id', 'Category', array('class' => ''))}}
        
                    <select class="form-control" name="category_id" data-placeholder="Choose a Category" tabindex="1">
                        <option value="">Select Category...</option>
                        <option value="1">Laravel</option>
                        <option value="0">PHP</option>
                    </select>
                @if ($errors->has('category_id')) <p class="text-danger">{{ $errors->first('category_id') }}</p> @endif
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description', array('class' => ''))}}
                {{Form::textarea('description', $description = null, array('class' => 'form-control','id'=>'post-ckeditor',  'placeholder' => 'Description'))}}
                @if ($errors->has('description')) <p class="text-danger">{{ $errors->first('description') }}</p> @endif
            </div>
            <div class="form-group">
                    {!! Form::file('image') !!}
            </div>
            <div class="form-group">
                {{Form::label('publication_status', 'Publication Status', array('class' => ''))}}
        
                    <select class="form-control" name="publication_status" data-placeholder="Choose a Category" tabindex="1">
                        <option value="">Select Status...</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublish</option>
                    </select>
                @if ($errors->has('publication_status')) <p class="text-danger">{{ $errors->first('publication_status') }}</p> @endif
            </div>
        
            <div class="form-group">
                <button type="submit" id="submit" class="btn btn-primary">Create</button>
            </div>
        {!!Form::close()!!}
        
        
        
       
    </div>
   
@endsection