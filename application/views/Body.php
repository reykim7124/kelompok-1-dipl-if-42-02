<!DOCTYPE html>
<html lang="en">
<!-- Head mengimport bootstrap dan mendefinisikan metadata dokumen -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!-- Head End -->

<body>
  <!-- Navbar aplikasi GoCharity -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?= base_url() ?>">GoCharity</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"></ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <?php if ($this->session->userdata("username") == '') { ?>
                  <a class="badge badge-success my-2 my-sm-0 p-2 text-white" href="<?= base_url('LoginController') ?>">Login</a>
               <?php } else { ?>
                  <span><?= $this->session->userdata("username") ?></span>
                  <a class="badge badge-success my-2 my-sm-0 p-2 text-white ml-2" href="<?= site_url('LoginController/logout') ?>">Log out</a>
                <?php } ?>
          </form>
      </div>
  </nav>
  <!-- Navbar End -->
  <?php $this->load->view($main_view); ?>
</body>
</html>