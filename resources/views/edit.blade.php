<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<style>
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background:rgb(243, 243, 243);
    /* background: #34494e */
}
.edit-main{
  width:400px;
  padding: 40px;
  position: absolute;
  border-radius:20px;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center  ;
  box-shadow: 0px 0px 20px 0px rgb(0,0,0,0.35);
  background: #ffffff;
  
}
h1{
  padding-bottom:20px;
}
label{
  font-family:Arial;
  /* display:flex; */
  margin: 0 auto;
}
input{
  padding:10px;
  border-radius: 24px;
  border: 1px solid #ccc;
  display:flex;

}
#btn-save{
  margin:10px 0;
}

#btn-save:hover{
  opacity:0.7;
}

button{
  border: 0;
  background: rgb(32, 177, 32);
  border: 2px solid rgb(32, 177, 32);
  padding: 10px 30px;
  outline: none;
    color:white;
    border-radius: 14px;
    transition: 0.25s;
    cursor: pointer;
    /* position: absolute; */
    /* top: 70%;
    left: 50%;
    transform: translate(-50%,-50%); */
    text-align: center  ;
    font-size:0.9em;
}
</style>

<body>
@if($exams === null)
    <h1 style="display:'flex' , margin:'0 auto'">No Records found</h1>
@else
<div class="edit-main">
<h1>Edit</h1>
<form action="{{url('/admin') .'/'. $exams->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
  <center>
  <label>Assigned to </label><input type="text" name = "username" value="{{$exams->Assigned}}"><br>
  <label>Email  </label><input type="text" name = "password" value="{{$exams->Email}}"><br>
  <label>Contact  </label><input type="text" name = "password" value="{{$exams->Contact}}">
  <label>Salary  </label><input type="text" name = "password" value="{{$exams->Salary}}">
  <div id="btn-save">
  <button type="submit" value="submit">Save</button>
</center>
  </div>
</form> 
</div>
@endif
</body>
</html>