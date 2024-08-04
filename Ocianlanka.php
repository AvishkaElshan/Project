<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ocianlanka</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



   <!-- 
,,,, -->
  <style>
      .card {
          margin-bottom: 20px;
      }
      .card img {
          max-height: 200px;
          object-fit: cover;
      }
     
    .mb-4 {
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .col-md-4 {
            flex: 0 0 calc(33.3333% - 20px);
            max-width: calc(33.3333% - 20px);
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative; /* Required for absolute positioning of full-size image */
        }
        .card {
            overflow: hidden;
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.1); /* Scale up on hover */
        }
        .card-img-top {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover .card-img-top {
            transform: scale(1.2); /* Scale up on hover */
        }
        .card-body {
            padding: 15px;
        }
        .card-text {
            font-size: 14px;
            line-height: 1.5;
            
        }
        /* Full size image overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: opacity 0.3s ease-in-out;
        }
        .overlay.active {
            display: flex;
        }
        .overlay-content {
            max-width: 80%;
            max-height: 80%;
            overflow: hidden;
            position: relative;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        .overlay-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .overlay-content p {
            margin-top: 10px;
            font-size: 16px;
            line-height: 1.6;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #fff;
            font-size: 24px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .progress-container {
            margin: 20px 0;
        }
        .progress-label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 25px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .progress-bar-inner {
            height: 20px;
            width: 0;
            background-color: #4caf50;
            text-align: center;
            color: white;
            line-height: 20px;
            border-radius: 25px 0 0 25px;
        }
        .section {
            margin-bottom: 40px;
            padding:20px;
        }
        .section h2 {
            border-bottom: 2px solid #4caf50;
            padding-bottom: 5px;
        }
  </style>
</head>
<body>

<!-- Quality enhancement  -->


    <title>Company Quality Enhancement</title>
 
        
        
 
<body>


<header class="header">
   
   <section class="flex">

   <a href="index.php" class="logo">Home</a>

      
      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/PP.jpeg" class="image" alt="">
         <h3 class="name">BOI</h3>
         <p class="role">Investment Board</p>
         
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="adminregister.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   




<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   

   <div class="profile">
      <img src="images/PP.jpeg" class="image" alt="">
      <h3 class="name">BOI</h3>
      <p class="role">Investment Board</p>
   </div>

   <nav class="navbar">
      <a href="silueta.php"><i></i><span>Silueta</span></a>
      <a href="Rainwear.php"><i></i><span>Rainwear</span></a>
      <a href="Stretchline.php"><i></i><span>Stretchline</span></a>
      <a href="MAS.php"><i></i><span>MAS Kreeda</span></a>
      <a href="Ocianlanka.php"><i></i><span>Ocianlanka</span></a>
      <a href="Noyonlanka.php"><i></i><span>Noyonlanka</span></a>
      <a href="unichela.php"><i></i><span>Unichela</span></a>
      <a href="linea.php"><i></i><span>Linea Intimo</span></a>
      <a href="northsails.php"><i></i><span>Northsails</span></a>
      <a href="bradix.php"><i></i><span>Brandix</span></a>
   </nav>

</div>


<section class="contact">

<div class="box-container">
    <div class="box">
        
    <h1>Company Quality Enhancement</h1>
    
    <div class="box-container">
        <h2 style="font-size:25px">Quality Metrics</h2>
<br>
        <div class="progress-container">
            <div class="progress-label" style="font-size:15px">Customer Satisfaction: 95%</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 95%;">95%</div>
            </div>
        </div>

        <div class="progress-container">
            <div class="progress-label" style="font-size:15px">Product Quality: 88%</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 88%;">88%</div>
            </div>
        </div>

        <div class="progress-container">
            <div class="progress-label" style="font-size:15px">Delivery Timeliness: 92%</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 92%;">92%</div>
            </div>
        </div>

        <div class="progress-container">
            <div class="progress-label" style="font-size:15px">Employee Efficiency: 85%</</div>
            <div class="progress-bar">
                
                <div class="progress-bar-inner" style="width: 85%;">85%</div>
            </div>
        </div>
    </div>
  

    <div class="section">
        <h2 style="font-size:15px;font-style:italic">Quality Enhancement Initiatives</h2>
        <p style="font-size:14px;">We are continuously striving to improve the quality of our products and services. Below are some of the initiatives we have undertaken to enhance quality:</p>
       <br>
        <ul style="list-style-type: circle;font-size:12px;text-align: justify;">
            <li>Implementation of Six Sigma methodologies to reduce defects and improve processes.</li>
            <li>Regular training programs for employees to enhance their skills and efficiency.</li>
            <li>Upgrading our technology and equipment to ensure high-quality production.</li>
            <li>Soliciting regular feedback from customers to understand their needs and improve satisfaction.</li>
        </ul>
    </div>

    <div class="section">
        <h2 style="font-size:15px;font-style:italic">Future Goals</h2>
        <p style="font-size:14px;">Our future goals include:</p>
        <br>
        <ul style="list-style-type: circle;font-size:12px;text-align: justify;">
            <li>Achieving a customer satisfaction rate of 98%.</li>
            <li>Improving product quality to 95%.</li>
            <li>Ensuring 100% on-time delivery.</li>
            <li>Enhancing employee efficiency to 90%.</li>
        </ul>
    </div>



</div>

   


</div>

</section>
<!-- Quality enhancement end ....Av....  -->


<<section class="contact">
<div class="box-container">

<div class="box">
<i class="fa-solid fa-1"></i><i class="fa-solid fa-0"></i><i class="fa-solid fa-0"></i>
    <i class="fa-duotone fa-percent"></i>
<p style="font-size:14px; font-weight:bold; text-align:justify;"> OcianLanka is proud of its record in delivering top-class products, always managing to maintain a rating of 100% for quality. Every process is serious, down to the last detail, to make sure that the items produced answer the very stringent quality criteria set by the company. OcianLanka ascertains high quality through rigid control methods and by seeking improvement at all times to make sure that their products meet or even surpass customer expectations, thus making them one of the industry leaders.</p>
</div>
</div>
</section>

<section class="contact">
<div class="box-container">

<div class="box">
<i class="fa-solid fa-6"></i>
    <i class="fa-duotone fa-percent"></i>
<p style="font-size:14px; font-weight:bold; text-align:justify;">The remaining 6 percent of the clothing produced by OcianLanka is used for other purposes. This excess is allocated for various needs such as quality assurance testing, marketing samples and as reserve stock to address any unexpected requests or replacements. By maintaining this buffer, OcianLanka ensures that we can consistently meet customer expectations and maintain our high service standards and product quality.</p>
</div>
</div>
</section>

<!-- ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->

<section class="contact">
<div class="box-container">
    <div class="box">
    <h1 class="mb-4">Advertisements:</h1>
    <div class="row">
        <?php
        require_once "db_connect.php";
        // Retrieve images and descriptions from database
        $sql = "SELECT img1, desc1, img2, desc2, img3, desc3 FROM addpic_table WHERE emp_id=009";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // First Image and Description
                if (!empty($row["img1"])) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["img1"] . '" class="card-img-top" alt="Image 1">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . htmlspecialchars($row["desc1"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                
                // Second Image and Description
                if (!empty($row["img2"])) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["img2"] . '" class="card-img-top" alt="Image 2">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . htmlspecialchars($row["desc2"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                
                // Third Image and Description
                if (!empty($row["img3"])) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row["img3"] . '" class="card-img-top" alt="Image 3">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . htmlspecialchars($row["desc3"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        } else {
            echo "<p>No images found.</p>";
        }

        $conn->close();
        ?>
    </div></div>
</div></section>
<section class="contact">

   

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:1234567890">123-456-7890</a>
         <a href="tel:1112223333">111-222-3333</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="ocianlanka.biyagama@gmail.com">ocianlanka.biyagama@gmail.com</a>
         <a href="ocianlanka@gmail.com">ocianlanka@gmail.com</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">Ocianlanka Biygama</a>
      </div>

   </div>

</section>



<footer class="footer">

   &copy;  Investment Board | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>