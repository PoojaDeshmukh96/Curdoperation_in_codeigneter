<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 17px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 18px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 170px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

input[type=text]
{
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 15px;
}

</style>
</head>
<body>

<div class="navbar">
  <a href="home">Admin</a>
  <a href="<?php echo site_url('admin/dashboard')?>">Dashboard</a>
  <a href="<?php echo site_url('admin/news')?>">News</a>
   <div class="dropdown">
    <button class="dropbtn">Profile
        <i class="fa fa-caret-down"></i>
    </button>
     <div class="dropdown-content">
       <a href="#">Setting</a>
       <a href="<?php echo site_url('admin/dashboard/logout')?>">Logout</a>
       <a href="#">Link 3</a>
     </div>
   </div> 
  <input type="text" placeholder="Search.." >
</div>
<br><br>
<div class="container">