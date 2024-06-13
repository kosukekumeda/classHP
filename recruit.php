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
                    <option value="19">開発エンジニア(SE)</option>
                    <option value="3">プログラマー</option>
                    <option value="4">組込みエンジニア</option>
                </select>
                <br>
                <label for="area" class="label">勤務地:</label>
                <select name="area" id="area" class="select">
                    <option value="">選択してください</option>
                    <option value="1">宮崎市</option>
                    <option value="2">都城市</option>
                    <option value="3">延岡市</option>
                </select>
                <br>
                <label for="salary" class="label">給与:</label>
                <select name="salary" id="salary" class="select">
                    <option value="">選択してください</option>
                    <option value="3">12万~</option>
                    <option value="4">13万~</option>
                    <option value="5">14万~</option>
                    <option value="6">15万~</option>
                    <option value="7">16万~</option>
                    <option value="8">17万~</option>
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
