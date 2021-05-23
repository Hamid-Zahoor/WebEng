
<!--arithmetic evaluations-->

<h1>Users Page</h1>
<h2>{{ 10+10}}</h2>
<h1> Hello {{10*2}}</h1>


<!--It can also be used with php functions-->

<h4>Hamid {{count($users)}}</h4>


<!--Using if-->
@if($user=='anil')
<h3>Hi {{$user}}</h3>
@elseif($user=='hamid')
<h3>hello {{$user}}</h3>
@else
<h3> Unknown user</h3>
@endif

<!--{{--Using for--}}-->

<h1>Farmer Page</h1>
@for($i=0; $i<10; $i++)
<h3>{{$i}}</h3>
@endfor -->

<!--function defined in controllers UsersPHP as viewload -->
@foreach($user as $sUser)
<h1>{{$sUser}}</h1>
@endforeach
