<?php 
    include "function.php";
 iviewerRecord($_SERVER['HTTP_USER_AGENT']);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#990033">
    <link rel="icon" href="jesus.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="The Way of the Cross">
    <meta name="description" content="Way of Cross Burmese app in unicode,zawgyi and english..">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mms-it.com/">
    <meta property="og:title" content="The Way of the Cross">
    <meta property="og:description" content="Way of Cross Burmese app in unicode,zawgyi and english..">
    <meta property="og:image" content="wayofcross.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mms-it.com/">
    <meta property="twitter:title" content="The Way of the Cross">
    <meta property="twitter:description" content="Way of Cross Burmese app in unicode,zawgyi and english..">
    <meta property="twitter:image" content="wayofcross.png">
    <title>Way Of Cross</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="../web_dev-master/8_ajax/static_website/css/all.css">
</head>

<style>
    body{

    background-color: #990033;
    }

    .img{

    width: 150px;
    height: 200px;
    }

</style>

<body>
    
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 ">
                   <div class="card shadow bg-img d-flex justify-content-center align-items-center">
                       <div class="card-body ">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="jesus.png" class="img" alt="">
                        </div>
                        <div class="btns text-center d-sm-flex justify-content-center align-items-center">
                            <button onclick="go('wayofcross.apk')" class="btn btn-danger mr-0 mr-sm-2 mb-2 shadow-sm"><i class="fas fa-download mr-2"></i>Download</button>
                            <button  onclick="go('wayofcross.php')" class="btn btn-info mb-2 shadow-sm"><i class="fas fa-door-open mr-2"></i>Live View</button>
                        </div>
                       </div>
                   </div>
            </div>
        </div>
    </div>

    <script src="jquery.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
        function go(url){
            location.href=`${url}`;
        }
    </script>
</body>
</html>