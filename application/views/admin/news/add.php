<?php
$this->load->view('admin/header');
?>
<br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h1{
  text-align:center;
  margin:center;
  width: 100%;
  margin-right:20px;
}
div.textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right:20px;
  height:200px;
  padding-right:70px;
    width: 15%;

}

.container {
  margin-left:20%;
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 10px;
  width:50%;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 13px 25px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 4px;
  padding-right:60px;
}

.col-75 {
  float: left;
  width: 50%;
  margin-top: 5px;
 
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Clear floats after the columns */
.row:after
{
  content: "";
  display: table;
  clear: both;
}


</style>
</head>
<body>

<h1>Add New News</h1>


<div class="container">
  <form  method="post" action="<?php echo site_url('admin/news/save') ?>">
    <div class="row">
      <div class="col-25">
        <label for="title" >Title</label>
      </div>
      <div class="col-75">
     <input type="text" id="title" name="title" placeholder="Your title.."  style="width: 100%; padding: 10px;  border: 1px solid #ccc; border-radius: 4px; resize: vertica ;  padding-right:70px;">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="author">Author</label>
      </div>
      <div class="col-75">
       <input type="text" id="author" name="author" placeholder="Author name.." style="width: 100%;  padding: 10px;  border: 1px solid #ccc; border-radius: 4px; resize: vertical; padding-right:70px; right: 250px;">
      </div>
    </div>
  <br><br>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="Write something.." style="height:100px;margin-left:-35% ;width: 200%;padding: 30px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea> </div>
    </div>
    <div class="row">
      <input type="submit" value="Save" name="save">
    </div>
  </form>
</div>

</body>
</html>

<?php
$this->load->view('admin/footer');
?>