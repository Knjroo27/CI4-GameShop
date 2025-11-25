<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FordaGO | Sign Up</title>
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

    .signup-box {
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
  <div class="signup-box">
    <h2>Create Your Account</h2>
    <form id="signupForm">
      <input type="text" id="fullname" placeholder="Full Name" required>
      <input type="email" id="email" placeholder="Email Address" required>
      <input type="password" id="password" placeholder="Password" required>
      <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
      <button type="submit">Sign Up</button>
    </form>
    <div class="links">
      <p>Already have an account? <a href="login">Sign In</a></p>
      <a href="landing" class="back-btn">⬅ Back to FordaGO</a>
    </div>
  </div>

  <script>
    const signupForm = document.getElementById('signupForm');
    signupForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const fullName = document.getElementById('fullname').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
      }

      alert(`🎉 Welcome, ${fullName}! Your FordaGO account has been created.`);
      window.location.href = "login";
    });
  </script>
</body>
</html>
