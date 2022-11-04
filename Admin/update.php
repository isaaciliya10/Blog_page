
      <!------include files---->
            <?php
             $title = 'Update';
             include'include/links.php';
             include'include/side_nav.php';
             include'include/db_configure.php';
            

              if(isset($_GET['update'])){
                $update = $_GET['update'];
               } 
               
             if(isset($_POST['update'])){
              $title = mysqli_real_escape_string($connect,$_POST['title']);
              $category = mysqli_real_escape_string($connect,$_POST['select']);

              date_default_timezone_set('Africa/Lagos');
              $date_time = strftime("%B-%d-%Y %H:%M:%S");

              $author = 'Admin';

              $filename = $_FILES["image"]["name"];
              $tempname = $_FILES["image"]["tmp_name"];    
              $folder = "upload/".$filename;

              $content= mysqli_real_escape_string($connect,$_POST['content']);

               //Validation when submiting empty
              $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));

               // Valid file extensions
              $extensions_arr = array("jpg","jpeg","png","gif");

                // Check extension
              if(in_array($imageFileType,$extensions_arr)){
               
               

                 //Record insert into database
              $sql = "UPDATE add_post SET title='$title',category='$category',content='$content',  image='$fileimage' WHERE id = '$update'";

              $query=mysqli_query($connect,$sql);

              move_uploaded_file($tempname,$folder);
              
              If(!$query){
                die('error'.mysqli_error($connect));
                }else{
                  echo "success";
                }
              }
             }   
               
             ?>
          
          <!-------------form section for categorey------------------>
          <div class="container"> 
            <div class="right-side">
              
          <form action="dashboard.php" method="Post" enctype="multipart/form-data">

                   <?php

                     $sql = "SELECT * FROM add_post WHERE id = $update";
                     $query = mysqli_query($connect,$sql);

                     while($row=mysqli_fetch_array($query)){
                       $title     = $row['title'];
                       $content   = $row['content'];
                       $category  = $row['category'];
                       $image     = $row['image'];
                     }

                    ?>    

              <div class="row"> 
              <div class="col-md-4"> 

              <div class = "form-group">
                <label>Title</label>
                <input type="text" class = "form-control" name="title" value="<?=$title?>"    placeholder="Enter Title">
             </div>

              </div>

              <div class="col-md-4">

              <div class = "form-group">
                <span>Current</span>
                <label>Category</label>
                <?= $category ?>
                 <select class="form-select" name="select">

              <!----fetching from the database i'e category by select html tag--->
                         <?php

                         $sql = "SELECT * FROM category_table";
                         $query = mysqli_query($connect, $sql);
                          
                         
                            while($row = mysqli_fetch_array($query)){
                          
                         $id = $row['id'];
                         $author = $row['author'];
                         $datetime = $row['datetime'];
                         $category = $row['category'];
                        
                         ?>
                         
                         <option value="<?= $category ?>"><?= $category ?></option>

                     <?php };?> 

                 </select>
              </div>
             </div>

              <div class="col-md-4">

             <!-----The data submit and insert into database--->
             <div class = "form-group">

              <span>Current</span>
              <img src="upload/<?= $image ?>" height="20">

                <label >Upload Image</label>
                <input type="file" class = "form-control" name = "image" >

             </div>
             </div>

              <div class = "form-group">
                <label>News Content</label>
                <textarea class = "form-control" rows = "10" name="content" placeholder = "Enter News Content"><?= $content ?>        
                </textarea>
              </div>
             
              <div class="form-group mt-2">
                <input type="submit" value="Update"class="btn btn-outline-info" name="update">
              </div> 
               
        </form>
        </div>
        </div>
       
           <!----javascript code for sidebar------->
      <script type="text/javascript" src="css/footer.js"></script>
    </body>
    </html>
