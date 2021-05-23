@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif
         
          <legend style="color: green; font-weight: bold;">LARAVEL 7.X CRUD EXAMPLE - CODECHIEF
           <a href="{{ route('officer.list') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> OFFICER LIST</a>
          </legend>

          <form action="{{ route('officer.update',$officer->last_name) }}" method="post">
            @csrf
            @method('patch')

           <div class="form-group">
              <label for="">First Name</label>
              <input type="text" class="form-control" name="first_name" value="{{ $officer->first_name }}" >
              <font style="color:red"> {{ $errors->has('first_name') ?  $errors->first('first_name') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" class="form-control" name="last_name" value="{{ $officer->last_name }}" >
              <font style="color:red"> {{ $errors->has('last_name') ?  $errors->first('last_name') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="">Date of Birth</label>
              <input type="text" class="form-control" name="date_of_birth" value="{{ $officer->date_of_birth }}" >
              <font style="color:red"> {{ $errors->has('date_of_birth') ?  $errors->first('date_of_birth') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" value="{{ $officer->email }}" >
              <font style="color:red"> {{ $errors->has('email') ?  $errors->first('email') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="">Contact</label>
              <input type="text" class="form-control" name="contact" value="{{ $officer->contact }}" >
              <font style="color:red"> {{ $errors->has('contact') ?  $errors->first('contact') : '' }} </font>
            </div>
            
            <div class="form-group">
              <label for="">Job Title</label>
              <input type="text" class="form-control" name="job_title" value="{{ $officer->job_title }}" >
              <font style="color:red"> {{ $errors->has('job_title') ?  $errors->first('job_title') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="">City</label>
              <input type="text" class="form-control" name="city" value="{{ $officer->city }}" >
              <font style="color:red"> {{ $errors->has('city') ?  $errors->first('city') : '' }} </font>
            </div> 
            <div class="form-group">
              <label for="">Country</label>
              <input type="text" class="form-control" name="country" value="{{ $officer->country }}" >
              <font style="color:red"> {{ $errors->has('country') ?  $errors->first('country') : '' }} </font>
            </div>
          

          <div class="form-group" style="margin-top: 24px;">
              <input type="submit" class="btn btn-success" value="update">
            </div>


            </form>
        </div>
    </div>
</div>
@endsection
