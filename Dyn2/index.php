<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>To-Do App</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Můj To-Do Seznam</h1>
    <form name="taskForm" action="add.php" method="POST" onsubmit="return validateForm()">
        <input type="text" name="task" placeholder="Zadej nový úkol">
        <button type="submit">Přidat úkol</button>
    </form>

    <ul>
    <?php
        include "db.php";
        $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['task']) .
                     " <a href='delete.php?id=" . $row['id'] . "'>🗑️</a></li>";
            }
        } else {
            echo "<li>Žádné úkoly zatím nejsou.</li>";
        }
    ?>
    </ul>
</body>
</html>
