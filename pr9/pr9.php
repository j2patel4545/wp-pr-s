<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-9</title>
    <style>
       body {
    font-family: 'Cormorant', serif;
    margin: 0;
    padding: 0;
    background-image: url(https://images.pexels.com/photos/396547/pexels-photo-396547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container {
    max-width: 800px;
    margin: 60px auto;
    padding: 20px;
    background-color: black;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(255, 255, 255, 0.3);
    color: white;
}


        h1 {
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Content of the Text File</h1>
        <div class="content">
            <?php
            function readFileToArray($filename) {
                if (file_exists($filename)) {
                    $contentArray = file($filename, FILE_IGNORE_NEW_LINES);
                    return $contentArray;
                } else {
                    echo "Error: File '$filename' not found.";
                    return false;
                }
            }

            $filename = "practical9.txt"; 
            $contentArray = readFileToArray($filename);

            if ($contentArray !== false) {
                echo "<ul>";
                foreach ($contentArray as $line) {
                    echo "<li>" . htmlspecialchars($line) . "</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
</body>
</html>
