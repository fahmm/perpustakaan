<!DOCTYPE html>
<html>
<head>
	<title>halaman <?= $data['judul'] ?></title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="<?= BASEURL ?>/home">Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL ?>/home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/about">About</a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/library">Library</a>
    </div>
  </div>
  </div>

</nav>