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
                    <h2>Pharmacovigilance</h2>
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
                        <h6>Bpharma</h6>
                        <h2>Pharmacovigilance</h2>
                    </div>
                    <p>A service that allows you to report adverse drug reaction, medication errors, and pharmaceutical defects.</p>
                    <div class="why-radr">
                        <h3>Why Report Adverse Drug Reaction?</h3>
                        <p>By reporting adverse drug reaction for Avalon Pharma products, you help us to ensure the safety of our products and our patients. Your information will also enable Avalon Pharma to fulfil its reporting responsibilities to health authorities, which requires that we provide information on adverse drug reaction with our products - even in cases where a relationship between the product and the effect is not established.</p>
                        <h6>If you have faced an issue or adverse drug reaction while using any of our products, or would like to share any concern or incident related to our products, please fill the report form or contact Pharmacovigilance Department</h6>
                        
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
                    
                    <div class="report-form-div" data-aos="fade-up">
                        <div class="report-form-header">
                            <h2>Adverse Drug Reaction (ADR) Reporting Form</h2>
                            <a href="images/pharmacovigilance.pdf" download><button class="common-btn"><i class="fa-solid fa-download me-1"></i> Download as pdf</button></a>
                        </div>

                        <form id="report-form" name="contact_form" class="report-form">
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6 class="mt-0">Patient Details</h6>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Patient initials <span>*</span></label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Patient initials">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Date of Birth <span>*</span></label>
                                        <input type="date" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Weight</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Weight">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Height</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Height">
                                    </div>
                                </div>
                                <div class="col-lg-6 sex-input">
                                    <div class="form-group">
                                        <label for="">Sex <span>*</span></label>
                                        <div class="input-grp row">
                                            <div class="col-md-4 input-grp-div">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="male" name="sex" id="click-to-hide" onclick="hide1('male','gender')">
                                                    <label for="male">Male</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="female" name="sex" id="click-to-show" onclick="hide1('female','gender')">
                                                    <label for="female" >Female</label>
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
                                    <h6>Suspected Drugs</h6>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Drugs Name(Include names)</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Drugs Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Manufacturer & Batch No.</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Batch No">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dose route</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Dose route">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dose frequency</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Dose frequency">
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
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="">Indication/purpose of use</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Indication">
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Concomitant Drugs (Exclude those used to treat reaction)</h6>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Drugs Name(Include names)</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Drugs Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Manufacturer & Batch No.</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Batch No">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dose route</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Dose route">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dose frequency</label>
                                        <input type="number" name="form_name" value="" class="form-control" placeholder="Dose frequency">
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
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="">Indication/purpose of use</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Indication">
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Adverse Drug Reaction Description</h6>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Adverse event including relevant tests/lab data</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Adverse event">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Event Start date</label>
                                        <input type="date" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="">Event End date</label>
                                        <input type="date" name="form_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Other relevant history, including preexisting medical conditions.
                                            (Diagnosis, allergies, pregnancy, hepatic, renal etc.)</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Action taken</h6>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-grp-div">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="drug-discontinued" name="action">
                                                <label for="drug-discontinued">Drug Discontinued</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="dose-reduced" name="action">
                                                <label for="dose-reduced">Dose Reduced</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="done-increased" name="action">
                                                <label for="done-increased">Done Increased</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="does-notchanged" name="action">
                                                <label for="does-notchanged">Does not changed</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="unknown" name="action">
                                                <label for="unknown">Unknown</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="not-applicable" name="action">
                                                <label for="not-applicable">Not Applicable</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Outcome of ADR</h6>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group border-btm">
                                        <label for="">The patient</label>
                                        <div class="input-grp-div mb-3">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="recovered" name="adr-patient" onclick="hide1('Recovered','The patient')">
                                                <label for="recovered">Recovered</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="recovering" name="adr-patient" onclick="hide1('Recovering','The patient')">
                                                <label for="recovering">Recovering</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="no-improvement" name="adr-patient" onclick="hide1('No Improvement','The patient')">
                                                <label for="no-improvement">No Improvement</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="died" name="adr-patient" onclick="hide1('Died','The patient')">
                                                <label for="died">Died</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="adrunknown" name="adr-patient" onclick="hide1('Unknown','The patient')">
                                                <label for="adrunknown">Unknown</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 recover-date" style="display: none;">
                                            <div class="form-group">
                                                <label for="">Date</label>
                                                <input type="date" name="form_name" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group border-btm">
                                        <label for="">Event subsided after stopping the suspected drug (Dechallenge)</label>
                                        <div class="input-grp-div form-group">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="dechallenge-no" name="dechallenge">
                                                <label for="dechallenge-no">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="dechallenge-yes" name="dechallenge">
                                                <label for="dechallenge-yes">Yes</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="dechallenge-unknown" name="dechallenge">
                                                <label for="dechallenge-unknown">Unknown</label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="form-group border-btm">
                                        <label for="">Event reappeared after reintroducing to the suspected drug 
                                            (Rechallenge)</label>
                                        <div class="input-grp-div form-group">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="rechallenge-no" name="rechallenge">
                                                <label for="rechallenge-no">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="rechallenge-yes" name="rechallenge">
                                                <label for="rechallenge-yes">Yes</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="rechallenge-notapplicable" name="rechallenge">
                                                <label for="rechallenge-notapplicable">Not applicable</label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="">Specific antagonist used</label>
                                        <div class="input-grp-div">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="rechallenge-no" name="rechallenge" onclick="hide1('no','Specific')"
                                                >
                                                <label for="rechallenge-no">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="rechallenge-yes" name="rechallenge" onclick="hide1('yes','Specific')"
                                                >
                                                <label for="rechallenge-yes">Yes</label>
                                            </div>
                                          
                                        </div>
                                        <div class="col-md-5 recover-date1" style="display: none;">
                                            <div class="form-group">
                                                <label for="">Specify</label>
                                                <input type="text" name="form_name" value="" class="form-control">
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Seriousness of ADR</h6>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness1" name="seriousness1">
                                                    <label for="seriousness1">Patient died</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness2" name="seriousness2">
                                                    <label for="seriousness2">Life threatening</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness3" name="seriousness3">
                                                    <label for="seriousness3">Hospitalization</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness4" name="seriousness4">
                                                    <label for="seriousness4">Permanent disability</label>
                                                </div>
                                        
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness5" name="seriousness5">
                                                    <label for="seriousness5">None of the above (Not serious)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness6" name="seriousness6">
                                                    <label for="seriousness6">Congenital anomaly</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness7" name="seriousness7">
                                                    <label for="seriousness7">Prolonged hospitalization more than 24 hr.</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness8" name="seriousness8">
                                                    <label for="seriousness8">Required Emergency Room (ER) visit</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="seriousness9" name="seriousness9">
                                                    <label for="seriousness9">Required intervention to prevent permanent impairment/damage</label>
                                                </div>
                                                
                                            </div>
                                        
                                         
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Comments if any</label>
                                                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                                
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <h6>Reporter Details</h6>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Reporter Name</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Reporter Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Profession/Specialty</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Profession/Specialty">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Center</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Center">
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
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Phone/Mobile</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Fax</label>
                                        <input type="text" name="form_name" value="" class="form-control" placeholder="Fax">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="">Signature</label>
                                        <div class="col-ting">
                                            <div class="control-group file-upload" id="file-upload1">
                                              <div class="image-box text-center">
                                                    <p>Upload Image</p>
                                                    <img src="" alt="">
                                                </div>
                                              <div class="controls" style="display: none;">
                                                    <input type="file" name="contact_image_1"/>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-box text-center">
                                <button class="send-btn" type="submit">Submit<i class="fa-solid fa-arrow-right-long ms-2"></i></button>                                  
                            </div>
                            
                        </form>
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