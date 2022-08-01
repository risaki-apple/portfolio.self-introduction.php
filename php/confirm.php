<?php
if($_SERVER["REQUEST_METHOD"] != "POST") {
    // ブラウザからHTMLページを要求された場合
    header('Location: ../index.php');
}

$name = trim($_POST['contactName']);
$email = trim($_POST['email']);
$tell = trim($_POST['tell']);
$comments = trim($_POST['comments']);

if(isset($_POST['confirm_submitted']) && $_POST['confirm_submitted']) {
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    //自分宛
    $emailTo = "risa.apple.17@gmail.com";
    $emailFrom = "risakiapple@sv1.php.xdomain.ne.jp";
    $subject = "ポートフォリオへのお問い合わせ";
    $body = "
下記の通りお問い合わせを受け付けました。 \r\n
\r\n
------------------------------------------------------\r\n
お名前: $name \r\n
メールアドレス: $email \r\n
電話番号: $tell \r\n
お問い合わせ内容: $comments \r\n
------------------------------------------------------
";
    $title = "[渡辺里咲]ポートフォリオ";
    $from = mb_encode_mimeheader("$title","UTF-8");
    $header = "From: " .$from ."<$emailFrom>";
    mb_send_mail($emailTo, $subject, $body, $header);

    //自動返信用
    $subject = 'お問い合わせ受付のお知らせ';
    $body = "
$name 様 \r\n
$title へのお問い合わせありがとうございます。\r\n
内容を確認次第、折り返しご連絡させていただきますので、今しばらくお待ちください。\r\n
\r\n
------------------------------------------------------\r\n
お名前：$name \r\n
メールアドレス：$email \r\n
電話番号：$tell \r\n
お問い合わせ内容：$comments \r\n
------------------------------------------------------
";
    $header2 = "From: " .$from ."<$emailTo>";
    mb_send_mail($email, $subject, $body, $header2);
    $emailSent = true;

    if(isset($emailSent) && $emailSent == true) {
        header('Location: php/thanks.php');
    }

}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="icon" href="../favicon.ico">
    <link rel="apple-touch-ico" href="../apple-touch-icon.png" sizes="180x180">
</head>
<body>
    <!-- 入力内容確認画面 -->
    <div class="container">
        <form action="" method="POST">
            <p class="contact_confirm">入力内容確認</p>
            <div class="Form ">
                <div class="Form-Item confirm">
                    <p class="Form-Item-Label">お名前</p>
                    <input type="text" name="contactName" class="Form-Item-Input" value="<?php echo $name; ?>" />
                </div>
                <div class="Form-Item confirm">
                    <p class="Form-Item-Label">メールアドレス</p>
                    <input type="text" name="email" class="Form-Item-Input" value="<?php echo $email; ?>" />
                </div>
                <div class="Form-Item confirm">
                    <p class="Form-Item-Label">電話番号</p>
                    <input type="tell" name="tell" class="Form-Item-Input" value="<?php if(isset($tell)) echo $tell;?>" /> 
                </div>
                <div class="Form-Item confirm">
                    <p class="Form-Item-Label isMsg">お問い合わせ内容</p>
                    <textarea name="comments" class="Form-Item-Textarea"><?php echo $comments; ?></textarea>
                </div>
            </div>
            <div class="confirm_button">
                <button class="confirm_back_button" type="button" onclick="history.back()">戻る</button>
                <div>
                    <input type="hidden" name="confirm_submitted" value="true" />
                    <button class="confirm_submit_button" type="submit">送信する</button>
                </div>    
            </div>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
