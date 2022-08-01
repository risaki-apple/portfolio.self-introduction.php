<?php
if($_SERVER["REQUEST_METHOD"] != "POST") {
    // ブラウザからページを要求された場合
    header('Location: php/index.php');
}
?>