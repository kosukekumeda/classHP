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
                    </div>
            </div>
    <div class="container2">
        <!-- ==============ここから==================== -->
        <h2 class="section-title">Search Form</h1>
        <div class="formbox">
            <form action="search.php" method="get">
                <label for="job" class="label">職種:</label>
                <select name="job" id="job" class="select">
                    <option value="">選択してください</option>
                    <option value="6">フロントエンドエンジニア</option>
                    <option value="11">ネットワークエンジニア</option>
                </select>
                <br>
                <label for="area" class="label">勤務地:</label>
                <select name="area" id="area" class="select">
                    <option value="">選択してください</option>
                    <option value="1">宮崎市</option>
                </select>
                <br>
                <label for="salary" class="label">給与:</label>
                <select name="salary" id="salary" class="select">
                    <option value="">選択してください</option>
                    <option value="8">17万~</option>
                    <option value="9">18万~</option>
                    <option value="10">19万~</option>
                    <option value="11">20万~</option>
                </select>
                <br>
                <button type="submit" class="submit">検索</button>
            </form>
        </div>
        <!-- ここまで -->
    </div>
    </section>
    <!-- =========== ここまでコピペ ========== -->
</body>
</html>
