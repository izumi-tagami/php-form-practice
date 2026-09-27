<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>ユーザー登録</title>
    <style>
        label {
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>ユーザー登録（1/3）入力</h1>
<form action = "confirm.php" method = "post">
<label for="name">お名前: 
    <input type="text" id="name" name="name">
</label>
<br>
<label for="email">メールアドレス: 
    <input type="text" id="email" name="email">
</label>
<br>
<label for="age">年齢: 
    <input type="text" id="age" name="age">
</label>
<br>
<button type="submit">確認画面へ</button>
</form>
</body>
</html>