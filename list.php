<html>
    <body>
        <a href='./index.html'>Back</a>
        <ul>
        <?php
            require './connection.php';

            $command = "SELECT * FROM book_review";
            $res = $conn->query($command);

            if ($res->num_rows > 0) {

            while($row = $res->fetch_assoc()) {
                $rate;
                switch($row["rating"]) {
                    case 1:
                        $rate =  "nelasāma";
                        break;
                    case 2:
                        $rate = "slikta";
                        break;
                    case 3:
                        $rate = "viduvēja";
                        break;
                    case 4:
                        $rate = "laba";
                        break;
                    case 5:
                        $rate = "lieliska";
                        break;
                };

                echo " <li> id: " . $row["id"]. " - Pilnais Vārds: " . $row["full_name"]. " - Nosaukums: " . $row["book_title"];
                echo "- Vērtējums: " . $rate;
                echo "- Vērtējuma Teksts: " . $row["review_text"];
                echo "- Vērtējuma Laiks: " . $row["submitted_at"];
                echo "</li>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
        </ul>
    </body>
</html>