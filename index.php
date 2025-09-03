<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dimple Star Transport</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9fafb;
      color: #333;
    }

    /* Header */
    header {
      background: linear-gradient(90deg, #5a2d82, #7e57c2);
      padding: 1rem 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header img.logo {
      height: 50px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      color: #ffd54f;
    }

    .cta-btn {
      background: #ffd54f;
      color: #333;
      padding: 0.6rem 1rem;
      border-radius: 25px;
      font-weight: bold;
      text-decoration: none;
      transition: 0.3s;
    }

    .cta-btn:hover {
      background: #ffb300;
      color: #fff;
    }

    /* Hero Section */
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 3rem 5%;
      background: #fff;
    }

    .hero-text {
      max-width: 50%;
    }

    .hero-text h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #333;
    }

    .hero-text h1 span {
      color: #7e57c2;
    }

    .hero-text p {
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
      color: #555;
    }

    .hero-text a {
      padding: 0.8rem 1.2rem;
      border-radius: 25px;
      font-weight: bold;
      text-decoration: none;
      margin-right: 1rem;
    }

    .btn-primary {
      background: #7e57c2;
      color: #fff;
    }

    .btn-primary:hover {
      background: #5a2d82;
    }

    .btn-secondary {
      background: #e0e0e0;
      color: #333;
    }

    .hero-images {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
    }

    .hero-images img {
      width: 180px;
      border-radius: 20px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }

    /* Info Section */
    .info {
      text-align: center;
      padding: 3rem 5%;
      background: #f3f0fa;
    }

    .info h2 {
      font-size: 2rem;
      color: #333;
      margin-bottom: 1rem;
    }

    .info p {
      font-size: 1.1rem;
      color: #555;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Footer */
    footer {
      background: #333;
      color: #fff;
      padding: 2rem 5%;
      text-align: center;
    }

    footer img {
      height: 50px;
      margin-bottom: 1rem;
    }

    footer p {
      font-size: 0.9rem;
      margin: 0;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <a href="index.php"><img src="images/logo.png" class="logo" alt="Dimple Star Transport"></a>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="terminal.php">Terminals</a></li>
        <li><a href="routeschedule.php">Schedules</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="book.php" class="cta-btn">Book Now</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Travel with <span>Dimple Star</span> Comfort & Safety</h1>
      <p>Your trusted bus transport company offering reliable routes, convenient schedules, and comfortable rides across the Philippines.</p>
      <a href="book.php" class="btn-primary">Book a Ticket</a>
      <a href="about.php" class="btn-secondary">Learn More</a>
    </div>
    <div class="hero-images">
      <img src="slide/images/b1.png" alt="Bus Image 1">
      <img src="slide/images/b2.png" alt="Bus Image 2">
      <img src="slide/images/b3.png" alt="Bus Image 3">
      <img src="slide/images/b4.png" alt="Bus Image 4">
    </div>
  </section>

  <!-- Info Section -->
  <section class="info">
    <h2>Contact Us</h2>
    <p>
      📞 0929 209 0712 <br>
      📍 Block 1 Lot 10, Southpoint Subd., Brgy Banay-Banay, Cabuyao, Laguna
    </p>
  </section>

  <!-- Footer -->
  <footer>
    <a href="index.php"><img src="images/footer-logo.jpg" alt="Dimple Star Transport"></a>
    <p>&copy; 2025 Dimple Star Transport. All Rights Reserved.</p>
  </footer>

</body>
</html>
