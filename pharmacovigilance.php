<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced Pharmaceutical industry</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="images/fav.jpg" rel="icon" />
</head>

<body>
    <div class="loader-mask">

        <div class="spinnerContainer">

            <div class="circle">

            </div>

        </div>

    </div>

    <?php include("header.php")?>

    <section class="inner-banner" style="background-image: url(images/inner-bg1.png);">
        <div class="container" data-aos="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <h2>Reporting Adverse Event and Quality Defect</h2>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home <i class="fa-solid fa-angles-right"></i></a></li>
                        <li>Pharmacovigilance</li>
                    </ul>
                </div>
            </div>
        </div>
   </section>

   <section class="pharma-sec">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                <div class="main-heading">
                    <h6>Advanced Pharmaceutical Industries</h6>
                    <h2>Reporting Adverse Event and Quality Defect</h2>
                </div>
                <p>A service that allows you to report adverse events, medication errors, and product quality defects of
                    Advanced Pharmaceutical Industries Products.</p>
                <div class="why-radr">
                    <h3><i class="fa-solid fa-caret-right"></i>What is Pharmacovigilance ?</h3>
                    <p>Pharmacovigilance is the science and activities relating to the detection, assessment,
                        understanding and prevention of adverse effects or any other medicine/vaccine related problem.
                    </p>
                    <h3><i class="fa-solid fa-caret-right"></i>What is Adverse Event ?</h3>
                    <p>Defined as a response to a medicinal product, which is noxious and unintended. </p>
                    <h3><i class="fa-solid fa-caret-right"></i>What is Quality Defect ?</h3>
                    <p>Defined as any difference in the appearance, physical-chemical, microbiological and
                        pharmaceutical-technological properties of the actual situation of medicinal product and
                        information from marketing authorization. </p>
                    <h3><i class="fa-solid fa-caret-right"></i>Why do we report Adverse Event ?</h3>
                    <p>Advanced Pharmaceutical Industries maintains active surveillance to ensure the safety of our
                        patients and that our products have a complete safe profile. <br>
                        Your information will allow us to take the necessary action to increase the safety of the
                        Advanced Pharmaceutical Industries product.</p>
                    <h6>If you experienced adverse event or found a quality defect while using any of our products,
                        please fill the below report form.</h6>


                </div>
                    <h6 class="consent"><i class="fa-solid fa-info"></i><span>The personal data will be captured and used only for Pharmacovigilance purposes.</span></h6>
                    <div class="report-form-div" data-aos="fade-up">
                        <div class="report-form-header">
                            <h2>Adverse Drug Reaction (ADR) Reporting Form</h2>
                            <a href="images/pharmacovigilance.pdf" download><button class="common-btn"><i
                                        class="fa-solid fa-download ms-1"></i> Download as pdf</button></a>
                        </div>
    
                        <form id="report-form" name="contact_form" class="report-form">
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6 class="mt-0">Patient Information</h6>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name <span>*</span></label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Age <span>*</span></label>
                                        <input type="number" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Weight <span>*</span></label>
                                        <input type="number" name="form_name" value="" class="form-control"
                                            placeholder="Weight">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Height</label>
                                        <input type="number" name="form_name" value="" class="form-control"
                                            placeholder="Height">
                                    </div>
                                </div>
                                <div class="col-lg-6 sex-input">
                                    <div class="form-group">
                                        <label for="">Gender <span>*</span></label>
                                        <div class="input-grp row">
                                            <div class="col-md-4 input-grp-div">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="male" name="sex" id="click-to-hide"
                                                        onclick="hide1('male','gender')">
                                                    <label for="male">Male</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="female" name="sex" id="click-to-show"
                                                        onclick="hide1('female','gender')">
                                                    <label for="female">Female</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 input-grp-div hide-this" style="display: none;">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pregnant" name="pregnant">
                                                    <label for="pregnant">Pregnant</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="notpregnant" name="pregnant">
                                                    <label for="notpregnant">Not Pregnant</label>
                                                </div>
                                            </div>
    
    
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Product Information</h6>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Drugs Name <span>*</span></label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Drugs Name">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="">Indication/purpose of use <span>*</span></label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Indication">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dose route <span>*</span></label>
                                        <input type="number" name="form_name" value="" class="form-control"
                                            placeholder="Dose route">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dose frequency <span>*</span></label>
                                        <input type="number" name="form_name" value="" class="form-control"
                                            placeholder="Dose frequency">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Start date</label>
                                        <input type="date" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">End date</label>
                                        <input type="date" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                               
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Manufacturer & Batch No.</label>
                                        <input type="number" name="form_name" value="" class="form-control"
                                            placeholder="Batch No">
                                    </div>
                                </div>
                            </div>
                         
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Description of the Adverse Event</h6>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Describe the adverse event (Time of onset\ Relevant tests\ Lab results\ cessation and\or re-administration of the drug)  <span>*</span></label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 sex-input">
                                    <div class="form-group">
                                        <label for="">Are you Pregnant ? <span>*</span></label>
                                        <div class="input-grp row">
                                            <div class="col-md-4 input-grp-div">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="yes" name="pregnant">
                                                    <label for="yes">Yes</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="no" name="pregnant">
                                                    <label for="no">No</label>
                                                </div>
                                            </div>
                                           
    
    
    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Other relevant history, including preexisting medical conditions.
                                            (Diagnosis, allergies, pregnancy, hepatic, renal etc.) <span>*</span></label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                       
                         
                    
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Reporter Details <span>(Only for Health Care Providers)</span></h6>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Reporter Name</label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Reporter Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Profession/Specialty</label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Profession/Specialty">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Center</label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Center">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="email">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Phone/Mobile</label>
                                        <input type="text" name="form_name" value="" class="form-control"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                         
                            </div>
                            <div class="button-box text-center">
                                <button class="send-btn" type="submit">Submit<i
                                        class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            </div>
    
                        </form>
                    </div>
                    
                    <div class="row">
                            <div class="col-md-5">
                                <div class="contact-deptmnt">
                                    <div class="contact-dept-img">
                                        <img src="images/location.gif" alt="img">
                                    </div>
            
                                    <div class="contact-deptmnt-details">
                                        <h4>Location</h4>
                                        <p><a href="#">Al-Murjana Building, Office 2088125 Al Amir Sultan- Al Rawdah, Jeddah 23435-2086, KSA</a></p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col">
                                <div class="contact-deptmnt">
                                    <div class="contact-dept-img">
                                        <img src="images/email.gif" alt="img">
                                    </div>
            
                                    <div class="contact-deptmnt-details">
                                        <h4>Email</h4>
                                        <p><a href="mailto:info@adv-pharma.com">info@adv-pharma.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="contact-deptmnt">
                                    <div class="contact-dept-img">
                                        <img src="images/telephone.gif" alt="img">
                                    </div>
            
                                    <div class="contact-deptmnt-details">
                                        <h4>Phone</h4>
                                        <p><a href="tel:9666827691">+966 682 7691</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                </div>
           
            </div>
            
        </div>
   </section>

    <?php include("footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js " integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js " integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="js/script.js "></script>
    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>

    <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 2000)

        })
    </script>

    <script>
        $(function() {
            var navbar = $('.navbar');

            $(window).scroll(function() {
                if ($(window).scrollTop() <= 40) {
                    navbar.removeClass('navbar-scroll');
                } else {
                    navbar.addClass('navbar-scroll');
                }
            });
        });
    </script>
<script>
    $(".image-box").click(function(event) {
	var previewImg = $(this).children("img");

	$(this)
		.siblings()
		.children("input")
		.trigger("click");

	$(this)
		.siblings()
		.children("input")
		.change(function() {
			var reader = new FileReader();

			reader.onload = function(e) {
				var urll = e.target.result;
				$(previewImg).attr("src", urll);
				previewImg.parent().css("background", "transparent");
				previewImg.show();
				previewImg.siblings("p").hide();
			};
			reader.readAsDataURL(this.files[0]);
		});
});


function hide1(type,filed_type){
   
   if(filed_type == "gender"){
    if (type == "female")
    {
        $(".hide-this").show()
    }
    else{


        $(".hide-this").hide()
    }
   }
   else if(filed_type == "Specific"){
    if (type=="yes"){
        $(".recover-date1").show()
    }
    else{
        $(".recover-date1").hide()
    }
   }
   else if(filed_type == "The patient"){
    if(type == "Recovered"){
        $(".recover-date").show()
    }
    else{
        $(".recover-date").hide()
    }
   }
   
}

</script>
<script>

</script>


</body>

</html>