<!DOCTYPE html>
<html>
  <head>
    <title>Harold's Furniture & Flooring - Flooring Sales - Customer List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
      <div class="row">
        <div class="span3"> <!-- Sidebar Menu -->
          <ul class="nav nav-list hf-sidenav">
            <h3>Customer List</h3>
            <h4>Main Navigation</h4>
              <div><a class="btn btn-primary" href="./newCustomer.php">New Customer</a></div>
              <div class="input-append">
                <input class="span2" id="appendedInputButton" type="text" placeholder="Search Customers">
                <button class="btn" type="button"><i class="icon-search"></i></button>
              </div>
          </ul>
        </div>
        <div class="span9">
		<?php if ( $_GET['success'] == 'success' ) : ?>
          <div class="alert alert-success">
            <strong>Success!</strong> You added <?= $_GET['first_name'] . ' ' . $_GET['last_name']; ?>
          </div>
		<?php endif; ?>
          <table class="table table-striped table-hover">
            <thead>
              <th>Customer</th>
              <th>Phone</th>
              <th>City, State</th>
			  <th>New Invoice</th>
            </thead>
            <?php foreach ($customers as $customer) : ?>
            <tr>
              <td><a href="#"><?= $customer['first_name'] . ' ' . $customer['last_name']; ?></td>
              <td><?= $customer['phone']; ?></a></td>
              <td><?= $customer['city'] . ', ' . $customer['state']; ?></td>
			  <td>
			  <form action="./newInvoice.php" method="get">
			  <button class="btn" name="id" value="<?= $customer['id']; ?>"><i class="icon-plus"></i></button>
			  </form>
			  </td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>