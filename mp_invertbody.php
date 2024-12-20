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
        <h1>Inverted Triangle Body Shape</h1>
        <img src="osug/Inverted triangle.jpg" alt="InvTri Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Inverted Triangle Body Shape</h2>
        <p>The inverted triangle body shape features broader shoulders and a narrower waist and hips. Balancing the upper and lower body is key.</p>

        <!-- Side by side tips and avoid sections -->
       <div class="tips-avoid-section">
    <div class="tips-box">
        <h2>Tips for Dressing this Body Shape</h2>
        <ul style="list-style-type:circle">
            <li>Opt for A-line skirts or wide-legged pants to add volume to your lower body and balance your silhouette.</li>
            <li>Wear V-necklines to draw attention downward and create a longer, leaner look.</li>
            <li>Choose skirts or pants with patterns, pleats, or embellishments to add interest and volume to your hips.</li>
            <li>Wear dark colors on top to minimize your shoulders, while brighter colors or prints on the bottom add balance.</li>
            <li>Use flowy skirts that flare out to create symmetry with your broader shoulders.</li>
        </ul>    
    </div>

    <div class="avoid-box">
        <h2>What to Avoid While Dressing this Body Shape</h2>
        <ul style="list-style-type:circle">
            <li>Stay away from tops or jackets with shoulder pads or puffed sleeves, as they will further broaden your upper body.</li>
            <li>Avoid boat neck tops and other wide necklines that make your shoulders appear broader.</li>
            <li>Skip skinny jeans or straight-leg pants that accentuate your broader shoulders without balancing the lower half.</li>
            <li>Avoid tight tops that highlight your shoulders.</li>
            <li>Avoid delicate, narrow straps like spaghetti straps that don’t provide enough balance to your figure.</li>
        </ul>
    </div>
</div>

        <div class="gallery-container">
            <h2>Hourglass Body Shape</h2>
            <button class="prev" onclick="changeImage('inverted', -1)">&#10094;</button>
            <img id="invertedImage" src="osug/Inverted triangle shape - necklines.jpg" alt="Inverted Body Image">
            <button class="next" onclick="changeImage('inverted', 1)">&#10095;</button>
        </div>

        <script src="script.js"></script>

        <p><a href="mp_outfit.php">Go back to User Input Page</a></p>
    </div>
</body>
</html>
