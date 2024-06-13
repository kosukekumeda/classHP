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
                    <h2 class="section-title"> - About - </h2>
                    <div class="description">
                        <h3>人生のチャンスをつかもう。</h3>
                        <p>手を伸ばせばすぐに届く、ITエンジニア科のあなたに一番近いwebサイトを作りました</p>
                    </div>
            </div>
    <div class="container2">
        <!-- ==============ここから==================== -->
        <!-- <h2 class="section-title">Search Form</h1>
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
        <div class="formbox"> -->
            <!-- =================ここまで================ -->
                    <h2 class="section-title">Message Form</h2>
                    <div class="description">
                        <h3>背中を押してあげよう</h3>
                        <p>6ヶ月間ともに過ごした仲間へ、感謝の気持ちをこめて<br>メッセージや、気になった求人などなど..<br>匿名で誰かの元へ届けてみませんか？</p>
                        <div class="messagebox">
                            <p>投稿するメッセージを入力してください。</p>
                            <form action="message.php" method="post">
                            <label for="friend" class="label">送信先:</label>
                                <select name="name" id="friend" class="select">
                                    <option value="">選択してください</option>
                                    <option value="1">加藤</option>
                                    <option value="2">川添</option>
                                    <option value="3">木村</option>
                                    <option value="4">櫛間</option>
                                    <option value="5">久米田</option>
                                    <option value="6">小林</option>
                                    <option value="7">友安</option>
                                    <option value="8">橋本</option>
                                    <option value="9">原田</option>
                                </select>
                            <label for="message" class="label">message</label>
                            <input type="text" name="message" class="textbox">
                            <input type="submit" value="送信" class="submit">
                            </form>

                        </div>
                    </div>
                    <div class="container2">
                    <h2 class="section-title"> - - - - ✉Mail Box - - - - </h2>
                    <div class="namebox">
                    <a href="" class="btn btn-flat"><span>加藤</span></a>
                    </div>
                    </div>
            </div>
            </div>
    </div>
    </section>
    <!-- =========== ここまでコピペ ========== -->
</body>
</html>
