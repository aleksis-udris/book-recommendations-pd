
<html>
    <body>
        <a href='/index.html'>Back</a>
        <?php
            require './connection.php';

            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $level = $_POST["level"];
            $title = $_POST["title"];
            $desc = $_POST["desc"]; 

            $command = "insert into book_review(full_name, book_title, review_text, rating) values ('" . $name . " " . $surname . "', '" . $title . "', '" . $desc . "', " . $level . ")";
    
            if ($conn->query($command) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $command . "<br>" . $conn->error;
            }
        ?>
    </body>
</html>
