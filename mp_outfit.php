<?php
include 'top_menu.php'; // Including the top menu
include 'mp_connect.php'; 

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bodyType = trim($_POST['bodyType']);

    $normalizedBodyType = strtolower($bodyType);
    
    // Prepare the SQL query to fetch the OutfitLink based on the body type
    $stmt = $conn->prepare("SELECT OutfitLink FROM outfit WHERE BodyType = ?");
    $stmt->bind_param("s", $normalizedBodyType); // Bind the normalized body type to the query
    $stmt->execute();
    $stmt->bind_result($outfitLink);
    $stmt->store_result();

    if (isset($_SESSION['name'])) { 
        $id = $_SESSION['userid'];
        $stmt->fetch();
        // Insert the user data into the database
        $sql = "UPDATE profile SET outfit_url='$outfitLink' WHERE id='$id'";
        $conn->query($sql);
    }

    if ($stmt->num_rows > 0) {
        $stmt->fetch(); 
        header("Location: $outfitLink"); // Redirect to the fetched link
        exit();
    } else {
        // If no match is found in the database
        $message = "Invalid body type. Please enter a valid option from: Hour Glass, Inverted Triangle, Apple, Rectangle, Pear Shaped.";
    }

    $stmt->close(); // Close the statement
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfit Suggestions</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        
        .container {
            margin-top: 50px;
            max-width: 700px;
        }

        h2 {
            font-weight: 600;
            color: #007bff;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-block {
            padding: 10px;
            font-size: 18px;
            border-radius: 10px;
        }

        .quiz-section {
            display: none; /* Initially hidden */
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .quiz-section h5 {
            margin-bottom: 15px;
            color: #555;
        }

        .quiz-section .form-group {
            margin-bottom: 15px;
        }

        #quizResult {
            display: none;
            margin-top: 20px;
            padding: 10px;
            font-size: 18px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            border-radius: 8px;
        }

        /* Tooltip styling for better UX */
        .form-group label button {
            background: none;
            border: none;
            color: #007bff;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .form-group label button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <main class="container">
        <h2>Outfit Suggestions</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="bodyType">Enter Your Body Type:</label>
                <input type="text" id="bodyType" name="bodyType" placeholder="Hour Glass, Inverted Triangle, Apple, Rectangle, Pear Shaped" required class="form-control">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary btn-block">
        </form>
        <?php
        // Display the warning message if it exists
        if (!empty($message)) {
            echo "<p style='color:red;'>$message</p>";
        }
        ?>
        <div id="links">
            <p>If you do not know your body type, you can <a href="mp_bodytypecalculator.php">calculate it here</a>.</p>
        </div>
    </main>
</body>
</html>