<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #34494e;
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center  ;
    background:#191919 ;
}

.box h1{
    color: white;
    text-transform: uppercase;
}
.box input[type = "text"], .box input[type = "email"], .box input[type = "number"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.box input[type = "text"]:focus, .box input[type = "email"]:focus, .box input[type = "number"]:focus{
    width: 280px;
    border-color: rgb(32, 177, 32);
}

.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgb(32, 177, 32);
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.box input[type = "submit"]:hover{
    background-color: rgb(32, 177, 32) ;
}

</style>
<body>

<div class="first">
    <form action="{{url('/admin')}}" class="box" method="POST">
    @csrf
    <h1>Form</h1>
        <input type="text" placeholder="Username" name="Assigned">
        <input type="email" placeholder="Email" name="Email">
        <input type="number" placeholder="Contact" name="Contact">
        <input type="text" placeholder="Salary" name="Salary">
        <input type="submit" value="Create" name="btn">
    </form>
</div>
</body>
</html>