<?php
include 'mp_connect.php';
include 'top_menu.php';
$skinType = 'normal';

$query = "SELECT * FROM SkinType WHERE SkinType = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $skinType);
$stmt->execute();
$result = $stmt->get_result();
$skinData = $result->fetch_assoc();

// Hardcoded causes and tips for normal skin
/* $causes = "Hormonal changes, genetics, humidity, and certain products can contribute to oily skin.";  */
$tips = "To maintain normal skin: <br><ul >
    <li>    <b> (1) </b> Stay hydrated to prevent dryness and excess sebum production.</li>
    <li>    <b> (2) </b> Wear sunscreen to protect from sun damage and wrinkles; use oil-free formulas to avoid clogging pores.</li>
    <li>    <b> (3) </b> Moisturize regularly to keep skin balanced and prevent sebum overproduction.</li>
    <li>    <b> (4) </b> Remove makeup before bed to avoid clogged pores and breakouts.</li>
    <li>    <b> (5) </b> Cleanse your face nightly, even without makeup, to remove dirt and bacteria that can block pores.</li>
</ul>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normal Skin Care</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Normal Skin Care</h1>
        <p><?php echo $skinData['Description']; ?></p>
        <h2>Tips</h2>
        <p><?php echo $tips; ?></p>
        <h2>Routine</h2>
        <div class="routine-container" style="text-align: center; margin-top: 20px;">
	<img src="<?php echo $skinData['RoutineIMG']; ?>" alt="AM/PM Routine" class="routine-img">
        <div class="routine-info" style="max-width: 700px; margin: auto; text-align: left;">
        <h3>Skincare Routine for Normal Skin</h3>
        <ul style="list-style-type:circle; padding-left: 20px; line-height: 1.6;">
            <li><strong>Cleanser:</strong> Use a hydrating cleanser to remove dirt, oil, makeup, and dead skin cells.</li>
            <li><strong>Exfoliating toner:</strong> Use a toner with glycolic acid or another exfoliating acid to smooth skin texture, brighten skin, and even out skin tone.</li>
            <li><strong>Vitamin C:</strong> Use vitamin C to stimulate collagen production and brighten skin.</li>
            <li><strong>Moisturizer:</strong> Use a hydrating moisturizer to repair the skin barrier and hold in water.</li>
            <li><strong>Sunscreen:</strong> Use sunscreen with at least SPF 30 to protect your skin from UV damage.</li>
        </ul>

        <h3>Additional Tips for Healthy Skin:</h3>
        <p>To keep your skin healthy:</p>
        <ul style="list-style-type:disc; padding-left: 20px; line-height: 1.6;">
            <li>Treat your skin gently.</li>
            <li>Eat a healthy diet.</li>
            <li>Manage stress.</li>
            <li>Avoid smoking/alcohol consumption.</li>
        </ul>
    </div>
</div>

	<p>Follow these steps for a healthy routine.</p>
<h2>Recommended Products</h2>
<div class="products-container" style="max-width: 900px; margin: auto; text-align: left;">

    <h2>Cleanser</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/cleanser1_ns.jpg" alt="Cleanser Brand 1" style="max-width: 100%; height: auto;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/cleanser2_ns.jpg" alt="Cleanser Brand 2" style="max-width: 100%; height: auto;">
        </div>
        <!-- Product 3 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/cleanser3_ns.jpg" alt="Cleanser Brand 3" style="max-width: 100%; height: auto;">
        </div>
    </div>
    
    <h2>Serum</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/serum1_ns.jpg" alt="Cleanser Brand 1" style="max-width: 100%; height: auto;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/serum2_ns.jpg" alt="Cleanser Brand 2" style="max-width: 100%; height: auto;">
        </div>
        
    </div>
    
    <h2>Sunscreen</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen1_ns.jpg" alt="Sunscreen Brand 1" style="max-width: 100%; height: auto;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen2_ns.jpg" alt="Sunscreen Brand 2" style="max-width: 100%; height: auto;">
     </div>
 
</div>

	<script>
    function goBack() {
        window.history.back();
    }
</script>
        <button onclick="goBack()">Go Back</button>
    </div>
    <script src="script.js"></script>
</body>
</html>