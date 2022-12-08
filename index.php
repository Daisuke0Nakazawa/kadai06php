<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recieve.php" method="post">
      <h1>セリーグベストナイン2022</h1>
        <div class="pitcher">
            <dt>投手</dt>
            <dd>
                <select name="pitcher" id="pitcher">
                    <option value="">未選択</option>
                    <option value="小川泰弘 （ヤクルト）">小川泰弘 （ヤクルト）</option>
                    <option value="今永昇太 （横浜DeNA）">今永昇太 （横浜DeNA）</option>
                    <option value="青柳晃洋 （阪神）">青柳晃洋 （阪神）</option>
                    <option value="戸郷翔征 （巨人）">戸郷翔征 （巨人）</option>
                    <option value="森下暢仁 （広島）">森下暢仁 （広島）</option>
                    <option value="高橋宏斗（中日）">高橋宏斗（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <div class="catcher">
            <dt>捕手</dt>
            <dd>
            <select name="catcher" id="catcher">
                    <option value="">未選択</option>
                    <option value="中村悠平 （ヤクルト）">中村悠平 （ヤクルト）</option>
                    <option value="嶺井博希 （横浜DeNA）">嶺井博希 （横浜DeNA）</option>
                    <option value="梅野隆太郎 （阪神）">梅野隆太郎 （阪神）</option>
                    <option value="大城卓三 （巨人）">大城卓三 （巨人）</option>
                    <option value="曾澤翼 （広島）">曾澤翼 （広島）</option>
                    <option value="木下拓哉（中日）">木下拓哉（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
    
        <div class="firsu">
            <dt>一塁手</dt>
            <dd>
                <select name="first" id="first">
                    <option value="">未選択</option>
                    <option value="オスナ （ヤクルト）">オスナ （ヤクルト）</option>
                    <option value="ソト （横浜DeNA）">ソト （横浜DeNA）</option>
                    <option value="大山悠輔 （阪神）">大山悠輔 （阪神）</option>
                    <option value="中田翔 （巨人）">中田翔 （巨人）</option>
                    <option value="マクブルーム （広島）">マクブルーム （広島）</option>
                    <option value="ビシエド（中日）">ビシエド（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <div class="second">
            <dt>二塁手</dt>
            <dd>
                <select name="second" id="second">
                    <option value="">未選択</option>
                    <option value="山田哲人 （ヤクルト）">山田哲人 （ヤクルト）</option>
                    <option value="牧秀悟（横浜DeNA）">牧秀悟（横浜DeNA）</option>
                    <option value="糸原健斗 （阪神）">糸原健斗 （阪神）</option>
                    <option value="吉川尚輝 （巨人）">吉川尚輝 （巨人）</option>
                    <option value="菊池涼介 （広島）">菊池涼介 （広島）</option>
                    <option value="阿部寿樹（中日）">阿部寿樹（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
            
        </div>
        <div class="third">
            <dt>三塁手</dt>
            <dd>
                <select name="third" id="third">
                    <option value="">未選択</option>
                    <option value="村上宗隆 （ヤクルト）">村上宗隆 （ヤクルト）</option>
                    <option value="宮崎敏郎 （横浜DeNA）">宮崎敏郎 （横浜DeNA）</option>
                    <option value="佐藤輝明 （阪神）">佐藤輝明 （阪神）</option>
                    <option value="岡本和真 （巨人）">岡本和真 （巨人）</option>
                    <option value="坂倉将吾 （広島）">坂倉将吾 （広島）</option>
                    <option value="石川昂弥（中日）">石川昂弥（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <div class="short">
            <dt>遊撃手</dt>
            <dd>
                <select name="short" id="short">
                    <option value="">未選択</option>
                    <option value="長岡秀樹 （ヤクルト）">長岡秀樹 （ヤクルト）</option>
                    <option value="大和 （横浜DeNA）">大和 （横浜DeNA）</option>
                    <option value="中野拓夢 （阪神）">中野拓夢 （阪神）</option>
                    <option value="坂本勇人 （巨人）">坂本勇人 （巨人）</option>
                    <option value="小園海斗 （広島）">小園海斗 （広島）</option>
                    <option value="土田龍空（中日）">土田龍空（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <div class="left">
            <dt>左翼手</dt>
            <dd>
                <select name="left" id="left">
                    <option value="">未選択</option>
                    <option value="青木宣親 （ヤクルト）">青木宣親 （ヤクルト）</option>
                    <option value="佐野恵太 （横浜DeNA）">佐野恵太 （横浜DeNA）</option>
                    <option value="ロハスJr. （阪神）">ロハスJr. （阪神）</option>
                    <option value="ウォーカー （巨人）">ウォーカー （巨人）</option>
                    <option value="西川龍馬 （広島）">西川龍馬 （広島）</option>
                    <option value="鵜飼航丞（中日）">鵜飼航丞（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <div class="center">
            <dt>中堅手</dt>
            <dd>
                <select name="center" id="center">
                    <option value="">未選択</option>
                    <option value="塩見泰隆 （ヤクルト）">塩見泰隆 （ヤクルト）</option>
                    <option value="桑原将志 （横浜DeNA）">桑原将志 （横浜DeNA）</option>
                    <option value="近本光司 （阪神）">近本光司 （阪神）</option>
                    <option value="丸佳浩 （巨人）">丸佳浩 （巨人）</option>
                    <option value="秋山翔吾 （広島）">秋山翔吾 （広島）</option>
                    <option value="大島洋平（中日）">大島洋平（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <div class="right">
            <dt>右翼種</dt>
            <dd>
                <select name="right" id="right">
                    <option value="">未選択</option>
                    <option value="サンタナ （ヤクルト）">サンタナ （ヤクルト）</option>
                    <option value="楠本泰史 （横浜DeNA）">楠本泰史 （横浜DeNA）</option>
                    <option value="島田海吏（阪神）">島田海吏（阪神）</option>
                    <option value="ポランコ （巨人）">ポランコ （巨人）</option>
                    <option value="野間峻祥 （広島）">野間峻祥 （広島）</option>
                    <option value="岡林勇希（中日）">岡林勇希（中日）</option>
                    <option value="その他">その他</option>

                </select>
            </dd>
        </div>
        <input type="submit" value="送信">

    </form>
</body>
</html>