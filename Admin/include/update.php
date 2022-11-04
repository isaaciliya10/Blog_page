 <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Premier Report </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="..//css/style.css">
     <link rel="stylesheet" href="..//css/bootstrap.css">
     <link rel="icon" type="text/css" href="..//images/fav.png">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
   </head>

          <?php
          include_once"side_nav.php";
          include_once"db_configure.php";
           ?>

          <?php
          if (isset($_POST['update'])) {
	        $update = $_GET['update'];
          $title = mysqli_real_escape_string($connect,$_POST['title']);
          $category = mysqli_real_escape_string($connect,$_POST['category']);
          $content= mysqli_real_escape_string($connect,$_POST['content']);

          $sql = "UPDATE add_post SET title='$title',category='$category',content='$content' WHERE id=$update";
          $query = mysqli_query($connect,$sql);
          
          }
          ?>

         <div class="container">
          <form action="../dashboard.php" method="Post" enctype="multipart/form-data" >
             <?php
        
                    $query = "SELECT * FROM add_post  WHERE id = $update";
                    $result = mysqli_query($link, $query);
                    $sn= 0;
                    while($row = mysqli_fetch_assoc($result)){

                    $db_title       = $row['title'];
                    $db_categorey   = $row['category'];
                    $db_datetime    = $row['datetime'];
                    $db_image       =$row['image'];
                    $db_content     =$row['content'];
                    $sn++; 
                ?>
          <option value="<?=$db_category;?>"><?=$db_category;?></option>
                    <?php }?>
                    </select>
            </div>
            
            <label for="current image">Current Image</label>
            <td> <img src="../uploads/<?=$db_image;?>" alt="" style="height:5rem; width: 6rem;"> </td>

            <div class="form-group">
                <label for="upload-image">Upload image</label>
                <input type="file" name="post_file" id="file" class="form-control" value="<?=$db_image;?>">
            </div>

            <label for="content">Make a post</label>
            <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control" value=""><?=$db_content;?></textarea>
            
       
            <input type="submit" class="form-control allbut mt-3" name="update" id="update" value="UPDATE POST">
            </form>

         
          <div class="form-group mt-2">
            <input type="submit" value="Submit"class="btn btn-outline-info btn-lg" name="update">
          </div> 
          
        </form>
        </div>

