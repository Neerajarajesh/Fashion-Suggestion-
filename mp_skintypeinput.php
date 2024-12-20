<?php
include'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Input</title>
    <link rel="stylesheet" href="styleoutfit.css">
</head>
<body>
    <div class="container">
        <h1>What's Your Skin Type?</h1>
       <form action="mp_skinguidelead.php" method="post">
            <label>
                <input type="radio" name="skinType" value="normal" required> Normal Skin
            </label><br>
            <label>
                <input type="radio" name="skinType" value="dry"> Dry Skin
            </label><br>
            <label>
                <input type="radio" name="skinType" value="oily"> Oily Skin
            </label><br>
            <label>
                <input type="radio" name="skinType" value="combination"> Combination Skin
            </label><br>
            <label>
                <input type="radio" name="skinType" value="sensitive"> Sensitive Skin
            </label><br><br>

            <input type="submit" value="Submit">
        </form>
        <p>If unsure, <a href="skinguide.php">click here</a> to identify your skin type.</p>
    </div>
</body>
</html>
