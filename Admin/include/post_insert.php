<?php
    include_once"db_configure.php";
    include_once"inc.php";
 
    if (isset($_POST['submit'])) {
 	 $author = $_POST['author'];
 	 $title = $_POST['title'];
 	 $date = $_POST['date'];
 	 $time = $_POST['time'];
 	 $content = $_POST['content'];

 	//image upload file
        $img = $_FILES['file']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Upload file
            if(move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$img)){
                 
                // Insert record
                $sql = "INSERT INTO project_contect(author,title,date,time,file,content) values('$author','$title','$date','$time','$img','$content')";   
               $query = mysqli_query($connect,$sql) or die(mysqli_error($connect));
               if (!$query) {
                   $_SESSION['errormessage'] = "The Content Was Not Added";
                   header("Location:../post.php");
                    die();
               }else{
                   $_SESSION['successmessage'] = "The Content Have Been Added";
                   header("Location:../post.php");
                    die()
               }

            }

        }
    
    }
 
?>