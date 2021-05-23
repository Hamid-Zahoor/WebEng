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
           <a href="{{ route('officer.add') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> ADD OFFICER</a>
          </legend>

 <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
               <th class="text-center">No</th>
               <th class="text-center">Name</th>
               <th class="text-center">Date of Birth</th>
               <th class="text-center">Email</th>
               <th class="text-center">Contact</th>
               <th class="text-center">Jobtitle</th>
               <th class="text-center">City</th>
               <th class="text-center">Country</th>
               <th class="text-center">Action</th>
            </tr>
            </thead>
           <tbody>
              @forelse ($officers as $officer)
                <tr class="text-center">
                <td class="text-center">{{ $loop->index + 1 }}</td>
                <td class="text-center">{{ $officer->first_name }}</td>
                <td class="text-center">{{ $officer->date_of_birth }}</td>
                <td class="text-center">{{ $officer->email }}</td>
                <td class="text-center">{{ $officer->contact }}</td>
                <td class="text-center">{{ $officer->job_title }}</td>
                <td class="text-center">{{ $officer->city }}</td>
                <td class="text-center">{{ $officer->country }}</td>

                <td class="text-center">
                  <a href="{{ route('officer.edit',$officer->last_name) }}" class="btn btn-sm btn-outline-danger py-0">Edit</a>
                  <a href="{{ route('officer.view',$officer->last_name) }}" class="btn btn-sm btn-outline-danger py-0">View</a>
                  <a href="" onclick="if(confirm('Do you want to delete this officer?'))event.preventDefault(); document.getElementById('delete-{{$officer->last_name}}').submit();" class="btn btn-sm btn-outline-danger py-0">Delete</a>
                  <form id="delete-{{$officer->last_name}}" method="post" action="{{route('officer.delete',$officer->last_name)}}" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>               
                </td>
               </tr>
              @empty
              <p> No customer found!</p>
              @endforelse
           </tbody>
          </table>
        </div>
    </div>
</div>
@endsection