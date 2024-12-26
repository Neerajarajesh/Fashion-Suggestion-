<?php

include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hourglass Body Shape</title>
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
        <h1>Hourglass Body Shape</h1>
        <img src="osug/hourglass shape.jpg" alt="Hourglass Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Hourglass Body Shape</h2>
        <p>The hourglass body shape is characterized by a well-defined waist with balanced bust and hip measurements. This shape is often considered the ideal feminine figure and can be accentuated by the right clothing choices.</p>

        <!-- Side by side tips and avoid sections -->
        <div class="tips-avoid-section">
            <div class="tips-box">
                <h2>Tips for Dressing this Body Shape</h2>
                <ul style="list-style-type:circle">
                    <li>Emphasize your waist with belts or fitted dresses.</li>
                    <li>Choose tops that define your bust and highlight your curves.</li>
                    <li>Wear high-waisted skirts or pants to enhance your silhouette.</li>
                    <li>Opt for A-line skirts that flow from the waist down.</li>
                    <li>Choose structured blazers to enhance your shape.</li>
                </ul>
            </div>

            <div class="avoid-box">
                <h2>What to Avoid While Dressing this Body Shape</h2>
                <ul style="list-style-type:circle">
                    <li>Avoid oversized or baggy clothing that hides your figure.</li>
                    <li>Steer clear of straight-cut dresses that do not define the waist.</li>
                    <li>Avoid low-rise pants that can create an unflattering silhouette.</li>
                    <li>Don't wear shapeless tops that do not accentuate your curves.</li>
                    <li>Refrain from heavy fabrics that add bulk to your frame.</li>
                </ul>
            </div>
        </div>

        <div class="gallery-container">
            <h2>Hourglass Body Shape</h2>
            <button class="prev" onclick="changeImage('hourglass', -1)">&#10094;</button>
            <img id="hourglassImage" src="osug/Hourglass shape - necklines.jpg" alt="Hourglass Body Image">
            <button class="next" onclick="changeImage('hourglass', 1)">&#10095;</button>
        </div>

        <script src="script.js"></script>

        <p><a href="mp_outfit.php">Go back</a></p>
    </div>
</body>
</html>
