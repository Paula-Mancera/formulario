<?php

function getFolderProject(){
    if (strpos(__DIR__, '/') !== false) {
        $ROOT = str_replace('/opt/lampp/htdocs/', '/', __DIR__);
      } else {
        $ROOT = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
      }
      $ROOT = str_replace('config', '', $ROOT);
      return $ROOT;
}


    function saveImage1($files){
        $file_name = str_replace(' ', '', $files['imgconsentimiento']['name']);
          $file_tmp = $files['imgconsentimiento']['tmp_name'];
         
        
        move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . getFolderProject() . '/images/' . $file_name); 
        return $file_name; 
        }

        function saveImage2($files){
              $file_name = str_replace(' ', '', $files['imgexamenes']['name']);
              $file_tmp = $files['imgexamenes']['tmp_name'];         
            move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . getFolderProject() . '/images/' . $file_name); 
            
            return $file_name; 
            }
    

?>
