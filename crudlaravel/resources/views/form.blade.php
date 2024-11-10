<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="para1"> Small</p>
    <p id="para2"> cap</p>
    <p id="para3"> number</p>
    <p id="para4"> special</p>
    <form action="" >
        <input type="text" name="password" id="password" oninput="passwordcheck()"  required/>
       <button type="submit" id="btnid" > save </button>
</form>

<script>
 function  passwordcheck()
 {  
$pass = document.getElementById("password").value;
if($pass.search(/[a-z]/) <0 || $pass.search(/[A-Z]/) <0 || $pass.search(/[0-9]/) <0 || $pass.search(/[\@\#\%\$]/) <0 || $pass.length < 8)
{
document.getElementById("btnid").disabled = true;    
}
else
{
    document.getElementById("btnid").disabled = false;    
}
if($pass.search(/[a-z]/) <0)
{
    document.getElementById("para1").style.display ="block";
        
}
else
{
    document.getElementById("para1").style.display = "none"; 
}

if($pass.search(/[A-Z]/) <0)
{
    document.getElementById("para2").style.display = "block";
        
}
else
{
    document.getElementById("para2").style.display = "none";
}


if($pass.search(/[0-9]/) <0)
{
    document.getElementById("para").innerHTML ="please enter a number ";
        
}
else
{
    document.getElementById("para").innerHTML =""; 
}
 }
 </script>   
</body>
</html>