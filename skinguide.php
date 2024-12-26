<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Types</title>
    <link rel="stylesheet" href="style2.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        .section {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
        }
        ul {
            list-style-type: disc;
            margin: 10px 0;
        }
        .center-img {
            display: block;
            margin: 0 auto;
            max-width: 50%; /* Adjust the size as needed */
            height: auto; /* Maintain aspect ratio */
        }
        .skin-img {
            max-width: 60%;
            height: 180px;
            display: block;
            margin: 10px auto;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .skin-type {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
        }

    </style>
</head>
<body>

    <h1>Understanding Skin Types</h1>
    <img src="CURhux1bjpr1r1Rwgk1sh1kCQfigure-out-your-skin-type-once-and-for-all3.webp" alt="Skin Types Overview" class="center-img"> <!-- Center image -->

    <div class="section">
        <h2>1. Normal Skin</h2>
        <img src="normalskin.jpg" alt="Normal Skin" class="skin-img"> <!-- Image for Normal Skin -->
        <p>Normal skin is balanced, neither oily nor dry. It has a good moisture level and generally feels comfortable.</p>
        <ul>
            <li>Balanced oil production</li>
            <li>Few visible pores</li>
            <li>Rarely experiences breakouts</li>
        </ul>
    </div>

    <div class="section">
        <h2>2. Oily Skin</h2>
        <img src="oilyskin.jpg" alt="Oily Skin" class="skin-img"> <!-- Image for Oily Skin -->
        <p>Oily skin is characterized by excess oil production, which can lead to shine and enlarged pores.</p>
        <ul>
            <li>Shiny appearance, especially in the T-zone</li>
            <li>Prone to acne and blackheads</li>
            <li>Enlarged pores</li>
        </ul>
    </div>

    <div class="section">
        <h2>3. Dry Skin</h2>
        <img src="dryskin.jpg" alt="Dry Skin" class="skin-img"> <!-- Image for Dry Skin -->
        <p>Dry skin lacks moisture and can feel tight, rough, or flaky. It may also be more prone to irritation.</p>
        <ul>
            <li>Flaky or rough texture</li>
            <li>Itching or redness</li>
            <li>Fine lines may be more visible</li>
        </ul>
    </div>

    <div class="section">
        <h2>4. Combination Skin</h2>
        <img src="combinskin.webp" alt="Combination Skin" class="skin-img"> <!-- Image for Combination Skin -->
        <p>Combination skin exhibits characteristics of more than one skin type, often oily in some areas and dry in others.</p>
        <ul>
            <li>Oily T-zone (forehead, nose, chin)</li>
            <li>Dry or normal cheeks</li>
            <li>May require different products for different areas</li>
        </ul>
    </div>

    <div class="section">
        <h2>5. Sensitive Skin</h2>
        <img src="sensitiveskin.webp" alt="Sensitive Skin" class="skin-img"> <!-- Image for Sensitive Skin -->
        <p>Sensitive skin is prone to redness, irritation, and reactions to products. It requires gentle care.</p>
        <ul>
            <li>Reacts easily to products and environmental factors</li>
            <li>May experience redness or burning sensations</li>
            <li>Requires soothing and gentle products</li>
        </ul>
    </div>

    <div class="section">
        <h2>How To Determine Your Skin Type</h2>
        <p>There are two popular methods to help you figure out your skin type:</p>

        <h3>1. The Blotting Sheet Method</h3>
        <p>Take a sheet of blotting paper and gently pat it on your face. Hold it against a bright light:</p>
        <ul>
            <li>If you see little to no oil, you likely have dry skin.</li>
            <li>If the sheet picks up some oil from the T-zone, you have combination or normal skin.</li>
            <li>If it picks up oil from all parts of your face, you likely have oily skin.</li>
            <li>If you notice redness, irritation, or a stinging sensation, it may indicate sensitive skin. Sensitive skin might not necessarily produce more oil but can react to the pressure or material of the blotting sheet.</li>
        </ul>

        <h3>2. The Bare-Faced Method</h3>
        <p>Cleanse your skin with a mild cleanser and pat dry gently. Leave it bare (without applying any product) for half an hour:</p>
        <ul>
            <li>If your skin feels tight, you likely have dry skin.</li>
            <li>If it's shiny on the nose and forehead, you have combination skin.</li>
            <li>If your cheeks, nose, and forehead appear shiny, you likely have oily skin.</li>
            <li>If you experience any redness, itching, burning, or tightness, after cleansing and leaving your skin bare for an hour,  it may indicate sensitive skin. Sensitive skin often reacts to being left without any protective products.</li>
        </ul>
    </div>

    <a href="mp_skintypeinput.php" class="back-link">Go Back</a> <!-- Link to navigate back -->

</body>
</html>