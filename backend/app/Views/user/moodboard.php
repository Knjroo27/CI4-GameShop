<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FordaGo | Mood Board</title>
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
      background: rgba(255, 255, 255, 0.1);
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
      padding: 60px 80px;
      display: flex;
      flex-direction: column;
      gap: 60px;
    }

    section {
      animation: fadeIn 1s ease-in;
    }

    h2 {
      font-size: 2em;
      margin-bottom: 20px;
      border-bottom: 2px solid rgba(255, 255, 255, 0.3);
      display: inline-block;
      padding-bottom: 5px;
    }

    /* Color palette */
    .colors {
      display: flex;
      gap: 20px;
    }
    .color {
      flex: 1;
      height: 100px;
      border-radius: 12px;
      text-align: center;
      line-height: 100px;
      font-weight: 600;
    }
    .c1 { background: #00c897; }
    .c2 { background: #0096c7; }
    .c3 { background: #0077b6; }
    .c4 { background: #48cae4; color: #003049; }
    .c5 { background: #90e0ef; color: #003049; }

    /* Typography */
    .typography {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .typography h1 { font-size: 2.5em; }
    .typography h3 { font-weight: 600; }

    /* Buttons */
    .buttons {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .btn-sample {
      padding: 12px 25px;
      border-radius: 12px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
    }
    .btn-primary { background: #00c897; color: white; }
    .btn-primary:hover { background: #0096c7; }
    .btn-outline {
      background: transparent;
      border: 2px solid white;
      color: white;
    }
    .btn-outline:hover { background: white; color: #0096c7; }

    /* Card samples */
    .card-showcase {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
    }
    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      border-radius: 20px;
      width: 220px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease, background 0.3s ease;
    }
    .card:hover { transform: translateY(-8px); background: rgba(255, 255, 255, 0.25); }
    .card img {
      width: 80px;
      height: 80px;
      margin-bottom: 15px;
      border-radius: 15px;
    }
    .card h3 { font-size: 1.1em; margin-bottom: 8px; }
    .card p { font-size: 0.9em; color: #eafff8; }

    footer {
      text-align: center;
      padding: 25px;
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(10px);
      color: #eafff8;
      font-size: 0.9em;
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
      <a href="roadmap">Roadmap</a>
    </div>
    <h1>FordaGo</h1>
    <nav>
      <a href="login">Sign In</a>
      <a href="signup">Sign Up</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>🎨 Brand Colors</h2>
      <div class="colors">
        <div class="color c1">#00C897</div>
        <div class="color c2">#0096C7</div>
        <div class="color c3">#0077B6</div>
        <div class="color c4">#48CAE4</div>
        <div class="color c5">#90E0EF</div>
      </div>
    </section>

    <section>
      <h2> Typography</h2>
      <div class="typography">
        <h1>FordaGo Headline Style</h1>
        <h3>Subheading Example — Clean and Confident</h3>
        <p>Body Text Example: FordaGo’s design combines modern gradients, rounded corners, and bright accents to emphasize a fresh, gamer-focused brand identity.</p>
      </div>
    </section>

    <section>
      <h2> Button Samples</h2>
      <div class="buttons">
        <button class="btn-sample btn-primary">Primary Button</button>
        <button class="btn-sample btn-outline">Outline Button</button>
        <button class="btn-sample btn-primary" style="background:#0096c7;">Alternate Accent</button>
      </div>
    </section>

    <section>
      <h2> Card Samples</h2>
      <div class="card-showcase">
        <div class="card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Steam_icon_logo.svg" alt="Steam">
          <h3>Steam Wallet</h3>
          <p>Simple, minimal, and gradient-backed design card.</p>
        </div>
        <div class="card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Google_Play_Arrow_logo.svg" alt="Google Play">
          <h3>Google Play</h3>
          <p>Consistent corner radius and visual balance.</p>
        </div>
        <div class="card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">
          <h3>Apple Gift Card</h3>
          <p>High-contrast layout with clean typography.</p>
        </div>
      </div>
    </section>
  </main>

  <footer>© 2025 FordaGo. All Rights Reserved.</footer>
</body>
</html>
