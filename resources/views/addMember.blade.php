<h1>Add Member </h1>
@if(session('user'))
<h3 style="color: green">{{session('user')}}  has been added</h3>
@endif
<form action="postMember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="email" name="password" placeholder="enter email"><br><br>
    <button type="submit">Add member</button>
</form>

<!--If you need to keep your flash data around for several requests, you may use the reflash method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the keep method:

$request->session()->reflash();
$request->session()->keep(['username', 'email']);
-->