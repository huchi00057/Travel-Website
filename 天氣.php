<!DOCTYPE html>
<html lang="en">
<head>
  <title>六腳行</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <?php					//呼叫climate.py去爬天氣
    $path="python climate.py ";
    passthru($path);
  ?>
  <div class="climate">				<!--天氣區塊，如果要加道別頁複製這個div跟上面那塊php，反正資料讀出來了看你要怎麼設計都可-->
    <p>今日天氣</p>
    <?php include 'weather.php';?>					
  </div>
</body>
</html>
