<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top-Up Landing Page</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #43cea2, #185a9d); /* Greenish gradient */
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 100vh;
    }
    h1 {
      font-size: 2.8rem;
      margin-bottom: 15px;
    }
    p {
      font-size: 1.2rem;
      max-width: 600px;
      margin-bottom: 30px;
      color: #f0f0f0;
    }
    .btn {
      padding: 14px 30px;
      font-size: 1.1rem;
      border: none;
      border-radius: 30px;
      background-color: #fff;
      color: #2ecc71; /* Green button text */
      cursor: pointer;
      transition: 0.3s;
      text-decoration: none;
    }
    .btn:hover {
      background-color: #2ecc71;
      color: #fff;
    }
    .features {
      display: flex;
      gap: 20px;
      margin-top: 40px;
      flex-wrap: wrap;
      justify-content: center;
    }
    .feature-box {
      background: rgba(255,255,255,0.1);
      padding: 20px;
      border-radius: 15px;
      width: 200px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.15);
    }
    .feature-box h3 {
      margin-bottom: 10px;
      font-size: 1.2rem;
      color: #d1ffd6;
    }
    .feature-box p {
      font-size: 0.9rem;
      color: #eaffea;
    }
  </style>
</head>
<body>
  <h1>Welcome to Game Top-Up</h1>
  <p>Fast, secure, and easy credits for Mobile Legends, Steam Wallet, Valorant, and more.  
  Get started now and power up your game instantly.</p>
  
  <a href="topup.html" class="btn">Start Top-Up</a>

  <div class="features">
    <div class="feature-box">
      <h3>⚡ Instant Delivery</h3>
      <p>Your credits arrive seconds after payment.</p>
    </div>
    <div class="feature-box">
      <h3>🔒 Secure Payment</h3>
      <p>Trusted e-wallets and banking options.</p>
    </div>
    <div class="feature-box">
      <h3>🎮 Wide Game Support</h3>
      <p>Top-up for MLBB, Steam, Valorant, and more.</p>
    </div>
    <div class="feature-box">
      <h3>💎 Exclusive Deals</h3>
      <p>Enjoy promos and cashback rewards.</p>
    </div>
  </div>
</body>
</html>
