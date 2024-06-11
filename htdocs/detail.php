<?php

//1,require_onceを使用
require_once('hp.php');
//2,namespaceを設定
//3,useの使用
$hp = new Hp();
$result = $hp->getById($_GET['id']);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Detail</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2 class="detail_h2">-More Detail-</h2>
    <!-- <div class="detail"> 
        <h3 class="detail_title">Title:&emsp;<?php echo $result['title']?></h3>
        <h4 class="detail_category">Category:&emsp;<?php echo $hp->setCategoryName($result['category'])?></h4>
        <h4 class="registration">Registration Date and time:&emsp;<?php echo $result['post_at']?></h4>
        <h4 class="detail_content">URL:&emsp;<a href="<?php echo $result['content']?>"><?php echo $result['title']?></a></h4>
    </div> -->
    <!-- <p class="detail_back"><a href="index.php"class="btn-square-raised">Back</a></p> -->


<div class="company_info">
   <dl>
     <dt>Title:</dt>
       <dd><?php echo $result['title']?></dd>

       <dt>Category:</dt>
       <dd><?php echo $hp->setCategoryName($result['category'])?></dd>

       <dt>Registration Date and time:</dt>
       <dd><?php echo $result['post_at']?></dd>

       <dt>URL:</dt>
       <dd><a href="<?php echo $result['content']?>"><?php echo $result['title']?></a></dd>
   </dl>
 </div>
 <p class="detail_back"><a href="index.php"class="btn-square-raised">Back</a></p>
 </body>

</html>