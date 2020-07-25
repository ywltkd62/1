<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="tex2.css">
  <script src="tex2.js"></script>
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
    'description'=>'Hello'
  );
  $update_link = '';
      if(isset($_GET['id'])) {
      $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
      $sql = "select*from myguests where id={$filtered_id}";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $article['title'] = htmlspecialchars($row['firstname']);
      $article['description'] = htmlspecialchars($row['lastname']);

      $update_link = '<a href="update.php?id='.$_GET['id'].'">Update</a>';
    }
    ?>
  </head>
<body>
  <nav>
    <div>
        <a href="tex2.php"><span>Home</span></a>
        <a href="create_tex2.php" class="on"><span>create</span></a>
        <a href="#a"><span>News2</span></a>
        <a href="#a"><span>News3</span></a>
      <span></span>
    </div>
  </nav>
  <div class="center">
  <h1><a href="tex2.php">Create</a></h1>
  <div id="update_link"><p><?=$update_link?></p></div>
  <p><?=$list?></p>
  <h2><?=$article['title']?></h2>
  <div id="text"><?=$article['description']?></div>
    <div class="form">
      <form action="process_update!.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" placeholder="tilte" value="<?=$article['title']?>"></p>
        <p><textarea name="description" id="" cols="30" rows="10" placeholder="dscription"><?=$article['description']?></textarea></p>
        <p><input type="submit" value="제출"></p>
    </form>
    </div>
</div>
</body>
</html>
