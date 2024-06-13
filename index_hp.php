
<?php 
require_once('hp.php');
//取得したデータを表示
//エラー内容を表示、既に表示されている
// ini_set('display_errors', "On");
$hp = new Hp();
// var_dump($dbc);
$hpData = $hp->getLimit();  

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
        <h2>-Link List-</h2>
    </div>
    <div class="create-btn">
        <p><a href="form.html" class="btn-square-raised"> New Create</a></p>
    </div>
        <table class="link-table">
            <tr>
                <th class="table_title">Title</th>
                <th class="table_category">Category</th>
                <th class="more">More</th>
                <th colspan="2">Edit</th>
            </tr>
            <?php foreach($hpData as $column): ?>
            <tr>
                <td><?php echo h($column['title']) ?></td>
                <td><?php echo h($hp->setCategoryName($column['category'])) ?></td>
                <td class="hover_detail"><a href="detail.php?id=<?php echo $column['id'] ?>">Detail</a></td>
                <td class="hover_renew"><a href="update_form.php?id=<?php echo $column['id'] ?>">Renew</a></td>
                <td class="hover_delete"><a href="hp_delete.php?id=<?php echo $column['id'] ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <div class="view-btn">
            <p><a href="all_list.php" class="btn-square-raised">All View</a></p>
        </div>
    </div>
<!-- </body>
</html> -->