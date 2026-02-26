<?php
    include "connection.php";
    //temp container for all the data in db, then place it into $result
    $sql = "SELECT * FROM  uploads";
    $result =  mysqli_query($conn,$sql);

    //check all the data in db
    while($row = mysqli_fetch_assoc($result)){
        //show only the filename
        echo "<h3>" . $row['filename']. "</h3>";

        //IF PDF
        if($row['filetype']== "application/pdf"){
            echo '<iframe src ="data:application/pdf;base64,'
            .base64_encode($row['filedata']).'"
            width="500" height="300"></iframe>';
        }else{
            //IF IMG
            echo '<img src = "data:'. $row['filetype'].';base64,'
            .base64_encode($row['filedata']).'"
            width="300">';
        }
        echo "<hr>";

    }



?>