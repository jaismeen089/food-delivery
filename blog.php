<?php
include "header.php";
?>

<div class="row p-5 text-center">

<h1>Blogs</h1>
</div>
</div>  
<div class="container">
    
<?php
    $query="select * from blog";
$result=mysqli_query($con, $query);
while($row=mysqli_fetch_array($result))
{
echo "<div class='row mb-5 border'>
<div class='col-lg-5'>
<img src='uploads/".$row['pictures']."' height='300' width='100%' />
</div>
<div class='col-lg-7'>
<h3>".$row['title']."</h3>
<p>By ".$row['postby']." on ".date("d-M-Y",strtotime($row['poston']))."</p>
<p>".substr($row['description'],0,100)."...</p>
<a href='blogdetail.php?id=".$row['id']."'><button class='btn btn-primary'>Read More</button></a>
</div>

</div>";
}
?>

  
</div>

</div>
<?php
include "footer.php";
?>