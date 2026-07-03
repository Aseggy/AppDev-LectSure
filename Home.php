
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kirk Sarmiento</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0b0b0b;
            font-family: Arial, sans-serif;
        }

        .card {
            padding: 30px 40px;
            text-align: center;
            border-radius: 20px;
            background-color: #111;
            border: 3px solid #ff7a00; /* neon orange border */
            box-shadow:
                0 0 12px rgba(255, 122, 0, 0.8),
                0 10px 25px rgba(0, 0, 0, 0.7); /* raised effect */
        }

        .card h1 {
            color: #ffffff;
            margin: 0 0 10px;
            font-size: 36px;
        }

        .card p {
            color: #f5f5f5;
            font-size: 18px;
            margin: 0;
        }

	a.button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #FDB913;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        a.button:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Kirk Sarmiento</h1>
        <p>I am a FEU Tech student studying web coding</p>

	<a class="button" href="Index.php">Index</a>
    </div>

</body>
</html>
