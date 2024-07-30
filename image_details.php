 
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Sailor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

  <main id="main">
<section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
<?php
			   $scientific_name=$_GET['scientific_name'];
			   $commercial_name=$_GET['commercial_name'];
			   $price=$_GET['price'];
			   $availability=$_GET['availability'];
			   $id_pharmacy=$_GET['id_pharmacy'];
			   $id_pharmacy=$_GET['id_pharmacy'];
			   $description=$_GET['description'];
			   $medicine_img=$_GET['medicine_img'];
			   
			   
             echo"   <div class='swiper-slide'>
                  <img src='dash/img/".$medicine_img." ' alt=' '>
                </div>
              </div>
              <div class='swiper-pagination'></div>
            </div>
          </div>

          <div class='col-lg-4'>
            <div class='portfolio-info' dir='rtl'>
              <h3>Project information</h3>
			  
              <ul>
                <li><strong>الاسم التجاري</strong>: $scientific_name</li>
                <li><strong>الاسم العلمي</strong>: $commercial_name</li>
                <li><strong>السعر</strong>:  $price</li>
                <li><strong>التوفر</strong>: $availability</li>
                 <li><strong>اسم الصيدلية</strong>:id_pharmacy</li>
              </ul>
			  
			  
            </div>
            <div class='portfolio-description' dir='rtl'>
              <h2>الوصف</h2>
              <p>
                $description
              </p>
            </div>
          </div>

        </div>";
		?>

      </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>