<?php
$this->load->view('admin/header');
?>
<style>

#customers {
    width: 90%;
    padding-left: 100px;
    
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 15px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  width:70%;
}

#customers td, #customers th 
{
  border: 1px solid #ddd;
  padding: 8px;
  width:40%;
}

#customers tr:nth-child(even)
{
    background-color: #f2f2f2;

}

#customers tr:hover 
{
    background-color: #ddd;
}

h1
{
    margin-left:100px;
    position: relative;
    top: -30px;

}
.button{
 
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px  22px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 1px 6px;
  cursor: pointer;

}
.button1 {font-size: 12px;background-color:#4CAF50; margin: 1px 100px;  position: relative;
  top: -39px;}
.button2 {font-size: 12px;background-color:#008CBA}
.button3 {font-size: 12px;background-color: #f44336}

.alert {
  margin-left: 7%;
  width: 60%;
  top: -20px;
  color:red;
}


.blink{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: red;    }
    49%{    color: red; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: red;    }
}

</style>

<h1>News</h1> 
<a href="<?php echo site_url('admin/news/add') ?>"><button class="button button1">Add News</button></a>

 <div class="alert">
 <span class=blink>
 <?php echo $this->session->flashdata('success'); ?>
 </span>
</div>


<table id="customers">
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Action</th>
  </tr>
  <?php
 // var_dump($news);
  foreach($news as $n)
  {
    ?>
  <tr> 
      <td> <?php echo $n->title; ?></td>
      <td> <?php echo $n->author; ?></td>
      <td><a href="<?php echo site_url('admin/news/edit/'.$n->id) ?>"> <button class="button button2"> Edit </button></a> &nbsp&nbsp
       <a href="<?php echo site_url('admin/news/delete/'.$n->id) ?>"><button class="button button3"> Delete </button> </a> </td>
   </tr>
   <?php
  }
   ?>
  </table>

<?php
$this->load->view('admin/footer');
