<?php
$connect = mysqli_connect("localhost","root","","dependable");
if(isset($_POST['country_id'])){
    $country_id = $_POST['country_id'];
    $select = "SELECT * FROM city WHERE country_id = $country_id";
    $ex = mysqli_query($connect,$select);?>

    <select name="" id="">
        <?php
        while($row = mysqli_fetch_array($ex)){?>
        <option value=""> <?php echo $row['city_name'] ?></option>

       <?php }

        ?>
    </select>
    


<?php }

?>