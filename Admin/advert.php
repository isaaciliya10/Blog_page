         <!------include files---->
              <?php
               $title='Add Post';
               include'include/links.php';
               include'include/side_nav.php';
               include'include/db_configure.php';
               $msg= "";
            
               if (isset($_POST['submit'])) {

               $advert_title= mysqli_real_escape_string($connect,$_POST['title']);
               $advert_content= mysqli_real_escape_string($connect,$_POST['content']);

               date_default_timezone_set('Africa/Lagos');
               $date_time = strftime("%B-%d-%Y %H:%M:%S");

               $filename = $_FILES["image"]["name"];
               $tempname = $_FILES["image"]["tmp_name"];    
               $folder = "upload/".$filename;

                //image validation
               $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));

                 // Valid image file extensions
               $extensions_arr = array("jpg","jpeg","png","gif");

                // Check extension
               if( in_array($imageFileType,$extensions_arr)){
                 
               if(empty($advert_title)){
                     echo  $mgs = "<div class='alert alert-danger text-center'>All Fields Requierd.</div>";
                         
                }elseif(strlen($advert_content) >200){   
                     echo  $mgs = "<div class='alert alert-danger text-center'>Character Shoundn't be More Than 200</div>";
                }else{

                  //Record insert into database
                $sql = "INSERT INTO advert(advert_title,advert_image,advert_content,date_time) VALUES ('$advert_title','$filename','$advert_content','$date_time')";
                $query = mysqli_query($connect,$sql);

                move_uploaded_file($tempname, $folder);

                if (!$query){
                     echo  $mgs = "<div class='alert alert-danger text-center'>Something Went wrong Try Again Letter</div>";
                }else{ 
                       echo  $mgs = "<div class='alert alert-success text-center'>Advert Has Been Added Successfully</div>";
                          }
                    
                        }
                      }
                    }
                     
              ?>
        
          <!---form section for categorey-->
          <div class="container"> 
            <div class="right-side">
              <h5 class="card-header text-center" style="color:#0A2558;"> 
               <i class='bx bxs-chevron-right' ></i> Add Advert</h5>
               
            <form action="" method="Post" enctype="multipart/form-data">

                <div class="row"> 
                <div class="col-md-6"> 
                <div class = "form-group">
                  <label>Advert Title</label>
                  <input type="text" class = "form-control" name="title" placeholder="Enter Advert Title" >
               </div>
                </div>

                
                <div class="col-md-6">
               <!-----The data submit and insert into database--->
               <div class = "form-group">
                  <label >Upload Image</label>
                  <input type="file" class = "form-control" name = "image" >
               </div>
               </div>
              </div>
              <div class="row">
                <div class = "form-group">
                  <label>Advert_Content</label>
                  <textarea class = "form-control" rows = "8" name="content" placeholder = "Enter News Content"></textarea>
                </div>
                 </div>
                <div class="form-group mt-2">
                  <input type="submit" value="Submit" class="btn btn-outline-info btn-md" name="submit">
                </div> 
          </form>

          </div>
          </div>


          <table class="text-center table table-hover table-bordered">
           <thead class="card-header text-center text-primary">
             <tr style="background-color:#0A2558" class="text-light">
               <th>SN</th>
               <th>Title</th>
               <th>Content</th>
               <th>Image</th>
               <th>Date</th>
               <th class="bg-info">Preview</th>
               <th class="bg-danger">Delete</th>
               <th class="bg-success">Update</th>
             </tr>
           </thead>
           <?php
           $sn=0;
           $sql   = "SELECT * FROM advert";
           $query = mysqli_query($connect,$sql);
           while ($row = mysqli_fetch_array($query)) {

             $id            = $row['id'];
             $advert_title  = $row['advert_title']; 
             $advert_content= $row['advert_content'];
             $advert_image  = $row['advert_image'];
             $advert_date   = $row['date_time'];
             $sn++;
           ?>
            <tr>
             <td><?=$sn?></td>
             <td><?=$advert_title?></td>

             <td>
              <?php
              if (strlen($advert_content)>40) {
              $advert_content= substr($advert_content, 0, 40);
              } 
              echo $advert_content;

              ?>
              </td>

              <td><img src="upload/<?=$advert_image?>"style="height:30px; width:50px;  border:3px solid darkgreen" ></td>

             <td><?=$advert_date?></td>
             <td>
                        <a href ="../index.php?readmore=<?=$id;?>"><span class="btn btn-success">Preview</span></a>
                      </td>

                      <td>
                        <a href="include/update.php?update=<?=$id;?>"><span class="btn btn-info"> <i class='bx bx-edit' ></i></span></a>
                      </td>
                      
                  
                      <td> 
                        <a href="include/delete_advert.php?delete=<?=$id;?>"><span class="btn btn-danger"> <i class='bx bx-trash' ></i> </span></a>
                      </td>
                       
           </tr>

           <?php } ?>
             <hr>
          </table>

          
         
             <!----javascript code for sidebar------->
        <script type="text/javascript" src="css/footer.js"></script>
      </body>
      </html>
