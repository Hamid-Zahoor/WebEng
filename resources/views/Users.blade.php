h1>This is User Page</h1>
<h1>Employee List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>ImageUrl</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Contact Number</td>
        <td>Age</td>
        <td>DOB</td>
        <td>Salary</td>
        <td>Address</td>
        </tr>

        <!--IN ADDIOTION TO ABOVE TABLES -->
    
    @foreach ($myList as $e )
    <tr>
       
        <td>{{$e['id']}}</td>
        <td><img src={{$e['imageUrl']}}</td>
        <td>{{$e['firstName']}}</td>
        <td>{{$e['lastName']}}</td>
        <td>{{$e['email']}}</td>
        <td>{{$e['contactNumber']}}</td>
        <td>{{$e['age']}}</td>
        <td>{{$e['dob']}}</td>
        <td>{{$e['salary']}}</td>
        <td>{{$e['address']}}</td>
    </tr>
    @endforeach

</table>
