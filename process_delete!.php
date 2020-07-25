<?php
$conn = mysqli_connect('localhost','root','126514ra','ywltkd');

settype($_POST['id'],'integer');
$filtered = array(
'id'=>mysqli_real_escape_string($conn,$_POST['id'])
);

$sql = "
  delete from myguests where id = {$filtered['id']}
";
$result = mysqli_query($conn,$sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다.';
  error_log(mysqli_error($conn));
} else {
    header('location: tex2.php');
;}
?>
