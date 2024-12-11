<?php
include("header.php");
?>
<div class ="row">
 
</div>
<div class="row p-5 text-center">
    <h1>LOGIN</h1>
    </div>
    </div>  
    <div class="container-fluid">
    <div class="row p-5">
        <div class="col-lg-6" id="contactform">
            <h3>Login to your account</h3>
            <?php
            if(isset($_POST['btnsubmit']))
            {
                $username=mysqli_real_escape_string($con,$_POST['username']);
                $password=mysqli_real_escape_string($con,$_POST['password']);
                $query="select * from adminlogin where username='$username' and password='$password'";
                $result= mysqli_query($con,$query);
               if(mysqli_num_rows($result)>0)
             {
                    echo"<script>window.location.href='admin/dashboard.php'</script>";
                }
                else{
                    echo"<p class='text-danger'> wrong username and password</p>";
                }
                
            }
            ?>
            <form action="#" method="post">
            
                <input type="text" class="form-control mt-5 " placeholder="Enter username" name="username"/>
                <input type="text" class="form-control mt-5" placeholder="Enter password" name="password"/>
               
<button type="submit" class="btn btn-primary" name="btnsubmit">submit</button>
</form>
</div>
    
<div class="col-lg-6 p-3 ">
    <img src="pictures/oooooooooooooo.webp" width="80%"/>
</div>
        </div>

<?php
include "footer.php";
?>
