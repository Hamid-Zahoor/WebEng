
<h1>User Login</h1>

<form action="userPost" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="password" placeholder="enter password"><br><br>
    <button type="submit">Login</button>
</form>
