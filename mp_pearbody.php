<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pear Body Shape</title>
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
            font-size: 16px; 
            line-height: 1.5;
            margin-left: 20px; 
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
        <h1>Pear Body Shape</h1>
        <img src="osug/Pear shape.jpg" alt="Pear Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Pear Body Shape</h2>
        <p>The pear body shape has a smaller upper body and wider hips. Drawing attention to the upper body can help balance the silhouette.</p>

       <!-- Side by side tips and avoid sections -->
       <div class="tips-avoid-section">
    <div class="tips-box">
        <h2>Tips for Dressing this Body Shape</h2>
        <ul style="list-style-type:circle">
            <li>Draw attention to your shoulders and bust with boat necklines, off-the-shoulder tops, or bold patterns on top.</li>
            <li>Wear dark, solid colors on the lower half to minimize the appearance of wider hips.</li>
            <li>Choose A-line or flared skirts that skim over your hips and balance your proportions.</li>
            <li>Opt for structured tops with a bit of volume around the shoulders to enhance your upper body.</li>
            <li>Use bold accessories like statement necklaces or earrings to draw the eye upward.</li>
        </ul>    
    </div>

    <div class="avoid-box">
        <h2>What to Avoid While Dressing this Body Shape</h2>
        <ul style="list-style-type:circle">
            <li>Avoid overly loose or baggy pants and skirts that add unnecessary bulk to your lower half.</li>
            <li>Avoid low-rise jeans or pants, which can make your hips look wider and shorten your legs.</li>
            <li>Steer clear of clingy or tight fabrics on your hips and thighs.</li>
            <li>Avoid bottoms with bold prints, horizontal stripes, or bright colors that draw attention to your lower half.</li>
            <li>Skip fabrics like corduroy or heavy denim that can make your hips and thighs appear larger.</li>
        </ul>
    </div>
</div>

        <div class="gallery-container">
            <h2>Pear Body Shape</h2>
            <button class="prev" onclick="changeImage('pear', -1)">&#10094;</button>
            <img id="pearImage" src="osug/Pear shape - necklines.jpg" alt="Pear Body Image">
            <button class="next" onclick="changeImage('pear', 1)">&#10095;</button>
        </div>

        <script src="script.js"></script>

        <p><a href="mp_outfit.php">Go back to User Input Page</a></p>
    </div>
</body>
</html>
