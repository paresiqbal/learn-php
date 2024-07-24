<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Result</h3>
    <?php
    if (empty($results)) {
        echo "No results found.";
    } else {
        foreach ($results as $row) {
            echo "<div>";
            echo htmlspecialchars($row["username"]);
            echo htmlspecialchars($row["comment_text"]);
            echo htmlspecialchars($row["created_at"]);
            echo "</div>";
        }
    }
    ?>
</body>

</html>