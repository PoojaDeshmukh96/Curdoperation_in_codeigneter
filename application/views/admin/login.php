<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <style>

   h1{
       width:43%;
        border: 4px solid black;
        margin: auto;
        background-color:black;
        color:white;
        text-align:center;
        padding:15px;
    }

  input[type=text], input[type=password] 
  {
  width: 50%;
  margin: 5px 0 22px 0;
  border: 1px solid black;
  border: 3px solid #f1f1f1;
  padding: 16px;  
  }

  button
{
  background-color:#4CAF50;
  color: white;
  padding: 14px 20px;
  //margin: 20px 0;
  margin-left : 19%;
    //margin:auto;
  //border: none;
  cursor: pointer;
  width: 10%;
}   
 
  form{ 
        width: 80%;
        margin-left : 29%;
     }

    </style>
</head>
<body>
    <br><br>
    <h1>Insert Operation</h1><br>

  <form  method="post" action="<?php echo base_url('admin/login/verify') ?>">

   <div class="container">

    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter username" name="username" required><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter your Password" name="password" required><br>

  </div>

    <div class="container" >
    <button type="submit" value ="submit" name="submit"> submit </button></div>

</form>
</body>
</html>