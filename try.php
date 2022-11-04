
 <!-------------------------------------links------------------------------------>
     <?php

      $title='Full_Content';
      include_once"include/links.php";
      include_once"include/blog_nav.php";
      include_once"include/db_configure.php";

     ?> 
<!--------------------------RED MORE NEWS/CARD-------------------------------------------->
    
     <div class="row mt-1">
       <div class="container">
         <div class="col-md-10">
           <div class="col-md-12 mt-3">
             <div class="card shadow-lg rounded-3">

                  <?php
                  //query fetch full_post from database 'add_post table'

                     $mgs="";

                    if(isset($_GET['readmore'])){
                    $read  = $_GET['readmore'];

                    $sql =" SELECT * FROM add_post WHERE id = '$read'";
                    $query = mysqli_query($connect, $sql);

                    while($row = mysqli_fetch_array($query))
                    {
                    $dB_id=['id'];
                    $title=$row['title'];
                    $author=$row['author'];
                    $category=$row['category'];
                    $time=$row['datetime'];
                    $image=$row['image'];
                    $content=$row['content'];
                    
                  ?>
               
                    <center><img src="Admin/upload/<?=$image?>"height="400px" width="400px" border="5" class="card-image-top" alt="..."></center> 

                    <div class="card-body">
                      
                          <h6 class="-title">
                            <strong>
                              <?=$title?>
                          </strong>
                        </h6>

                      <p class="card-text">

                        <h6>
                          <span style="background-color:#0A2558;color: #fff; padding: 4px;"><?=$category?></span>

                          <span style="background-color: #EEECEB; padding: 4px;"><?=$time?></span>
                        </h6>

                          <?=$content;?>   
                      </p>
                        <h5>Posted By:<span><?=$author?></span></h5>
                    </div>


                    <?php } ?> 
                    <?php } ?>

             </div>
           </div>
         </div>
       </div>
     </div>
    <!-------------------------------------footer------------------------------------->   
      <?php
       include_once"include/footer.php";
      ?>
      