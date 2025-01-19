<?php
session_start();

include('connect.php');

// POST 데이터가 존재하는지 확인
if (isset($_POST['name'], $_POST['email'], $_POST['content'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $content = trim($_POST['content']);

    $q = "INSERT INTO ask(name, email, content) VALUES(:name, :email, :content)";
    $stmt = $pdo->prepare($q);

    // 데이터베이스 쿼리 실행
    $result = $stmt->execute([':name' => $name, ':email' => $email, ':content' => $content]);

    if ($result) {
        $_SESSION['insert_success'] = true;
    } else {
        $_SESSION['insert_failure'] = true;
    }
} else {
    // 필수 필드가 누락된 경우
    $_SESSION['insert_failure'] = true;
}

//header('location: index.php?asked=1');
header('location: index.php');
?>

