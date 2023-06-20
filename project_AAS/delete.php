<?php 
     require("fungsi.php");
     $id = $_GET["id"];
 
     if(delete($id) > 0){
         echo "
         <script>
             alert('delete succesfull !');
             document.location.href = 'index.php';
         </script>
     ";
     }else{
         echo "
         <script>
             alert('data can't deleted !');
             document.location.href = 'index.php';
         </script>
     ";
     }
?>