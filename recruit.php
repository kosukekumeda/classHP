<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/recruit-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>求人検索</title>
</head>
<body>
    <!--======= ここからコピペ ==========-->
    <section id="reruit" class="wrapper">
    <div class="container">
                    <h2 class="section-title"> - recruit - </h2>
                    <div class="description">
                        <p>ITエンジニアの求人倍率はずばぬけて高いです。<br>今こそ狙い目！</p>
                        <img src="img/career2.png" alt="">
                    </div>
            </div>
    <div class="container2">
        <!-- ==============ここから==================== -->
        <h2 class="section-title">Search Form</h1>
        <div class="formbox">
            <form action="search.php" method="get">
            <label for="salary" class="label">saraly:</label>
                <select name="salary" id="salary" class="select">
                    <option value="">選択してください</option>
                    <option value="9">18万~</option>
                    <option value="11">22万~</option>
                    <option value="13">24万~</option>
                    <option value="15">26万~</option>
                    <option value="16">未定</option>
                </select>
                <br>
                <button type="submit" class="submit">Search</button>
                </form>
            <form action="search.php">
                <label for="job" class="label">job:</label>
                <select name="job" id="job" class="select">
                    <option value="">選択してください</option>
                    
                    <?php
                    // データベース接続情報
                    $host = 'localhost';
                    $dbname = 'recruit_info';
                    $user = 'classmate';
                    $password = 'testpass';
                    try {
                        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $e) {
                        die("データベース接続失敗: " . $e->getMessage());
                    }
                    // 
                    foreach($pdo->query('SELECT * FROM jobs') as $row) :
                    ?>
                    <option value="<?= htmlspecialchars($row['id']) ?>">
                        <?=  htmlspecialchars($row['job']) ?>
                    </option>
                    <?php
                    endforeach;
                    ?>
                </select>
                </form>
                <br>
                <form action="search.php">
                <label for="skill" class="label">必要スキル:</label>
                <select name="skill" id="skill" class="select">
                    <option value="">選択してください</option>
                    <option value="1">Java</option>
                    <option value="2">PHP</option>
                    <option value="3">JavaScript</option>
                    <option value="4">HTML/CSS</option>
                    <option value="5">C#</option>
                    <option value="6">Python</option>
                    <option value="7">不問</option>
                    <option value="8">JS/PHP</option>
                </select>
                <button type="submit" class="submit">All Search</button>
                <br>
            </form>
        </div>
        <!-- ここまで -->
    </div>
    </section>
    <!-- =========== ここまでコピペ ========== -->
</body>
</html>
