<?php
include_once"db_configure.php"; 
?>


<style type="text/css">
        
        ul li{
                display: block;
                padding: 3px;
                 
        }
        ul li a{
                text-decoration: none;
                color: #0A2558;
        }
        ul li a:hover{
         font-family:Times New Roman;        
                 
        }

</style>

<div class="col-md-2 shadow-lg mt-3">
        <p style="border: 1px solid  #0A2558; border-radius: 15px;">

                <hr style="height: 1px;" class="shadow-lg">

                <h5 style="color:#0A2558; text-align: center;" class="card-header">CATEGORIES</h5>

                <hr style="height: 1px;" class="shadow-lg">

                <ul class="box">
                        <li><a href="health.php">HEALTH</a></li> 
                        <li><a href="business.php">BUSINESS</a></li>
                        <li><a href="religious.php">RELIGIOUS</a></li>
                        <li><a href="polities.php">POLITIES</a></li>
                        <li><a href="education.php">EDUCATION</a></li>
                        <li><a href="entertainment.php">ENTERTAINMENT</a></li>
                        <li><a href="sport.php">SPORTS</a></li>
                </ul>
                <hr style="height: 1px; color:#0A2558;" class="shadow-lg">
                
                <h6 class="card-header text-center mb-2 text-primary">ADVERT!! ADVERT!!</h5>


                <?php
                $sql = "SELECT * FROM advert";
                $query = mysqli_query($connect, $sql);
                while ($row=mysqli_fetch_array($query)) {
                   
                $advert_title   = $row['advert_title'];
                $advert_content = $row['advert_content'];
                $advert_image   = $row['advert_image'];

                ?>
                <h6 class="card-header text-center text-dark shadow-lg"><strong><?=$advert_title ?></strong></h6>
                <img src="Admin/upload/<?=$advert_image?>"style="height:250px; width:200px;  border:3px solid navy; border-radius: 20px">

                <h6 class="text-primary mb-2 text-center"><?=$advert_content?></h6>
                 
                <hr style="height: 1px; color:#0A2558" class="shadow-lg">
            <?php } ?>
        </p> 
        
</div>