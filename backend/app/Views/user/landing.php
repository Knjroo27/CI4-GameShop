<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FordaGo - Game Credit Hub</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: linear-gradient(135deg, #00c897, #0096c7); color: white; min-height: 100vh; display: flex; flex-direction: column; }
    header { display: flex; justify-content: space-between; align-items: center; padding: 20px 80px; background: rgba(255,255,255,0.1); backdrop-filter: blur(12px); }
    header .left-nav a { margin-right: 25px; text-decoration: none; color: #eafff8; font-weight: 500; transition: color 0.3s ease; }
    header .left-nav a:hover { color: white; }
    header h1 { font-weight: 600; font-size: 1.8em; color: white; letter-spacing: 1px; }
    nav a { margin-left: 25px; text-decoration: none; color: white; font-weight: 500; transition: color 0.3s ease; }
    nav a:hover { color: #d9fff7; }

    .hero { flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px; animation: fadeIn 1s ease-in; }
    .hero h2 { font-size: 3em; font-weight: 700; margin-bottom: 15px; }
    .hero p { font-size: 1.2em; max-width: 600px; color: #eafff8; }

    .hero-buttons { margin-top: 30px; display: flex; gap: 20px; }
    .hero-buttons button {
      background: white; 
      color: #0096c7;
      font-weight: 600;
      border: none;
      padding: 12px 25px;
      border-radius: 12px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .hero-buttons button:hover {
      background: #00c897;
      color: white;
      transform: translateY(-3px);
    }

    /* Product Grid */
    .product-list {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      justify-items: center;
      margin: 60px auto;
      max-width: 1000px;
      animation: fadeIn 1s ease-in;
    }

    .product {
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(8px);
      border-radius: 20px;
      width: 280px;
      padding: 30px;
      text-align: center;
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .product:hover {
      transform: translateY(-8px);
      background: rgba(255,255,255,0.25);
    }

    .product img {
      width: 100px;
      height: 100px;
      margin-bottom: 15px;
      border-radius: 15px;
    }

    .product h3 {
      font-size: 1.2em;
      margin-bottom: 12px;
    }

    .product button {
      background: #00c897;
      border: none;
      padding: 12px 22px;
      color: white;
      border-radius: 10px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .product button:hover {
      background: #0096c7;
    }

    footer { display: flex; justify-content: space-between; flex-wrap: wrap; padding: 30px 80px; background: rgba(255,255,255,0.08); backdrop-filter: blur(10px); color: #eafff8; animation: fadeIn 1s ease-in; }
    footer div { flex: 1; min-width: 200px; margin-bottom: 15px; }
    footer h4 { margin-bottom: 10px; color: white; }
    footer ul { list-style: none; }
    footer ul li { margin-bottom: 5px; }
    footer ul li a { text-decoration: none; color: #eafff8; font-size: 0.9em; transition: color 0.3s; }
    footer ul li a:hover { color: white; }
    footer p { text-align: center; width: 100%; font-size: 0.9em; margin-top: 10px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 10px; }

    .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); justify-content: center; align-items: center; z-index: 10; }
    .modal-content { background: white; color: black; padding: 25px; border-radius: 15px; width: 320px; text-align: left; }
    .modal-content h3 { text-align: center; margin-bottom: 15px; }
    .modal-content label { display: block; margin-top: 10px; font-size: 0.9em; }
    .modal-content input, .modal-content select, .modal-content textarea { width: 100%; padding: 8px; margin-top: 5px; border-radius: 8px; border: 1px solid #ccc; }
    .modal-content textarea { resize: none; height: 60px; }
    .modal-content button { margin-top: 15px; width: 48%; padding: 10px; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; }
    .confirm { background: #00c897; color: white; }
    .cancel { background: #ccc; }

    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  </style>
</head>
<body>

<header>
  <div class="left-nav">
    <a href="moodboard">Mood Board</a>
    <a href="roadmap">Roadmap</a>
  </div>
  <h1>FordaGo</h1>
  <nav>
    <a href="login">Sign In</a>
    <a href="signup">Sign Up</a>
  </nav>
</header>

<section class="hero">
  <h2>Load Up. Level Up. FordaGo</h2>
  <p>Instantly grab your favorite gift cards — Steam, PlayStation, Xbox, and more — with just a few clicks.</p>

  <div class="hero-buttons">
    <button id="howItWorksBtn">How it Works</button>
    <button id="promosBtn">Promos</button>
  </div>
</section>

<section class="product-list">
  <div class="product" data-product="Steam Wallet"><img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Steam_icon_logo.svg"><h3>Steam Wallet</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Google Play"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Google_Play_Arrow_logo.svg"><h3>Google Play</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Apple Gift Card"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"><h3>Apple Gift Card</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="PlayStation Gift Card"><img src="https://1000logos.net/wp-content/uploads/2017/05/PlayStation-Logo.png" alt="PlayStation Gift Card"><h3>PlayStation Gift Card</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Xbox Gift Card"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Xbox_one_logo.svg"><h3>Xbox Gift Card</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Nintendo eShop Card"><img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Nintendo.svg"><h3>Nintendo eShop Card</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Amazon Gift Card"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"><h3>Amazon Gift Card</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Netflix Gift Card"><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg"><h3>Netflix Gift Card</h3><button class="buy-btn">Buy Now</button></div>
  <div class="product" data-product="Spotify Gift Card"><img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg"><h3>Spotify Gift Card</h3><button class="buy-btn">Buy Now</button></div>
</section>

<div class="modal" id="buyModal">
  <div class="modal-content">
    <h3>Enter Details</h3>
    <form id="buyForm">
      <label>Full Name:</label>
      <input type="text" id="name" required>

      <label>Email:</label>
      <input type="email" id="email" required>

      <label>Amount:</label>
      <select id="amount" required>
        <option value="">Select</option>
        <option value="100">₱100</option>
        <option value="200">₱200</option>
        <option value="500">₱500</option>
        <option value="1000">₱1000</option>
      </select>

      <label>Payment Method:</label>
      <select id="payment" required>
        <option value="">Select</option>
        <option value="GCash">GCash</option>
        <option value="Cash on Delivery">Cash on Delivery</option>
      </select>

      <div id="gcashField" style="display:none;">
        <label>GCash Number:</label>
        <input type="text" id="gcash" placeholder="09XXXXXXXXX">
      </div>

      <div id="addressField" style="display:none;">
        <label>Delivery Address:</label>
        <textarea id="address" placeholder="Enter full address"></textarea>
      </div>

      <div style="text-align:center; margin-top:15px;">
        <button type="button" class="confirm" id="confirmOrder">Confirm</button>
        <button type="button" class="cancel" id="cancelModal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<footer>
  <div><h4>About FordaGo</h4><ul><li><a href="#">Our Story</a></li><li><a href="#">Mission & Vision</a></li></ul></div>
  <div><h4>Support</h4><ul><li><a href="#">FAQs</a></li><li><a href="#">Contact Us</a></li></ul></div>
  <div><h4>Connect</h4><ul><li><a href="#">Facebook</a></li><li><a href="#">Twitter</a></li></ul></div>
  <p>© 2025 FordaGo. All Rights Reserved.</p>
</footer>

<script>
  const modal = document.getElementById('buyModal');
  const buyBtns = document.querySelectorAll('.buy-btn');
  const cancelModal = document.getElementById('cancelModal');
  const confirmOrder = document.getElementById('confirmOrder');
  const paymentSelect = document.getElementById('payment');
  const addressField = document.getElementById('addressField');
  const gcashField = document.getElementById('gcashField');
  let selectedProduct = '';

  buyBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      selectedProduct = btn.parentElement.getAttribute('data-product');
      modal.style.display = 'flex';
    });
  });

  cancelModal.onclick = () => modal.style.display = 'none';
  window.onclick = e => { if (e.target === modal) modal.style.display = 'none'; }

  paymentSelect.addEventListener('change', () => {
    const payment = paymentSelect.value;
    if (payment === 'Cash on Delivery' || payment === 'GCash') {
      addressField.style.display = 'block';
    } else {
      addressField.style.display = 'none';
    }
    gcashField.style.display = payment === 'GCash' ? 'block' : 'none';
  });

  confirmOrder.onclick = () => {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const payment = document.getElementById('payment').value;
    const amount = document.getElementById('amount').value;
    const address = document.getElementById('address').value.trim();
    const gcash = document.getElementById('gcash').value.trim();

    if (!name || !email || !payment || !amount) {
      alert('Please fill in all required fields.');
      return;
    }

    if ((payment === 'Cash on Delivery' || payment === 'GCash') && !address) {
      alert('Please enter your delivery address.');
      return;
    }

    if (payment === 'GCash' && !gcash) {
      alert('Please enter your GCash number.');
      return;
    }

    const confirmed = confirm(`Confirm your order for ${selectedProduct} (₱${amount}) using ${payment}?`);
    if (confirmed) {
      const url = `receipt?product=${encodeURIComponent(selectedProduct)}&amount=${encodeURIComponent(amount)}&name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&payment=${encodeURIComponent(payment)}&address=${encodeURIComponent(address)}&gcash=${encodeURIComponent(gcash)}`;
      window.location.href = url;
    }
  };

  document.getElementById('howItWorksBtn').onclick = () => alert("1. Choose a card\n2. Enter your details\n3. Receive your code instantly!");
  document.getElementById('promosBtn').onclick = () => alert("🎉 Check back every Friday for new FordaGo promos!");
</script>

</body>
</html>
