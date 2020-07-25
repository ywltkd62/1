
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     ini_set("display_errors","1");
     $uploaddir = 'C:\Bitnami\wampstack-7.4.7-0\apache2\htdocs\file\\';
     $uploadfile = $uploaddir.basename($_FILES['user_file']['name']);
     echo '<pre>';
     if(move_uploaded_file($_FILES['user_file']['tmp_name'],$uploadfile)) {
       echo "성공적으로 업로드 되었습니다.\n";
     } else {
       print "파일 업로드 공격의 가능성이 있습니다!\n";
     }
     echo '자세한 디버깅 정보입니다:';
     print_r($_FILES);
     print "</pre>";
       ?>
     <img src="./<?=$_FILES['user_file']['name']?>"/>

   </body>
 </html>
