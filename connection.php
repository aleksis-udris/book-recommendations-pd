<?php
    $server = "localhost";
    $user = "book_review_user_24092025";
    $pass = "password";
    $dab = "book_review_24092025";

    $conn = new mysqli($server, $user, $pass, $dab);

    if ($conn->connect_error) {
        die("Something Went Wrong :/ -> " . $conn->connect_error);
    }
?>