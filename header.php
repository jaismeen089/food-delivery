<?php
include "connection.php";
?>
<html>
<head>
    <title>First page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="f1.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap.grid.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      $(document).ready(function(){
        AOS.init();
      });
      
        
        
$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
    $(this).text(Math.ceil(now));
}
});
});

});  




     
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid text-white" id="image">
        <div class="row" >
            <nav class="navbar navbar-expand-lg navbar-dark  ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="./pictures/logo2.png" width="20%" />
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item " >
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pricing.php">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="service.php" >Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="contact.php" >Contact</a>
                      </li>
                 
                      <li class="nav-item">
                        <a class="nav-link " href="Login.php" >Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="blog.php" >Blog</a>
                      </li>
                      
                      
                      
                      
                      
                    </ul>
                  </div>
                </div>
              </nav>
        </div>