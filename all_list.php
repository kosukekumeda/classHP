
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom</title>
    <meta name="description" content="ライブビジネススクールITエンジニア科のクラス掲示板">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header" class="wrapper">
        <h1 class="site-title">Classroom</h1>
        <nav class="navi">
            <ul>
                <li><a href="#CONCEPT">CONCEPT</a></li>
                <li><a href="#LINK">LINK</a></li>
                <li><a href="#RECRUIT">RECRUIT</a></li>
            </ul>
        </nav>
    </header>

<?php 

require_once('hp.php');
//取得したデータを表示
//エラー内容を表示、既に表示されている
// ini_set('display_errors', "On");
$hp = new Hp();
// var_dump($dbc);
$hpData = $hp->getAll();  

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
?>
<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>リンク一覧</title>
</head>
<body> -->
    <div class="wrapper">

    <div class="link-h2">
        <h2>-All Link-</h2>
    </div>
    <div class="create-btn">
        <p><a href="form.html" class="btn-square-raised">New Create</a></p>
    </div>
        <table class="link-table">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>More</th>
                <th colspan="2">Edit</th>
            </tr>
            <?php foreach($hpData as $column): ?>
            <tr>
                <td><?php echo h($column['title']) ?></td>
                <td><?php echo h($hp->setCategoryName($column['category'])) ?></td>
                <td><a href="detail.php?id=<?php echo $column['id'] ?>">Detail</a></td>
                <td><a href="update_form.php?id=<?php echo $column['id'] ?>">Renew</a></td>
                <td><a href="hp_delete.php?id=<?php echo $column['id'] ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="back_button">
        <p><a href="index.php"class="btn-square-raised">Back</a></p>
    </div>


</body>
</html>