<?php
include("header.php");
?>
<div class ="row">
 
</div>
<div class="row p-5 text-center">
    <h1>Contact Us</h1>
    </div>
    </div>  
    <div class="container-fluid">
    <div class="row p-5">
        <div class="col-lg-6" id="contactform">
            <h3>Get in Touch</h3>
            <?php
            if(isset($_POST['btnsubmit']))
            {
                $name=mysqli_real_escape_string($con,$_POST['name']);
                $email=mysqli_real_escape_string($con,$_POST['email']);
                $subject=mysqli_real_escape_string($con,$_POST['subject']);
                $message=mysqli_real_escape_string($con,$_POST['message']);
                $query="insert into fooddelivery(name,email,subject,message,currentdate) values('$name','$email',
                '$subject','$message',now())";
                if(mysqli_query($con,$query))
                {
                    echo"<script>alert('Your message is submitted')</script>";
                }
                else{
                    echo mysqli_error($con);
                }
                
            }
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']?>"  method="post" id="contactform">
                <input type="text" class="form-control " placeholder="Enter Name" name="name"/>
                <input type="Email" class="form-control " placeholder="Enter Email" name="email"/>
                <input type="text" class="form-control " placeholder="Enter subject" name="subject"/>
<textarea class=" form-control " placeholder="Enter message" rows="5" name="message"></textarea>
<button type="submit" class="btn btn-primary" name="btnsubmit">submit</button>
</form>
</div>



<div class="col-lg-6 p-5">
    <img src="./pictures/contact.webp" width="100%"/>
</div>
</div>

<div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110324.1554549242!2d74.95559192128884!3d30.21911009318208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3910cdff7fff92c3%3A0xfa64968543fb56cb!2sBurger%20King!5e0!3m2!1sen!2sin!4v1720421680562!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
    </div>


  
    


<?php
include "footer.php";
?>