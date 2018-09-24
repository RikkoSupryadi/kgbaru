<!DOCTYPE html PUBLIC>
<html lang="en">

<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>KCG</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    

</head>

<body id="page-top">

  <!--Nav Bar-->
  <?php include 'template/navbar.php'; ?>

  <!--SLIDE1-->
  <header class="masthead">
    <?php include 'template/slide.php'; ?>
  </header>

  <!--Tentang kami-->
  <section id="TentangKami">
    <?php  include 'template/aboutus.php'; ?>
  </section>

  <!--Produk-->
  <section class="bg-light" id="portfolio">
    <?php include 'template/produk.php'; ?>
  </section>

  <!--Promotion-->
  <section id="promote">
    <?php include 'template/promote.php'; ?>
  </section>

  <!--Laporan PUB-->
  <section class="bg-light" id="lappub">
    <?php include 'template/lappub.php'; ?>
  </section>

  <!--Team-->
  <section  id="team">
    <?php include 'template/team.php'; ?>
  </section>

  <!--Contact us-->
  <section id="contact">
    <?php include 'template/contact.php'; ?>
  </section>

  <?php include 'template/partner.php'; ?>

  <!--Footer-->
  <?php include 'template/footer.php'; ?>


  <!--LIVECHAT-->
<!--   <div class="zoom">
    <a class="zoom-fab zoom-btn-large" id="zoomBtn">
      <i class="fa fa-comments"></i>
    </a>
  </div> -->

  <!--BOOTSTRAP-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/main.min.js"></script>
    <script type="js/promote.js"></script>

    <script>
    function tampilFunction() {
      var input, input2, filter, table, tr, td, i;
      // input = document.getElementById("SLaporan");
      input = document.getElementById("SPeriode");
      filter = input.value.toUpperCase();
      // filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

</body>
</html>