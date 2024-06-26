<!DOCTYPE html>
<html lang="ja">

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
                <li><a href="recruit.php">RECRUIT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="mainvisual">
            <img src="img/mono3.jpg" alt="graphic">
            <div class="catchphrase">Helping you find information efficiently.
        </div>


        <section id="CONCEPT" class="wrapper">
            <div class="container">
                    <h2 class="section-title"> - About - </h2>
                    <div class="description">
                        <h3>人生のチャンスをつかもう。</h3>
                        <p>手を伸ばせばすぐに届く、ITエンジニア科のあなたに一番近いwebサイトを作りました</p>
                    </div>
            </div>


            <!-- <div>
                <ul class="flex-box">
                    <li class="item">
                        <ul class="bg-box">
                            <li>何か手がかりを集めたい</li>
                            <li class="bg"><a href="link.php"><img src="img/Rectangle 5.png" alt=""></a><p class="text">LINK</p></li>
                        </ul>
                    </li>
                    <li class="item">
                        <ul class="bg-box">
                            <li>就活情報を知りたい</li>
                            <li class="bg"><a href="recruit.php"><img src="img/Rectangle 6.png" alt=""></a><p class="text">RECRUIT</p></li>
                        </ul>
                    </li>
                </ul>
            </div> -->
        </section>

    </main>

    <!-- PHP表示 -->

    <section class="php">
        <?php
        require_once('index_hp.php');
        ?>
    </section>

    <section id="message">

    <div class="formbox">
                    <div class="container">
                        <h2 class="section-title">Message Form</h2>
                        <div class="description">
                            <h3>背中を押してあげよう</h3>
                            <p>6ヶ月間ともに過ごした仲間へ、感謝の気持ちをこめて<br>メッセージや、気になった求人などなど..<br>匿名で誰かの元へ届けてみませんか？</p>
                            </div>
                        <div class="messagebox container2">
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
                                    <option value="7">友井</option>
                                    <option value="8">友安</option>
                                    <option value="9">橋本</option>
                                    <option value="10">原田</option>
                                    <option value="11">檜垣</option>
                                    <option value="12">日髙</option>
                                    <option value="13">藤本</option>
                                    <option value="14">本部</option>
                                    <option value="15">牧野</option>
                                    <option value="16">牧村</option>
                                    <option value="17">松本</option>
                                    <option value="18">村松</option>
                                    <option value="19">山内</option>
                                    <option value="20">山下</option>
                                </select>
                            <label for="message" class="label">message</label>
                            <input type="text" name="message" class="textbox">
                            <input type="submit" value="送信" class="submit">
                            </form>

                        </div>
                    </div>
            </div>
            </div>
</section>

    <footer id="footer">
        <p>&copy;po & kume</p>
    </footer>
</body>

</html>