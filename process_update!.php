<?php
$conn = mysqli_connect('localhost','root','126514ra','ywltkd');

settype($_POST['id'],'integer');
$filtered = array(
'id'=>mysqli_real_escape_string($conn,$_POST['id']),
'title'=>mysqli_real_escape_string($conn,$_POST['title']),
'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);

$sql = "
  UPDATE myguests
  SET
    firstname = '{$filtered['title']}',
    lastname = '{$filtered['description']}'
    where
    id = {$filtered['id']}
";
$result = mysqli_query($conn,$sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다.';
  error_log(mysqli_error($conn));
} else {
    echo '저장되었습니다. <a href="tex2.php">돌아가기</a>'
;}
?>
