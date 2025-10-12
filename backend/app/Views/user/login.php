<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FordaGO | Sign In</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: linear-gradient(120deg, #00b894, #0984e3);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #fff;
      opacity: 0;
      animation: fadeIn 1s ease forwards;
    }

    @keyframes fadeIn {
      to { opacity: 1; }
    }

    .login-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 15px;
      width: 350px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    h2 {
      margin-bottom: 20px;
      color: #dfe6e9;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 8px;
      font-size: 1em;
    }

    button {
      width: 100%;
      background: #00cec9;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #0984e3;
    }

    .links {
      margin-top: 10px;
    }

    a {
      color: #81ecec;
      text-decoration: none;
      font-size: 0.9em;
    }

    a:hover {
      text-decoration: underline;
    }

    .back-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 20px;
      border-radius: 50px;
      background: #00cec9;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
      box-shadow: 0 0 10px rgba(0,206,201,0.6);
    }

    .back-btn:hover {
      background: #0984e3;
      box-shadow: 0 0 20px rgba(9,132,227,0.8);
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Welcome Back!</h2>
    <form>
      <input type="text" placeholder="Email or Username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Sign In</button>
    </form>
    <div class="links">
      <p>Don’t have an account? <a href="signup">Sign Up</a></p>
      <a href="landing" class="back-btn">⬅ Back to FordaGO</a>
    </div>
  </div>
</body>
</html>
