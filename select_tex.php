<?php
$conn = mysqli_connect('localhost','root','126514ra','ywltkd');
$sql = "select*from topic";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
$list2= $list2."<li>{$row['title']}</li>";
echo $row['description'];
};
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다.';
  error_log(mysqli_error($conn));
} else {
    echo '저장되었습니다. <a href="tex2.php">돌아가기</a>'
;}
?>
<?php
$conn = mysqli_connect('localhost','root','126514ra','ywltkd');
$sql = "select*from myguests";
$result = mysqli_query($conn,$sql);
$list='';
while ($row = mysqli_fetch_array($result)) {
  $list=$list."<li><a href=\"tex2.php?id={$row['id']}\">{$row['firstname']}</a></li>";
}
$article = array(
  'title'=>'Welcome',
  'description'=>'ddddd'
);
  if(isset($_GET['id'])) {
    $sql = "select*from myguests where id={$_GET['id']}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['firstname'];
    $article['description'] = $row['lastname'];
  }
  ?>
