<?php
$connect = mysqli_connect("localhost","root","","dependable");
$select = "SELECT * FROM country_name";
$ex = mysqli_query($connect,$select); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>dependable dropdown</title>
    <style>
        .container{
            text-align: center;


        }
        select{
            background-color: gray;
            color: black;
            font-size: 1.3rem;
            width: 40%;
            text-align: center;
        }
        h1{
            text-align: center;
            background-color: darkgray;
            color: white;
            padding: 20px;

        }  
        
        </style>
</head>
<body>
    <div class="container">
        <h1>DEPENDABLE DROUPDOWN PHP MYSQL AJAX </h1>
        <h3>SELECT COUNTRY</h3>

        <select name="" id="country">
        <option value="">SELECT COUNTRY</option>
        <?php
        while($row=mysqli_fetch_array($ex)){ ?>

            <option value=" <?php echo $row['Id']  ?> "><?php echo $row['country'] ?></option>
      <?php  }

        ?>
        </select>


    <h2>SELECT CITY</h2>
    <div >
        <select name="" class="sub-div" id="">
            <option value="">SELECT CITY</option>
        </select>

    </div>
         
       
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="index.js"></script>
</body>
</html>