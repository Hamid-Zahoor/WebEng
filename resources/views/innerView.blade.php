@include('header')

<h3>User Inner block</h3>
@include('outer')

@foreach($innerView as $users)
<h1>{{$users}}</h1>
@endforeach

@csrf
<script>
var data=@json($innerView);
console.warn(data[2])
</script>

