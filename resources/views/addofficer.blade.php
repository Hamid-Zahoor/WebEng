<h1>Add Officer </h1>
@if(session('user'))
<h3 style="color: green">{{session('user')}}  has been added</h3>
@endif
<form action="postOfficer" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="enter first name"><br><br>
    <input type="text" name="last_name" placeholder="enter last name"><br><br>
    <input type="date" name="date_of_birth" placeholder="enter date of birth"><br><br>
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="tel" name="contact" placeholder="Enter Phone"><br><br>
    <input type="text" name="job_title" placeholder="Your Job"><br><br>
    <input type="text" name="city" placeholder="city"><br><br>
    <input type="text" name="country" placeholder="country"><br><br>
    
    <button type="submit">Add Officer</button>
</form>

<!--If you need to keep your flash data around for several requests, you may use the reflash method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the keep method:

$request->session()->reflash();
$request->session()->keep(['username', 'email']);
-->