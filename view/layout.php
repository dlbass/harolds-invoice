
<!DOCTYPE html>
<html>
  <head>
    <title>Harold's Furniture & Flooring - Flooring Sales - Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="./index.php">Harold's Furniture & Flooring - Flooring Sales</a>
            <ul class="nav">
              <li>
                <a href="./customerList.php">
                  Customers
                </a>
              </li>
              <li>
                <a href="./invoiceList.php">
                  Invoices
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container">
              <!-- Includes go here -->
          		<?php include($path); ?>
        </div>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
