<?php
require_once('hp.php');

$hp = new Hp();
$result = $hp->getById($_GET['id']);

$id = $result['id'];
$title = $result['title'];
$content = $result['content'];
$category = (int)$result['category'];
$publish_status = $result['publish_status'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlogForm</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<h2 class="update_title">-Renew-</h2>
<div class="update">
        
        <form action="hp_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <p>Link Title：
            <input type="text" name="title" value="<?php echo $title?>"></p>
            <p>Content：
            <textarea name="content" id="content" cols="30" rows="1"><?php echo $content?></textarea></p>
            <p>Category：
            <select name="category">
                <option value="1"<?php if($category === 1) echo "selected"?>>PHP</option>
                <option value="2"<?php if($category === 2) echo "selected"?>>Java Script</option>
                <option value="3"<?php if($category === 3) echo "selected"?>>CSS</option>
                <option value="4"<?php if($category === 4) echo "selected"?>>HTML</option></p>
            </select>
            <p>Post Public:
                <input type="radio" name="publish_status" value="1" <?php if($publish_status === 1) echo "checked"?>>Public
                <input type="radio" name="publish_status" value="2" <?php if($publish_status === 2) echo "checked"?>>Private
            </p>
            <br>
            
        
</div>
<div class="detail_back">
    <input type="submit" class="send_name" value="Send">
</div>
        </form>
<p class="update_back"><a href="index.php"class="btn-square-raised">Back</a></p>
    </body>
</html>