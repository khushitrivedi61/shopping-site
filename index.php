
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 900px;
            margin: 50px auto;
            padding: 0 15px;
        }

        .box {
            background-color: white;
            height: 120px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
            transition: 0.3s;
        }

        .box:hover {
            background-color: #4CAF50;
            color: white;
            transform: scale(1.05);
        }

        /* Responsive for small screens */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 500px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        🛒 Welcome to Our Shopping Zone
    </div>

    <div class="container">
        <a class="box" href="jewelry.php">Aesthetic Jewelry</a>
        <a class="box" href="cloth.php">Clothes</a>
        <a class="box" href="shoes.php">Shoes</a>
        <a class="box" href="babycloth.php">Baby Clothes</a>
        <a class="box" href="toy.php">Toys</a>
        <a class="box" href="other.php">Other Things</a>
    </div>

</body>
</html>
