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
        <h1>Apple/Round Body Shape</h1>
        <img src="osug/round shape - intro.jpg" alt="Apple Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Apple Body Shape</h2>
        <p>The apple body shape typically has a fuller midsection, broader shoulders, and a less-defined waist. It’s important to balance your figure with strategic clothing choices.</p>

       <!-- Side by side tips and avoid sections -->
        <div class="tips-avoid-section">
            <div class="tips-box">
                <h2>Tips for Dressing this Body Shape</h2>
                <ul style="list-style-type:circle">
                     <li>Emphasize your bust and neckline with V-neck tops.</li>
                    <li>Wear empire waistlines to elongate your torso.</li>
                    <li>Choose A-line skirts and dresses that flow from the waist.</li>
                    <li>Opt for darker colors around the midsection to minimize focus.</li>
                    <li>Choose tailored jackets that nip in at the waist.</li>
		 </ul>    
	     </div>

            <div class="avoid-box">
                <h2>What to Avoid While Dressing this Body Shape</h2>
                <ul style="list-style-type:circle">
                    <li>Avoid overly tight clothing around the waist.</li>
                    <li>Steer clear of bulky fabrics that add volume to the midsection.</li>
                    <li>Avoid high-waisted pants that emphasize your midsection.</li>
                    <li>Stay away from shapeless or oversized clothing that hides your curves.</li>
                    <li>Avoid patterns that draw attention to the waist area.</li>
                </ul>
            </div>
        </div>

        <div class="gallery-container">
            <h2>Apple/Round Body Shape</h2>
            <button class="prev" onclick="changeImage('apple', -1)">&#10094;</button>
            <img id="appleImage" src="osug/Round shape - necklines.jpg" alt="Apple Body Image">
            <button class="next" onclick="changeImage('apple', 1)">&#10095;</button>
        </div>

        <script src="script.js"></script>

        <p><a href="mp_outfit.php">Go back to User Input Page</a></p>
    </div>
</body>
</html>
