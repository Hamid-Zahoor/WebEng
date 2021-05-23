@extends('layouts.php')

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

          <form action="{{ route('officer.save') }}" method="post">
            @csrf

            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Enter name">
              <font style="color:red"> {{ $errors->has('first_name') ?  $errors->first('first_name') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Enter L name">
              <font style="color:red"> {{ $errors->has('last_name') ?  $errors->first('last_name') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="date_of_birth">Date of Birth:</label>
              <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="D-O-B">
              <font style="color:red"> {{ $errors->has('date_of_birth') ?  $errors->first('date_of_birth') : '' }} </font></div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">
              <font style="color:red"> {{ $errors->has('email') ?  $errors->first('email') : '' }} </font>
            </div>


            <div class="form-group">
              <label for="contact">Contact:</label>
              <input type="tel" class="form-control" name="contact" value="{{ old('contact') }}" placeholder="Enter Contact">
              <font style="color:red"> {{ $errors->has('contact') ?  $errors->first('contact') : '' }} </font>

          </div>

          <div class="form-group">
              <label for="job_title">Job Title:</label>
              <input type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" placeholder="Enter Job Title">
              <font style="color:red"> {{ $errors->has('job_title') ?  $errors->first('job_title') : '' }} </font>

          </div> 

          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="Enter City">
              <font style="color:red"> {{ $errors->has('city') ?  $errors->first('city') : '' }} </font>

          </div>
          <div class="form-group">
              <label for="country">Country:</label>
              <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Enter Country">
              <font style="color:red"> {{ $errors->has('country') ?  $errors->first('country') : '' }} </font>

          </div>

          <div class="form-group" style="margin-top: 24px;">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
</form>
</form>
        </div>
    </div>
</div>
@endsection
