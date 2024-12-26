<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Body Shape</title>
    <link rel="stylesheet" href="styleoutfit.css">
    <style>
        .container {
            max-width: 900px;
            margin: auto;
        }
        .tips-avoid-section {
            display: flex;
            justify-content: space-between;
        }
        .tips-box, .avoid-box {
            width: 48%;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .tips-box ul, .avoid-box ul {
            font-size: 16px; /* Reduced font size for the list items */
            line-height: 1.5; /* Added line height for better readability */
            margin-left: 20px; /* Adjust left margin to prevent bullets from touching the border */
        }
        .gallery-container {
            text-align: center;
            margin: 20px 0;
            position: relative; /* Ensures the arrows are placed inside this container */
        }
        .gallery-container img {
            max-width: 400px;
            width: 100%;
        }
        .prev, .next {
            cursor: pointer;
            font-size: 30px; /* Increased the size of arrows for better visibility */
            padding: 10px;
            background-color: #ccc;
            border: none;
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            z-index: 10; /* Ensures the arrows stay on top of the image */
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .description {
            margin-top: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rectangle Body Shape</h1>
        <img src="osug/Rectangle shape.jpg" alt="Rectangle Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Rectangle Body Shape</h2>
        <p>The rectangular body shape is characterized by a straight silhouette with minimal waist definition. Creating curves with clothing is key.</p>

        <!-- Side by side tips and avoid sections -->
        <div class="tips-avoid-section">
    <div class="tips-box">
        <h2>Tips for Dressing this Body Shape</h2>
        <ul style="list-style-type:circle">
            <li>Use belts or waist-cinching styles to add definition to your waistline.</li>
            <li>Wear peplum tops and dresses that add volume to your hips.</li>
            <li>Use layers, such as a fitted jacket over a dress, to break up your straight silhouette.</li>
            <li>Opt for structured blazers or tops that create a more contoured look.</li>
            <li>Wear tops with ruffles, patterns, or embellishments to add interest and volume to the bust or hips.</li>
        </ul>    
    </div>

    <div class="avoid-box">
        <h2>What to Avoid While Dressing this Body Shape</h2>
        <ul style="list-style-type:circle">
            <li>Avoid shapeless or boxy clothing that can make you appear more rectangular.</li>
            <li>Stay away from straight-cut dresses or skirts that do not add curves.</li>
            <li>Skip fabrics that are too stiff or thick, as they can make your frame appear bulky.</li>
            <li>Avoid low-waisted pants that can elongate your torso and reduce the illusion of curves.</li>
            <li>Avoid high-neck tops that minimize your bust and emphasize a rectangular shape.</li>
        </ul>
    </div>
</div>
        <div class="gallery-container">
            <h2>Rectangle Body Shape</h2>
            <button class="prev" onclick="changeImage('rectangle', -1)">&#10094;</button>
            <img id="rectangleImage" src="osug/Rectangle shape - necklines.jpg" alt="Rectangle Body Image">
            <button class="next" onclick="changeImage('rectangle', 1)">&#10095;</button>
        </div>

        <script src="script.js"></script>

        <p><a href="mp_outfit.php">Go back</a></p>
    </div>
</body>
</html>