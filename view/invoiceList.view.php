<!DOCTYPE html>
<html>
  <head>
    <title>Harold's Furniture & Flooring - Flooring Sales - Invoice List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
      <div class="row">
        <div class="span3"> <!-- Sidebar Menu -->
          <ul class="nav nav-list hf-sidenav">
            <h3>Invoice List</h3>
            <h4>Main Navigation</h4>
            <li>
              <a href="./newInvoice.php">
                New Invoice
              </a>
            </li>
          </ul>
        </div>
        <div class="span9">
            <table class="well table table-striped table-hover">
              <thead>
                <th>Customer</th>
                <th>Invoice</th>
                <th>Date</th>
              </thead>
              <?php foreach ($invoices as $invoice) : ?>
              <tr>
  				<td><?= $invoice['customer_name']; ?></td>
  					<td><a href="#"><?= $invoice['invoice_number']; ?></a></td>
  					<td><?= $invoice['date_of_order']; ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
        </div>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>