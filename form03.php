<?php
    echo "<pre>";
    //$_POSTはスーパーグローバル変数
    //最初から用意されていて、どこからでも参照可能な変数
    //フォームのpostで送られてきたものがこの中に入る
    //連想配列の形式で保存される
    var_dump($_POST);
    echo "</pre>";
    //エラー文書を出すための配列を宣言
    $errors =array();
    //送信ボタンが押されたら(送信ボタンを押すと$_POST["submit"]に値が入る)
    //値がある場合にのみ実行させる
    if(isset($_POST["submit"])){
        //変数nameに$_POSTの連想配列の"name"の値を取得
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $body = $_POST["body"];
        if($name ===""){
            $errors["name"] = "お名前が入力されていません";
        }
        if($email ===""){
            $errors["email"] = "emailが入力されていません";
        }
        if($subject ===""){
            $errors["subject"] = "お問い合わせの種類が入力されていません";
        }
        if($body ===""){
            $errors["body"] = "お問い合わせ内容が入力されていません";
        }
        echo "<pre>";
        var_dump($errors);
        echo "</pre>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>お問い合わせ</title>
    </head>
    <body>
        <!--自分自身(form02.php)にフォームの内容をpostしてる-->
        <form action="form03.php" method = "post">
            <table>
                <tr>
                    <th>お名前</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                    <select name="subject">
                        <option value="お仕事に対するお問い合わせ">
                            お仕事に対するお問い合わせ
                        </option>
                        <option value="その他のお問い合わせ">
                            その他のお問い合わせ
                        </option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><textarea name="body" cols="40" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td colspan = "2"><input type="submit" name="submit" value="確認画面へ"></td>
                </tr>
            </table>
        </form>
    </body>
</html>