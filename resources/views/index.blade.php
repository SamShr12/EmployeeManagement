<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<style>

</style>
<body>
<center>
<div class="box-body">
    <table border="0px">
    <thead>
        <tr>
            <th>ID</th>
            <th>Assigned to</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Salary</th>
            <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($exams as $ex)
        <tr class="active-row">
            <td>{{$ex->id}}</td>
            <td>{{$ex->Assigned}}</td>
            <td>{{$ex->Email}}</td>
            <td>{{$ex->Contact}}</td>
            <td>{{$ex->Salary}}</td>
            <td>
                <a href="{{url("/admin") . '/' . $ex->id}}"><input type = "submit" value="view" class="show"></a></td>
                <td><a href="{{url("/admin") . '/' . $ex->id . '/edit'}}"><input type = "submit" value="edit" class="edit"></a></td>
            </td>
            <td>
                <form method="POST" action="{{url("/admin") . '/' . $ex->id}}">
                    @csrf
                    @method('DELETE')
                    <button type = "submit" class="delete">Delete</button>
            </td>
                </form>
            </tr>
        </tr>
    @endforeach
    </tbody>
    </table>
    <a href="{{url('/admin/create')}}"><button type="submit" class="new">New</button></a>
</div>
</center>
</body>
<script>
var x = setTimeout(() => {
    document.getElementById('splash').classList.toggle('fade');
}, 2000);

setTimeout(() => {
    document.getElementById('splash').style.display = 'none'
}, 2600);
</script>
</html>