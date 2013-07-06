<html>
  <?php
echo "jon";
include 'facebook.php';

  $config = array();
  $config['appId'] = '346041422164974';
  $config['secret'] = 'a4dc987c8d289a84f065eee4044be2a3';
  $config['fileUpload'] = false; 

  $facebook = new Facebook($config);
  $uid = $facebook->getUser();
  echo "jon";
?>


</html>
  
  
  
  
  
 
