<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt - FordaGo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0; padding: 0; box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #00c897, #0096c7);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #333;
        }
        .receipt {
            background: white;
            color: #333;
            padding: 35px 45px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            max-width: 440px;
            width: 90%;
            text-align: center;
            animation: fadeIn 0.8s ease-in;
        }
        .receipt h2 {
            margin-bottom: 20px;
            font-weight: 700;
            color: #00c897;
        }
        .receipt p {
            margin: 8px 0;
            font-size: 0.95em;
        }
        .highlight {
            font-weight: 600;
            color: #0096c7;
        }
        hr {
            margin: 18px 0;
            border: none;
            border-top: 1px solid rgba(0,0,0,0.1);
        }
        .btn {
            margin-top: 25px;
            padding: 10px 22px;
            background: #00c897;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: background 0.3s ease;
            display: inline-block;
        }
        .btn:hover {
            background: #0096c7;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<?php
$product = $_GET['product'] ?? 'Unknown Product';
$amount = $_GET['amount'] ?? '0';
$name = $_GET['name'] ?? 'N/A';
$email = $_GET['email'] ?? 'N/A';
$payment = $_GET['payment'] ?? 'N/A';
$address = $_GET['address'] ?? 'N/A';
$gcash = $_GET['gcash'] ?? 'N/A';

$orderID = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));
$date = date("F j, Y, g:i a");
?>

<div class="receipt">
    <h2>🧾 Payment Receipt</h2>
    <p><span class="highlight">Order ID:</span> <?= htmlspecialchars($orderID) ?></p>
    <p><span class="highlight">Date:</span> <?= htmlspecialchars($date) ?></p>
    <hr>
    <p><span class="highlight">Name:</span> <?= htmlspecialchars($name) ?></p>
    <p><span class="highlight">Email:</span> <?= htmlspecialchars($email) ?></p>
    <p><span class="highlight">Product:</span> <?= htmlspecialchars($product) ?></p>
    <p><span class="highlight">Amount:</span> ₱<?= htmlspecialchars($amount) ?></p>
    <p><span class="highlight">Payment Method:</span> <?= htmlspecialchars($payment) ?></p>

    <?php if ($payment === "GCash") : ?>
        <p><span class="highlight">GCash Number:</span> <?= htmlspecialchars($gcash) ?></p>
    <?php endif; ?>

    <?php if ($payment === "Cash on Delivery" || $payment === "GCash") : ?>
        <p><span class="highlight">Address:</span> <?= htmlspecialchars($address) ?></p>
    <?php endif; ?>

    <hr>
    <p>✅ Thank you for your purchase, <strong><?= htmlspecialchars($name) ?></strong>!<br>Your order is now being processed.</p>

    <a href="landing" class="btn">Back to Home</a>
</div>

</body>
</html>
