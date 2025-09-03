<?php
// ===== DATABASE CONNECTION =====
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "dimplestar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ===== FORM HANDLER =====
if (isset($_POST['submit'])) {
    $way         = $_POST['way'];
    $origin      = $_POST['Origin'];
    $destination = $_POST['Destination'];
    $no_of_pass  = $_POST['no_of_pass'];
    $departure   = $_POST['Departure'];
    $return      = $_POST['Return'];
    $bustype     = $_POST['bustype'];

    $sql = "INSERT INTO bookings (way, origin, destination, no_of_passengers, departure_date, return_date, bus_type)
            VALUES ('$way', '$origin', '$destination', '$no_of_pass', '$departure', '$return', '$bustype')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking successful!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="icon" href="images/icon.ico" type="image/x-con">
<script type="text/javascript" src="js/datepickr.js"></script>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
  }
  #header {
    background: linear-gradient(to right, #4a148c, #7b1fa2);
    height: 80px;
  }
  #header h1 {
    float: left;
    margin: 0;
    padding: 10px;
  }
  #header h1 img.logo {
    height: 60px;
  }
  #mainnav {
    float: right;
    margin: 30px 20px 0 0;
    list-style: none;
    padding: 0;
  }
  #mainnav li {
    display: inline-block;
    margin-left: 15px;
  }
  #mainnav li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
  }
  #mainnav li a:hover {
    color: #ffd54f;
  }
  #mainnav li.current a {
    font-weight: bold;
    text-decoration: underline;
  }
  #content {
    padding: 40px;
    text-align: center;
  }
  #booking-container {
    margin: 0 auto;
    max-width: 900px;
    background: #fff;
    padding: 30px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    border-radius: 8px;
    text-align: left;
  }
  #booking-container h1 {
    text-align: center;
    color: #4a148c;
    margin-bottom: 20px;
  }
  form table {
    width: 100%;
    border-collapse: collapse;
  }
  form td {
    padding: 10px;
    vertical-align: middle;
  }
  input[type="text"],
  input[type="number"],
  select {
    width: 95%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="radio"] {
    margin-right: 5px;
  }
  input[type="submit"] {
    background: #7b1fa2;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    margin-top: 15px;
  }
  input[type="submit"]:hover {
    background: #4a148c;
  }
  #footer {
    margin-top: 40px;
    text-align: center;
    padding: 20px;
    background: #eee;
  }
  #footer img {
    height: 40px;
  }
</style>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h1><a href="index.php"><img src="images/logo.png" class="logo" alt="Dimple Star Transport" /></a></h1>
    <ul id="mainnav">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="terminal.php">Terminals</a></li>
      <li><a href="routeschedule.php">Routes / Schedules</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li class="current"><a href="book.php">Book Now</a></li>
    </ul>
  </div>

  <div id="content">
    <div id="booking-container">
      <h1>BOOK NOW!</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
          <tr>
            <td colspan="4">
              <label>
                <input type="radio" name="way" value="2" onclick="toggleReturn(true)"> Two Way
              </label>
              <label>
                <input type="radio" name="way" value="1" onclick="toggleReturn(false)" checked> One Way
              </label>
            </td>
          </tr>
          <tr>
            <td colspan="2">Origin:</td>
            <td colspan="2">
              <select name="Origin" required>
                <option value="0">Select</option>
                <option value="San Lazaro">San Lazaro</option>
                <option value="Espana">Espana</option>
                <option value="Alabang">Alabang</option>
                <option value="Cabuyao">Cabuyao</option>
                <option value="Naujan">Naujan</option>
                <option value="Victoria">Victoria</option>
                <option value="Pinamalayan">Pinamalayan</option>
                <option value="Gloria">Gloria</option>
                <option value="Bongabong">Bongabong</option>
                <option value="Roxas">Roxas</option>
                <option value="Mansalay">Mansalay</option>
                <option value="Bulalacao">Bulalacao</option>
                <option value="Magsaysay">Magsaysay</option>
                <option value="San Jose">San Jose</option>
                <option value="Pola">Pola</option>
                <option value="Soccoro">Soccoro</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2">Destination:</td>
            <td colspan="2">
              <select name="Destination" required>
                <option value="0">Select</option>
                <option value="San Lazaro">San Lazaro</option>
                <option value="Espana">Espana</option>
                <option value="Alabang">Alabang</option>
                <option value="Cabuyao">Cabuyao</option>
                <option value="Naujan">Naujan</option>
                <option value="Victoria">Victoria</option>
                <option value="Pinamalayan">Pinamalayan</option>
                <option value="Gloria">Gloria</option>
                <option value="Bongabong">Bongabong</option>
                <option value="Roxas">Roxas</option>
                <option value="Mansalay">Mansalay</option>
                <option value="Bulalacao">Bulalacao</option>
                <option value="Magsaysay">Magsaysay</option>
                <option value="San Jose">San Jose</option>
                <option value="Pola">Pola</option>
                <option value="Soccoro">Soccoro</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2">No. of Passengers:</td>
            <td colspan="2"><input type="number" name="no_of_pass" min="1" required></td>
          </tr>
          <tr>
            <td colspan="2">Departure:</td>
            <td colspan="2"><input id="datepick1" name="Departure" required></td>
          </tr>
          <tr>
            <td colspan="2">Return:</td>
            <td colspan="2"><input id="datepick2" name="Return" disabled></td>
          </tr>
          <tr>
            <td colspan="2">Bus Type:</td>
            <td colspan="2">
              <select name="bustype" required>
                <option value="0">Select</option>
                <option value="Air Conditioned">Air Conditioned</option>
                <option value="Ordinary">Ordinary</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align:center;">
              <input type="submit" name="submit" value="Submit">
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <div id="footer">
    <a href="index.php"><img src="images/footer-logo.jpg" alt="Dimple Star Transport" /></a>
    <p>&copy; Dimple Star Transport<br /></p>
  </div>
</div>

<script>
  function toggleReturn(enable) {
    document.getElementById('datepick2').disabled = !enable;
  }
  new datepickr('datepick1', { 'dateFormat': '20y-m-d' });
  new datepickr('datepick2', { 'dateFormat': '20y-m-d' });
</script>
</body>
</html>
