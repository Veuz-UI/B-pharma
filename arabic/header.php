
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
                        <?php   }  ?>>الصفحةالرئيسية</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" <?php if(basename($_SERVER['PHP_SELF'], ".php")=="about") { ?> class="active"
                        <?php   }  ?>>معلومات عنا</a>
                </li>
                <li class="nav-item">
                    <a href="pharmacovigilance.php"
                        <?php if(basename($_SERVER['PHP_SELF'], ".php")=="pharmacovigilance") { ?> class="active"
                        <?php   }  ?>>Pharmacovigilance</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" <?php if(basename($_SERVER['PHP_SELF'], ".php")=="contact") { ?> class="active"
                        <?php   }  ?>>اتصل بنا</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto">
                <a href="../index.php"><button class="contact-btn">English</button></a>
            </ul>
        </div>
    </div>
</nav>