<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Leap Year Checker</title>
<style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(https://images.pexels.com/photos/413195/pexels-photo-413195.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2); 
    background-size: cover; 
    background-position: center; 
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    height: 45vh;
    width: 45vw;
    background-color: rgba(255, 255, 255, 0.2); 
    border-radius: 10px;
    box-shadow: 0  5px 8px rgba(255, 255, 255, 0.5); 
    padding: 20px;
    text-align: center;
    backdrop-filter: blur(2px); 

    h1 {
        margin-top: 0;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input[type="number"] {
        padding: 8px;
        font-size: 16px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .result {
        margin-top: 20px;
        font-size: 18px;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Leap Year Checker</h1>
        <form method="post">
            Enter a year: <input type="number" name="year" required>
            <br>
            <input type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $year = $_POST["year"];
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo "<div class='result'>$year is a leap year.</div>";
            } else {
                echo "<div class='result'>$year is not a leap year.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
