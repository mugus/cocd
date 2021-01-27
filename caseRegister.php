<!DOCTYPE html>
<html lang="en">

<?php include 'includes/caseheader.php'; ?>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:info@crossovercd.org">info@crossovercd.org</a>
        <!-- <i class="icofont-phone"></i> +1 5589 55488 55 -->
      </div>
      <div class="social-links float-right">
        <a href="http://twitter.com/crossoverdayton" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/crossoverdayton" class="facebook"><i class="icofont-facebook"></i></a>
        <!-- <a href="#" class="instagram"><i class="icofont-instagram"></i></a> -->
        <a href="https://www.youtube.com/channel/UC9Vbm-QoZzRVcDJ3_daKUFw" class="youtube"><i class="icofont-youtube"></i></a>
        <a href="https://www.linkedin.com/in/cross-over-community-development-568779177/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>COCD-Refugee Portal</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="#">Cases Management</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="#">Cases Options</a>
            <ul>
              <li class="active"><a href="#">Register Family</a></li>
              <li><a href="#">Edit Family Profile</a></li>
              <li><a href="#">Delete Family Profile</a></li>
              <li><a href="#">Search Family</a></li>
              <li><a href="#">Report</a></li>
            </ul>
          </li>
          <li></li>
          <li><a href="index.php">Logout</a></li>
          <li></li>
          <li class="search"><a href="#"><i class="icofont-search-1"></i></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Family Registration Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Cases Management</li>
          </ol>
        </div>

      </div>
    </section> -->
    <!-- End Breadcrumbs Section -->
    
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="icofont-search-1"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="icofont-close"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    
  </main><!-- End #main -->
  <!-- <section class="inner-page">
  </section> -->
  <div class="image-container set-full-height" style="background-image: url('assets/img/slide/slide-4.jpg')">
   <section class="inner-page">
    <div class="container">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div id="smartwizard" class="sw-main sw-theme-default">
                <ul class="forms-wizard nav nav-tabs step-anchor">
                    <li class="nav-item active">
                        <a href="#step-1" class="nav-link">
                            <em>1</em><span>Part I: Personal Information</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#step-2" class="nav-link">
                            <em>2</em><span>Payment Information</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#step-3" class="nav-link">
                            <em>3</em><span>Finish Wizard</span>
                        </a>
                    </li>
                </ul>
                <div class="form-wizard-content sw-container tab-content" style="min-height: 353.583px;">
                    <div id="step-1" class="tab-pane step-content" style="display: block;">
                        <div class="form-row">
                          <div class="col-md-6">
                            <div class="position-relative form-group">
                              <div class="picture-container">
                                <div class="picture">
                                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                    <input type="file" id="wizard-picture">
                                </div>
                                <h6>Choose Picture</h6>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-row">
                              <div class="col-md-12">
                                <div class="position-relative form-group">
                                  <label for="casenumber">Case Number <small>(required)</small></label>
                                  <input name="casenumber" id="casenumber" type="text" class="form-control" placeholder="1874...">
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-12">
                                <div class="position-relative form-group">
                                  <label for="snumber">US Social Security Number <small>(Optional)</small></label>
                                  <input name="snumber" id="snumber" type="text" class="form-control" placeholder="RS54...">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-4">
                            <div class="position-relative form-group">
                              <label for="firstname">Family Name <small> (Last name)</small></label>
                              <input name="firstname" id="firstname" type="text" class="form-control" placeholder="Salim...">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="position-relative form-group">
                              <label for="middlename">Middle Name <small> (Surname)</small></label>
                              <input name="middlename" id="middlename" type="text" class="form-control" placeholder="Julius...">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="position-relative form-group">
                              <label for="givenname">Given Name <small> (First name)</small></label>
                              <input name="givenname" id="givenname" type="text" class="form-control" placeholder="Mark...">
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail55">Email</label>
                                    <input name="email" id="exampleEmail55"  type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                  <label for="dob">Date of Birth </label>
                                  <input name="dob" id="dob" type="date" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- <div class="col-md-6">
                                <div class="position-relative form-group">
                                  <label for="dob">Date of Birth </label>
                                  <input name="dob" id="dob" type="date" class="form-control" >
                                </div>
                            </div> -->
                        </div>
                        <div class="form-row">
                          <div class="col-md-3">
                            <div class="position-relative form-group">
                              <label for="martal_status">Marital Status </label>
                              <select name="martal_status" id="martal_status" class="form-control" >
                                  <option><small>...</small></option>
                                  <option>Single</option>
                                  <option>Married</option>
                                  <option>Widow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="position-relative form-group">
                              <label for="gender">Gender </label>
                              <select name="gender" id="gender" class="form-control" >
                                  <option><small>...</small></option>
                                  <option>Male</option>
                                  <option>Female</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="position-relative form-group">
                              <label for="dependant_nbr">Number Of Dependants <small> (Including Children)</small></label>
                              <input name="dependant_nbr" id="dependant_nbr" type="number" min="1" max="100" class="form-control" >
                            </div>
                          </div>

                        </div>
                        <div class="form-row">
                          <!-- <div class="col-md-6">
                            <div class="position-relative form-group">
                              <label for="dependant_nbr">Number Of Dependants <small> (Including Children)</small></label>
                              <input name="dependant_nbr" id="dependant_nbr" type="number" min="1" max="100" class="form-control" >
                            </div>
                          </div> -->
                        </div>
                        <div class="form-row">
                          <div class="col-md-3">
                            <div class="position-relative form-group">
                              <label>Country Of Birth</label>
                              <select name="countryofbirth" class="form-control">
                                <option disabled="" selected="">- country -</option>
                                <option value="Afghanistan"> Afghanistan </option>
                                <option value="Albania"> Albania </option>
                                <option value="Algeria"> Algeria </option>
                                <option value="American Samoa"> American Samoa </option>
                                <option value="Andorra"> Andorra </option>
                                <option value="Angola"> Angola </option>
                                <option value="Anguilla"> Anguilla </option>
                                <option value="Antarctica"> Antarctica </option>
                                <option value="...">...</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="position-relative form-group">
                              <label for="cityofbirth">City Of Birth</label>
                              <input name="cityofbirth" id="cityofbirth" type="text" class="form-control" placeholder="Nairobi">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="position-relative form-group">
                              <label for="nationalityatbirth">Present Nationality<small> (Citizenship)</small></label>
                              <input name="nationalityatbirth" id="nationalityatbirth" type="text" class="form-control" placeholder="Kenyan">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="position-relative form-group">
                              <label for="nationalityatbirth">Nationality at Birth</label>
                              <input name="nationalityatbirth" id="nationalityatbirth" type="text" class="form-control" placeholder="Kenyan"></div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                              <div class="position-relative form-group">
                                  <label for="religion">Race, Ethnic, or Tribal Group</label>
                                  <input name="religion" id="religion" type="text" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="position-relative form-group">
                                  <label for="religion">Religion</label>
                                  <input name="religion" id="religion" type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="position-relative form-group">
                              <label for="exampleAddress">Address <small>(where you physically reside)</small></label>
                              <input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control">
                          </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="street">Street</label>
                                    <input name="street" id="street" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="exampleCity">City or Town</label>
                                    <input name="city" id="exampleCity" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="exampleState">State</label>
                                    <input name="state" id="exampleState" type="text" class="form-control">
                                </div>
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="province">Province</label>
                                    <input name="province" id="province" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="appartment">Appartment Number</label>
                                    <input name="appartment" id="appartment" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="exampleZip">Zip</label>
                                    <input name="zip" id="exampleZip" type="text" class="form-control">
                                </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="daytimephone">Day Time Telephone Number</label>
                                    <input name="daytimephone" id="daytimephone" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="mobilephone">Mobile Telephone Number</label>
                                    <input name="mobilephone" id="mobilephone" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="nativelanguage">Native Language</label>
                                    <input name="nativelanguage" id="nativelanguage" type="text" class="form-control">
                                </div>
                            </div>
                          </div>
                        <!-- <div class="position-relative form-check">
                            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                            <label for="exampleCheck" class="form-check-label">Check me out</label>
                        </div> -->
                    </div>
                    <div id="step-2" class="tab-pane step-content">
                        <div id="accordion" class="accordion-wrapper mb-3">
                            <div class="card">
                                <div id="headingOne" class="card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                        <span class="form-heading">Account Information<p>Enter your  user informations below</p></span>
                                    </button>
                                </div>
                                <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail2">Email</label>
                                                    <input name="email" id="exampleEmail2" placeholder="with a placeholder" type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword">Password</label>
                                                    <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleAddress">Address</label>
                                            <input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleAddress2">Address 2</label>
                                            <input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleCity">City</label>
                                                    <input name="city" id="exampleCity" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleState">State</label>
                                                    <input name="state" id="exampleState" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="position-relative form-group">
                                                    <label for="exampleZip">Zip</label>
                                                    <input name="zip" id="exampleZip" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step-3" class="tab-pane step-content">
                        <div class="no-results">
                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                <span class="swal2-success-line-tip"></span>
                                <span class="swal2-success-line-long"></span>
                                <div class="swal2-success-ring"></div>
                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                            </div>
                            <div class="results-subtitle mt-4">Finished!</div>
                            <div class="results-title">You arrived at the last form wizard step!</div>
                            <div class="mt-3 mb-3"></div>
                            <div class="text-center">
                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="clearfix">
                <button type="button" id="reset-btn" class="btn-shadow float-left btn btn-link">Reset</button>
                <button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                <button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
            </div>
        </div>
    </div>

    </div>
  </div>
</sectiion>


  <!-- ======= Footer ======= -->
  
  <?php include 'includes/footer.php'; ?>

</body>

</html>