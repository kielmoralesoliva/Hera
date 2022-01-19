<?php


class MyFiles
{
   
    public function upload($post, $files)
    {
      global $conn;

      $valid_extensions = array('pdf' , 'docx' , 'xlxs'); // valid extensions
      $path = '../uploads/'; // upload directory

 

      if(!empty($post['title']) && !empty($files['requestFile']) )
      {

        $file = $files['requestFile']['name'];
        $tmp = $files['requestFile']['tmp_name'];

        // get uploaded file's extension
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
 

        // can upload same image using rand function
        $final_image = $post['title'].'.'.$ext;
        // check's valid format
        if(in_array($ext, $valid_extensions))  {

          $fileLink = '../assets/upload-files/'.$final_image;


          if(move_uploaded_file($tmp, $fileLink))  {

            $sql = "INSERT INTO `repository`(`id`,`employeeId`, `title`, `fileName`) VALUES (
                    null,
                    '".$_SESSION['loggedin-account-info']['employee_ID']."',
                    '".$post['title']."',
                    '".$final_image."')";
            if ($conn->query($sql) === TRUE) {
              echo json_encode(array(
                'success'=>true,
                'message'=> 'Successfully created'
              ));
            } else {
              echo json_encode(array(
                'success'=>false,
                'message'=> 'Unable to process the request',
              ));
            }
            
          } else {
             echo json_encode(array(
              'success'=>false,
              'message'=> 'Unable to upload file',
            ));
          }
        } 
        else  {
          echo json_encode(array(
            'success'=>false,
            'message'=> 'Invalid file',
          ));
        }
      } else {
        echo json_encode(array(
          'success'=>false,
          'message'=> 'Fields are incomplete',
        ));
      }
    }

     public function delete($post)
    {
        global $conn;
       
        $sql = "DELETE FROM `repository` WHERE `id`='".$post['id']."' ";
        
        if ($conn->query($sql) === TRUE) {

          unlink('../assets/upload-files/'.$post['fileName']);

          echo json_encode(array(
            'success'=>true,
            'message'=> 'Successfully deleted'
          ));
        } else {
          echo json_encode(array(
            'success'=>false,
            'message'=> 'Unable to process the request',
          ));
        }
        
    }
}


?>


