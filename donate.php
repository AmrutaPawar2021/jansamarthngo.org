<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Jansamarth NGO'; ?></title>
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

    <!-- Icon Font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>    
    <?php include('header.php'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Donate</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="about.php">About </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Donate</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- ===== Donate Content ===== -->
<!-- ===== Donate Content ===== -->
<h1 class="text-center mb-4">Donate & Create Lasting Impact</h1>

<section class="donate-section py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Scan to Pay Card -->
            <div class="col-lg-5 col-md-6">
                <div class="donate-card text-center">
                    <h5 class="fw-semibold mb-3">Scan to Pay</h5>

                    <div class="qr-box mb-3">
                        <img src="img/scanner.png" alt="Donate QR Code">
                    </div>

                    <p class="small text-muted mb-2">Scan with any UPI App</p>

                    <div class="upi-icons">
                        <img src="img/gpay.svg" alt="Google Pay">
                        <img src="img/phonepe.svg" alt="PhonePe">
                        <img src="img/paytm.svg" alt="Paytm">
                    </div>
                </div>
            </div>

            <!-- Bank Details Card -->
            <div class="col-lg-5 col-md-6">
                <div class="donate-card">
                    <h5 class="fw-semibold mb-3 text-center">Bank Transfer Details</h5>

                    <div class="bank-detail">
                        <small>ACCOUNT NAME</small>
                        <p>Jansamarth Social Multipurpose Organization</p>
                    </div>

                    <div class="bank-detail">
                        <small>BANK NAME</small>
                        <p>State Bank of India</p>
                    </div>

                    <div class="bank-detail">
                        <small>ACCOUNT NUMBER</small>
                        <p>439325503078</p>
                    </div>

                    <div class="bank-detail">
                        <small>IFSC CODE</small>
                        <p>SBIN0003078</p>
                    </div>

                    <div class="bank-detail">
                        <small>MICR CODE</small>
                        <p>442002006</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Donate End -->        
<?php include('footer.php'); ?>
</body>
</html>
    
