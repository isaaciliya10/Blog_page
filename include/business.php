
          
         <!-------------------------------------links------------------------------------>
             <?php
              $title='Business';
              include_once"include/links.php";
              include_once"include/blog_nav.php";
              include_once"include/db_configure.php";
               
             ?> 
        <!--------------------------NEWS/CARD SECTION----------------------------------------------->

            <div class="row mt-1 "> 
            <div class="col-md-10">
              <div class="row">
                 <?php

                  $sql =" SELECT * FROM add_post WHERE category = 'business'";
                  $query = mysqli_query($connect, $sql);

                  while($row=mysqli_fetch_array($query))
                  {
                  $db_id    =$row['id'];
                  $title    =$row['title'];
                  $author   =$row['author'];
                  $category =$row['category'];
                  $time     =$row['datetime'];
                  $image    =$row['image'];
                  $content  =$row['content'];
                  ?>

            <div class="col-md-4 mt-3">
            <div class="card rounded-3"> 

              <img src="Admin/upload/<?=$image?>"style="height:200px;  border:2px solid #0A2558; border-radius: 20%" class="card-image-top rounded-top" alt="...">

              <div class="card-body rounded">
                <h6 class="-title">
                  <strong>
                    <?=$title?>
                  </strong>
                </h6>

                <p class="card-text">

                  <h6>
                    <span style="background-color:#0A2558;color: #fff; padding: 4px;"><?=$category?></span><span style="background-color: #EEECEB; padding: 4px;"><?=$time?></span>
                  </h6>
                    <?php if(strlen($content) >50)
                        {
                         $content = substr($content,0,50);
                         echo $content;   
                        }
                     ?>
                  </p>
                  <h5>Posted By:<span><?=$author?></span></h5>
                <div class="btns">
                      <button><a class="link" href="full_post.php?readmore=<?php echo $db_id;?>">Read More</a></button>
                </div>

              </div>
            </div>   
            </div>

            <?php } ?> 

            </div>  
            </div>

            <!-----------------------siderbar------------------------------------------------>
            <?php
              include_once"include/sidebar.php";
              ?>
            </div>  

            <!-------------------------------------footer------------------------------------->   
              <?php
               include_once"include/footer.php";
              ?>
            