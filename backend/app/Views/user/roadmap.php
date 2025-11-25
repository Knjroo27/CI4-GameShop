<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FordaGo - Roadmap</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body {
      background: linear-gradient(135deg, #00c897, #0096c7);
      color: white;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 80px;
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(12px);
    }
    header .left-nav a {
      margin-right: 25px;
      text-decoration: none;
      color: #eafff8;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    header .left-nav a:hover { color: white; }
    header h1 { font-weight: 600; font-size: 1.8em; color: white; letter-spacing: 1px; }
    nav a {
      margin-left: 25px;
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    nav a:hover { color: #d9fff7; }

    main {
      flex: 1;
      padding: 50px 80px;
      animation: fadeIn 1s ease-in;
    }
    h2 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }
    p.subtitle {
      color: #eafff8;
      margin-bottom: 40px;
    }

    .roadmap-section {
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 25px;
      margin-bottom: 25px;
      transition: transform 0.3s ease, background 0.3s ease;
    }
    .roadmap-section:hover {
      background: rgba(255,255,255,0.25);
      transform: translateY(-3px);
    }
    .roadmap-section h3 {
      font-size: 1.3em;
      margin-bottom: 8px;
      color: white;
    }
    .roadmap-section p {
      font-size: 0.95em;
      color: #eafff8;
      margin-bottom: 10px;
    }
    .priority { font-size: 0.85em; opacity: 0.8; }

    .status {
      float: right;
      padding: 5px 12px;
      border-radius: 10px;
      font-size: 0.8em;
      font-weight: 600;
    }
    .inprogress { background: #2ecc71; color: white; }
    .planned { background: #3498db; color: white; }
    .backlog { background: #7f8c8d; color: white; }
    .done { background: #16a085; color: white; }

    footer {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 30px 80px;
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(10px);
      color: #eafff8;
      animation: fadeIn 1s ease-in;
    }
    footer div { flex: 1; min-width: 200px; margin-bottom: 15px; }
    footer h4 { margin-bottom: 10px; color: white; }
    footer ul { list-style: none; }
    footer ul li { margin-bottom: 5px; }
    footer ul li a {
      text-decoration: none;
      color: #eafff8;
      font-size: 0.9em;
      transition: color 0.3s;
    }
    footer ul li a:hover { color: white; }
    footer p {
      text-align: center;
      width: 100%;
      font-size: 0.9em;
      margin-top: 10px;
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 10px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<header>
  <div class="left-nav">
    <a href="landing">Home</a>
    <a href="moodboard">Mood Board</a>
  </div>
  <h1>FordaGo</h1>
  <nav>
    <a href="login">Sign In</a>
    <a href="signup">Sign Up</a>
  </nav>
</header>

<main>
  <h2>Roadmap</h2>
  <p class="subtitle">High-level plan and status for upcoming FordaGo features.</p>

  <div class="roadmap-section">
    <h3>Payment Integration (GCash & COD)
      <span class="status inprogress">In Progress</span>
    </h3>
    <p>Allow users to pay instantly or on delivery for gift cards.</p>
    <p class="priority"><strong>Priority:</strong> High</p>
  </div>

  <div class="roadmap-section">
    <h3>User Authentication System (Login / Signup)
      <span class="status planned">Planned</span>
    </h3>
    <p>Secure accounts with password hashing and session tokens.</p>
    <p class="priority"><strong>Priority:</strong> High</p>
  </div>

  <div class="roadmap-section">
    <h3>Dynamic Receipt Page
      <span class="status planned">Planned</span>
    </h3>
    <p>Generate digital receipts for each purchase with unique order IDs.</p>
    <p class="priority"><strong>Priority:</strong> High</p>
  </div>

  <div class="roadmap-section">
    <h3>Admin Dashboard
      <span class="status planned">Planned</span>
    </h3>
    <p>Admins can view, approve, or cancel user transactions.</p>
    <p class="priority"><strong>Priority:</strong> Medium</p>
  </div>

  <div class="roadmap-section">
    <h3>Promo & Reward System
      <span class="status planned">Planned</span>
    </h3>
    <p>Gamified points, seasonal promos, and referral codes.</p>
    <p class="priority"><strong>Priority:</strong> Medium</p>
  </div>

  <div class="roadmap-section">
    <h3>Email Verification
      <span class="status planned">Planned</span>
    </h3>
    <p>Send confirmation and updates to registered users.</p>
    <p class="priority"><strong>Priority:</strong> Medium</p>
  </div>

  <div class="roadmap-section">
    <h3>Customer Feedback & Support Chat
      <span class="status planned">Planned</span>
    </h3>
    <p>Allow users to submit feedback or get live assistance.</p>
    <p class="priority"><strong>Priority:</strong> Low</p>
  </div>

  <div class="roadmap-section">
    <h3>User Order History Page
      <span class="status backlog">Backlog</span>
    </h3>
    <p>Show list of past purchases and downloadable receipts.</p>
    <p class="priority"><strong>Priority:</strong> Low</p>
  </div>

  <div class="roadmap-section">
    <h3>Gift Card Expansion
      <span class="status backlog">Backlog</span>
    </h3>
    <p>Add more platforms like Roblox, Garena, and Riot Games.</p>
    <p class="priority"><strong>Priority:</strong> Low</p>
  </div>

  <div class="roadmap-section">
    <h3>Landing Page + Mood Board
      <span class="status done">Done</span>
    </h3>
    <p>Core UI design and brand identity setup completed.</p>
    <p class="priority"><strong>Priority:</strong> High</p>
  </div>
</main>

<?= view('components/footer') ?>

</body>
</html>
