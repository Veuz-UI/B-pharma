<div class="top-header fixed-top">
    <div class="container">
        <div class=" d-flex align-items-center justify-content-between">
            <ul class="numbers-section">
                <li><a href="tel:9666827691"><i class="fa-solid fa-phone"></i>+966 682 7691</a></li>
                <li><a href="mailto:info@adv-pharma.com"><i class="fa-solid fa-envelope"></i>info@adv-pharma.com</a></li>
            </ul>

            <ul class="social-section">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg  main-nav fixed-top flex-column">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <a class="navbar-brand order-first order-md-0 mx-0 margin-header" href="index.php"><img src="images/logo.jpg" img-fluid></a>

        <div class="collapse navbar-collapse w-100 " id="navbarSupportedContent">
            <ul class="nav navbar-nav w-100 justify-content-end margin-class-right">
                <li class="nav-item">
                    <a href="index.php" <?php if(basename($_SERVER['PHP_SELF'], ".php")=="index") { ?> class="active"
                        <?php   }  ?>>Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" <?php if(basename($_SERVER['PHP_SELF'], ".php")=="about") { ?> class="active"
                        <?php   }  ?>>About us</a>
                </li>
                <li class="nav-item">
                    <a href="pharmacovigilance.php"
                        <?php if(basename($_SERVER['PHP_SELF'], ".php")=="pharmacovigilance") { ?> class="active"
                        <?php   }  ?>>Pharmacovigilance</a>
                </li>
                
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto">
                <a href="contact.php"><button class="contact-btn">Contact Us</button></a>
            </ul>
        </div>
    </div>
</nav>