<!DOCTYPE html>
<html>
  <head>
    <title>Booking System</title>
    <style>
      /* Add a basic styling to the page */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f2f2f2;
      }
      h1 {
        text-align: center;
        margin-bottom: 30px;
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 30px;
      }
      input[type="text"] {
        width: 300px;
        height: 40px;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 20px;
      }
      input[type="submit"] {
        width: 200px;
        height: 40px;
        background-color: #30D5C8;
        color: white;
        font-size: 18px;
        cursor: pointer;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
      }
      th, td {
        border: 1px solid #dddddd;
        padding: 10px;
        text-align: left;
      }
      th {
        background-color: #dddddd;
      }
      a {
        color: #30D5C8;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <h1>Booking System</h1>
    <form action="index.php" method="post">
      <input type="text" name="name" placeholder="Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="phone" placeholder="Phone">
      <input type="submit" name="add" value="Add">

    </form>
    <form action="bookings.php" method="post">
      <input type="submit" name="search" value="Search">
    </form>
      <?php
        $conn = mysqli_connect("localhost", "irfan", "960728", "bookings");
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['add'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $sql = "INSERT INTO entry (name, email, phone) VALUES ('$name', '$email', '$phone')";
          mysqli_query($conn, $sql);
        }
        mysqli_close($conn);
      ?>
  </body>
</html>

