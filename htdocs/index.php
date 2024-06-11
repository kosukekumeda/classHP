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
                <!-- <li><a href="#RECRUIT">RECRUIT</a></li> -->
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
    <?php
    require_once('index_hp.php');
    ?>

    <footer id="footer">
        <p>&copy;テキストテキスト</p>
    </footer>
</body>

</html>