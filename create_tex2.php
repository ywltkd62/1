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
  <h2><?=$article['title']?></h2>
  <div id="text"><?=$article['description']?></div>
    <div class="form">
      <form action="process_create!.php" method="post">
        <p><input type="text" name="title" placeholder="tilte" rows="10"></p>
        <p><textarea name="description" id="" cols="30" rows="10" placeholder="dscription"></textarea></p>
        <p><input type="submit" value="제출"></p>
    </form>
    </div>
</div>
</body>
</html>
