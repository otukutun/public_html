<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<!--&#91;if lt IE 9&#93;>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<!&#91;endif&#93;-->
<link rel="shortcut icon" href="">
</head>
<body>
<?php
$redis = new Redis();
$redis->connect($host,6379);
?>
<h1>キリ番サイト</h1>
<h2 style="color:red;"><?php echo $redis->incr($key); ?></h2>
<!-- Place your content here -->
<!-- SCRIPTS -->
<!-- Example: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
</body>
</html>
