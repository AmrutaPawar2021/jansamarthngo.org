<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gallary – Jansamarth NGO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include('header.php'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="about.php">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
  <div class="gallery-container">
          <h2>Our Work in Action</h2>
        <div class="gallery-grid">
            <?php for ($i = 1; $i <= 20; $i++) { ?>
            <img src="img/gallery<?php echo $i; ?>.jpg"
                 class="gallery-item"
                 data-index="<?php echo $i-1; ?>"
                 alt="Gallery Image <?php echo $i; ?>">
        <?php } ?>
                       
        </div>
    </div>
    <!-- Lightbox -->
    <div id="lightbox" class="lightbox">
    <span class="close" onclick="closeLightbox()">&times;</span>

    <span class="nav-btn prev" onclick="changeImage(-1)">
        <i class="fas fa-chevron-left"></i>
    </span>

    <img class="lightbox-content" id="lightbox-img">

    <span class="  next" onclick="changeImage(1)">
        <i class="fas fa-chevron-right"></i>
    </span>
</div>

    <script>
    const images = document.querySelectorAll(".gallery-item");
    let currentIndex = 0;

    images.forEach((img, index) => {
        img.addEventListener("click", () => openLightbox(index));
    });

    function openLightbox(index) {
        currentIndex = index;
        document.getElementById("lightbox-img").src = images[currentIndex].src;
        document.getElementById("lightbox").style.display = "block";
        document.body.style.overflow = "hidden";
    }

    function closeLightbox() {
        document.getElementById("lightbox").style.display = "none";
        document.body.style.overflow = "auto";
    }

    function changeImage(step) {
        currentIndex += step;

        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }

        document.getElementById("lightbox-img").src = images[currentIndex].src;
    }

    document.addEventListener("keydown", function (e) {
        if (document.getElementById("lightbox").style.display === "block") {
            if (e.key === "ArrowRight") changeImage(1);
            if (e.key === "ArrowLeft") changeImage(-1);
            if (e.key === "Escape") closeLightbox();
        }
    });
</script>

<?php include('footer.php'); ?>
</body>
</html>