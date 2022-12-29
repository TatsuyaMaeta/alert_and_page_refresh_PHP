<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>JSalert_and_page_refresh</h2>

    <form action="insert.php" method="post">
        <label for="name">名前：
            <input type="text" name="name" id="name">
        </label>
        <br>
        <label for="dat">
            日付：<input type="date" name="date" id="dat">
        </label>
        <br>
        <label for="tel">
            電話：<input type="tel" name="tel" id="tel">
        </label>
        <button type="submit">送信</button>
    </form>
</body>

</html>