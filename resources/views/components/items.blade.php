

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquee Effect Example</title>
    <style>
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%; /* Adjust width if needed */
            background-color: #f0f0f0; /* Background color to enhance visibility */
            padding: 10px 0; /* Add padding for better spacing */
        }
        .marquee-text {
            display: inline-block;
            position: absolute;
            will-change: transform;
            animation: marquee 10s linear infinite;
        }
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <div class="marquee-container">
        <p class="marquee-text">Scorpions</p>
    </div>
</body>
</html>
