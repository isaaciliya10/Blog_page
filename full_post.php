
 <!-------------------------------------links------------------------------------>
     <?php

      $title='Full_Content';
      include_once"include/links.php";
      include_once"include/blog_nav.php";
      include_once"include/db_configure.php";

     ?> 
<!--------------------------RED MORE NEWS/CARD-------------------------------------------->
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-md-10 ">
        
              <?php
               //query fetch full_post from database 'add_post table'

                 $mgs="";

                if(isset($_GET['readmore'])){
                $read  = $_GET['readmore'];

                $sql =" SELECT * FROM add_post WHERE id = '$read'";
                $query = mysqli_query($connect, $sql);

                while($row = mysqli_fetch_array($query))
                {
                $db_id=['id'];
                $title=$row['title'];
                $author=$row['author'];
                $category=$row['category'];
                $time=$row['datetime'];
                $image=$row['image'];
                $content=$row['content'];
                
              ?>

    <div class="col-md-12 mt-3">
      <div class="card rounded-3"> 

               <center><img src="Admin/upload/<?=$image?>"style="height:400px; width:400px;  border:3px solid #0A2558; border-radius: 30px" class="card-image-top" alt="..."></center> 

          <div class="card-body rounded-3">

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

           <div class="social">

              &nbsp;<a href="facebook.com/premierreport"><i class="fab fa-facebook"></i></a>&nbsp;| 
              <a href="twitter.com/premierreport"><i class="fab fa-twitter"></i></a>&nbsp;|
              
              <a href="instagram.com/premierreport"><i class="fab fa-instagram"></i></a>&nbsp;|
              <a href="linkedin.com/premierreport"><i class="fab fa-linkedin-in"></i></a>&nbsp;
              

          </div>
       </div>   
    </div>

        <?php }} ?> 

    </div> 
    
      <!----------------------------comment section------------------------------>

    <div class="row">
      <div class="container mt-3">
        <div class="card">
          <div class="card-body">
               <h5 class="card-header text-center">Leave Comment</h5>
                <?php
                     //query fetch comment from database 'comment table' 
                if(isset($_GET['readmore'])){
                    $read  = $_GET['readmore'];

                      
                      $sql = "SELECT * FROM comment WHERE post_comment_id ='$read' AND status = 'ON' ORDER BY id DESC";
                      $query = mysqli_query($connect,$sql);

                      while ($row  = mysqli_fetch_array($query)) {

                         $datetime = $row['datetime'];
                         $image    = $row['image'];
                         $name     = $row['name'];
                         $status   = $row['status'];
                         $email    = $row['email'];
                         $comment  = $row['comment'];
                     
                      ?>
         
      <div class="container">
        <div class="col-md-10  mt-1">
          <div class="card rounded-3">
            <div class="container"> 
              <div class="row">
                <div class="col-md-2">
             
                      <img src="Admin/upload/<?=$image?>" style="height:70px; width:70px;  border:2px solid #0A2558; border-radius: 100%" > 

                       <h6 class="title mt-1 "><strong><?=$name?></h6></strong>
                       

        </div>
      <div class="col-md-10 ">
        <div class="card-body">
             
                      <p class="card-text"><strong><?=$datetime?>&#160;&#160;
                         
                        </strong><br>

                        <?=$comment?>

                      </p>
                      <button class="btn btn-outline-secondary">Reply</button>
         </div>
      </div>

             </div>
           </div>
         </div>
       </div>
      </div> 
                  <?php }} ?>
     </div>
    </div>
       
  </div>   
     
      <div class="row mt-2"><br>

<!--------------------------Comment CARD/FORM----------------------------------------------->

      <div class="col-md-10 ">
        <div class="card">
        

                <?php
                     //query Post comment to database 

                    if(isset($_POST['submit'])) {
                    $name = mysqli_real_escape_string($connect,$_POST['name']);
                    $email = mysqli_real_escape_string($connect,$_POST['email']);

                    date_default_timezone_set('Africa/Lagos');
                    $date_time = strftime("%B-%d-%Y %H:%M:%S");

                    $status    = 'OFF';

                     $filename = $_FILES["image"]["name"];
                     $tempname = $_FILES["image"]["tmp_name"];    
                     $folder   = "Admin/upload/".$filename;
                     
                     $readmore_id = $_GET['readmore'];

                    $comment   = mysqli_real_escape_string($connect,$_POST['comment']);

                    $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));

                    // Valid file extensions
                    $extensions_arr = array("jpg","jpeg","png","gif");

                     // Check extension
                    if( in_array($imageFileType,$extensions_arr)){
                        
                      //Record insert into database
                     $sql = "INSERT INTO comment (datetime,image,name,email,status,comment,post_comment_id) VALUES ('$date_time','$filename','$name','$email','$status','$comment',' $readmore_id ')";
                     $query = mysqli_query($connect,$sql);

                     move_uploaded_file($tempname, $folder);

                     if(!$query){
                         echo $msg="<div class='alert alert-danger'>Something Went Wrong Try Again";
                             
                      }else{
                         echo $mgs = "<div class='alert alert-success'>Your Comment Was Successfully Submitted.</div>";
                           

                            } 
                          }
                        } 
                      ?>

     <!---------------------------comment form--------------------------------->
  
    <form action="" method="Post" enctype="multipart/form-data" class="mt-3">
    <div class="container">
        <h5 class="card-header text-center">Leave Comment</h5>
      <div class="row">
        <div class="col-md-10  mt-2">   
          <div class = "form-group">
              <label for="name">Name</label>
              <input type="text" class = "form-control" name="name" placeholder="Enter Title">
           </div>
        </div>

      <div class="col-md-10  mt-2"> 
        <div class = "form-group">
              <label for="email">Email</label>
              <input type="email" class = "form-control" name="email" placeholder="Enter Email">
        </div>
      </div>

      <div class="col-md-10  mt-2"> 
        <div class = "form-group">
                <label >Upload Image</label>
                <input type="file" class = "form-control" name="image">
        </div>
      </div>
             
      <div class="col-md-10  mt-2"> 
        <div class = "form-group">
                <label for="comment">Your Comment</label>
                <textarea class = "form-control" rows = "10" name="comment" placeholder = "Enter Your Comment"></textarea>
        </div>
      </div>

      <div class="form-group mt-2">
                <input type="submit" value="Submit"class="btn btn-outline-secondary btn-lg" name="submit">
      </div>

      </form>
                </div>
              </div>
            </div>
          </div>
        </div> 
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
      