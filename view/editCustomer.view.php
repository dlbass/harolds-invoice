<!DOCTYPE html>
<html>
  <head>
    <title>Harold's Furniture & Flooring - Edit Customer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="span3"> <!-- Side Menu -->
        <ul class="nav nav-list hf-sidenav">
          <h3>Edit Customer</h3>
        </ul>
        </div>
        <div class="span9"> <!-- Main Content -->
          <section id="customer">
              <legend>Customer Information</legend>
            <form action='' method='post'>
              <fieldset>
          			<!-- Way to use Form classes input method
          			open the echo php tags then do
          			Form::input('type', 'name/id', 'placeholder', 'Title for label'); close php tags
          			Type refers to the type of input method such as text
          			Name/id refers to the way in which the content that this input takes is going to be referenced
          			placeholder is what you want to be displayed in the field if it is empty
          			and Title for Label is what you wish to be displayed above the input field -->
          			<?= Form::input('text', 'first_name', '...', 'First Name'); ?>
          			<?= Form::input('text', 'last_name', '...', 'Last Name'); ?>
          			<?= Form::input('text', 'address', '...', 'Address'); ?>
          			<?= Form::input('text', 'city', '...', 'City'); ?>
          			<?= Form::input('text', 'state', '...', 'State'); ?>
          			<?= Form::input('text', 'zip', '...', 'Zipcode'); ?>
          			<?= Form::input('text', 'phone', '...', 'Phone'); ?>
              </fieldset>
			  <button class="btn btn-primary">Save and Close</button>
			  <button class="btn">Cancel</button>
			</form>
          </section>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>