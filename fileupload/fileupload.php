<?php
include "connection.php";
//check if there is selected file or img 

if(isset($_POST['upload'])){



    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $tempname = $_FILES['file']['tmp_name'];
    //^check for ticks or symbols and put slashes to it making it a string like => /'/

    $filedata = addslashes(file_get_contents($tempname));

    //if conditions were met, itll allow the user to upload file/img to db 
    $sql = "INSERT INTO uploads (filename, filetype, filedata) 
    VALUES ('$filename','$filetype','$filedata')";
    
    //execute the query above
    mysqli_query($conn,$sql);

    echo "uploaded sucessfully BITCH!";
}

?>


<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="fileupload.css">
    <title>Upload PDF file or Image</title>
</head>
<body>
   

    <!-- the method POST will hide the data from the interface/ acts as connection of html and php.
     nultipart... is a default in input type for files *SHOULD ALWAYS BE INCLUDED*-->
     <div class = "container">
         <h2>Upload PDF or Pictures</h2>
        <form method="POST" enctype = "multipart/form-data">
                <input type="file" name = "file" required> 
                <br><br>
                <button type = "submit" name = "upload"> Upload </button> 
        </form>
    </div>

</body>
</html>



