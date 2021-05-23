<h1>User Login</h1>
<!--@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif-->

<form action="myform" method="POST"> 
    @csrf
    <input type="text" name="username" placeholder="Enter your id"/><br><br>
<span style='color:red'>@error('username'){{$message}}@enderror</span>
<br><br>
    <input type="text" name="userpassword" placeholder="Enter password"/><br><br>
<span style='color:red'>@error('userpassword'){{$message}}@enderror</span>
<br><br>
    <button type="submit"> Login</button> 
</form>