<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    
</head>
<style>

</style>
<body>

@if($exams === null)
    <h1 style="display:'flex' , margin:'0 auto'">No Records found</h1>
@else
<center>
    <table border="0px" class="show-box">
    <tr>
            <th>ID</th>
            <th>Assigned to</th>
            <th>Email</th>
            <th>Contact</th>
    </tr>
    <tr>
        <td>{{$exams->id}}</td>
        <td>{{$exams->Assigned}}</td>
        <td>{{$exams->Email}}</td>
        <td>{{$exams->Contact}}</td>
        <td>{{$exams->Salary}}</td>
    </tr>

    </table>
    <br>
    <a href="{{url('/admin')}}"><button>Go Back</button></a>
    </center>
@endif
</body>
</html>