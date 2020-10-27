<?php $this->load->view('iHead'); ?>

<!--========================================================

                              CONTENT

    =========================================================-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>

  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>
  <section class="login">
    <h1>Login Page</h1>

    <?php
    // Cetak session
    if ($this->session->flashdata('sukses')) {
      echo '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('sukses') . '</p>';
    }
    // Cetak error
    echo validation_errors('<p class="warning" style="margin: 10px 20px;">', '</p>');
    ?>

    <form action="<?php echo base_url('login') ?>" method="post">
      <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username">

      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Login" class="full">
      </p>
    </form>
    <footer>Web design by <a href="http://javawebmedia.com" title="School of graphic &amp; web design" target="_blank">Java Web Media</a></footer>
  </section>

</body>

</html>



<?php $this->load->view('ifoot'); ?>