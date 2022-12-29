<?php
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
$name = $_POST["name"];
$date = $_POST["date"];
$tel_number = $_POST["tel"];
// echo "$tel_number <br>";

$refresh_timer_second = 5;
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alertを出す&画面を時間差で遷移させる</title>
</head>

<body>
    <table>
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>氏名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>日付</td>
            <td><?= $date; ?></td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td><?= $tel_number; ?></td>
        </tr>
    </table>

    <br>

    <div id="timeWrapper">
        <div id="timer" style="display:inline-grid"></div>秒後にページが変わります
    </div>
    <script type="text/javascript">
        const tel = "<?php echo $tel_number ?>";
        alert(`電話番号は ${tel} です`);
        const time = document.getElementById('timer');

        function timer() {
            setTimeout(function() {
                let time = document.getElementById("timer").innerText;
                time--;
                if (time < 0) {
                    console.log("ゼロになりました");
                    <?php
                    header("refresh:{$refresh_timer_second};url=end.php");
                    ?>
                } else {
                    countdown(time);
                }
            }, 1000);
        }

        function countdown(time) {
            document.getElementById("timer").innerText = time;
            timer();
        }
        // 5秒カウントダウンする
        countdown(<?= $refresh_timer_second; ?>)

        // 【javascript】一番簡単なカウントダウンタイマー
        // https://creative-studio.jp/post-444/
    </script>
</body>

</html>