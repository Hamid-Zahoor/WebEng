<h1>UserList</h1>
<table border="1">
<tr>
<td>ID </td>
<td>Name</td>
<td>Email</td>
<td>Profile Photo</td>
</tr>

@foreach ($collection as $item)
<tr>
<td>ID </td>
<td>Name</td>
<td>Email</td>
<td>Profile Photo</td>
</tr>
@endforeach
</table>