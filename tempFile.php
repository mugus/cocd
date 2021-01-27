<div class="image-container set-full-height" style="background-image: url('assets/img/slide/slide-4.jpg')">
              
              <!--   Big container   -->
              <div class="container">
                  <div class="row">
                  <div class="col-sm-12 col-sm-offset-2">

                      <!--      Wizard container        -->
                      <div class="wizard-container">

                          <div class="card wizard-card" data-color="orange" id="wizardProfile">
                              <form action="" method="">
                                 <!--  You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                      <b>BUILD</b> REFUGEE PROFILE <br>
                                      <small>This information will let us know more about Refugee.</small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                  <ul>
                                      <li><a href="#about" data-toggle="tab">Part I: Personal Information</a></li>
                                      <li><a href="#account" data-toggle="tab">Account</a></li>
                                      <li><a href="#address" data-toggle="tab">Address</a></li>
                                  </ul>

                                </div>

                                  <div class="tab-content">
                                       <div class="tab-pane" id="about">
                                          <div class="row">
                                            <!-- <h5 class="info-text"> Fill The Form</h5> -->
                                            <div class="col-sm-4 col-sm-offset-1">
                                              <div class="picture-container">
                                                <div class="picture">
                                                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6>Choose Picture</h6>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label>Case Number <small>(required)</small></label>
                                                  <input name="casenumber" type="text" class="form-control" placeholder="1874...">
                                                </div>
                                                <div class="form-group">
                                                  <label>US Social Security Number <small>(required)</small></label>
                                                  <input name="snumber" type="text" class="form-control" placeholder="RS54...">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                  <label>Family Name <small>(Last name)</small></label>
                                                  <input name="firstname" type="text" class="form-control" placeholder="Salim...">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                  <label>Middle Name <small>(Surname)</small></label>
                                                  <input name="middlename" type="text" class="form-control" placeholder="Julius...">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                  <label>Given Name <small>(First name)</small></label>
                                                  <input name="givenname" type="text" class="form-control" placeholder="Mark...">
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control" placeholder="Salim@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1"></div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Date of Birth <small>(required)</small></label>
                                                    <input name="dob" type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1"></div>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Marital Status </label>
                                                    <select name="martal_status" id="" class="form-control" >
                                                        <option><small>...</small></option>
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Widow</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Gender </label>
                                                    <select name="gender" id="" class="form-control" >
                                                        <option><small>...</small></option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1"></div>
                                            <div class="col-sm-7 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Number Of Dependants <small>(Including Children)</small></label>
                                                    <input name="dependant_nbr" type="number" min="1" max="100" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1"></div>
                                            <div class="col-sm-4">
                                              <div class="form-group">
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
                                            <div class="col-sm-3">
                                              <div class="form-group">
                                                <label>City Of Birth</label>
                                                <input name="cityofbirth" type="text" class="form-control" placeholder="Nairobi">
                                              </div>
                                            </div>
                                            <div class="col-sm-3">
                                              <div class="form-group">
                                                <label>Present Nationality<small>(Citizenship)</small></label>
                                                <input name="nationalityatbirth" type="text" class="form-control" placeholder="Kenyan">
                                              </div>
                                            </div>
                                            <div class="col-sm-3">
                                              <div class="form-group">
                                                <label>Nationality at Birth</label>
                                                <input name="nationalityatbirth" type="text" class="form-control" placeholder="Kenyan">
                                              </div>
                                            </div>
                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label>Race, Ethnic, or Tribal Group</label>
                                                <input name="race" type="text" class="form-control" placeholder="Macao">
                                              </div>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="tab-pane" id="account">
                                          <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                          <div class="row">

                                              <div class="col-sm-10 col-sm-offset-1">
                                                  <div class="col-sm-4">
                                                      <div class="choice" data-toggle="wizard-checkbox">
                                                          <input type="checkbox" name="jobb" value="Design">
                                                          <div class="icon">
                                                              <i class="fa fa-pencil"></i>
                                                          </div>
                                                          <h6>Design</h6>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                      <div class="choice" data-toggle="wizard-checkbox">
                                                          <input type="checkbox" name="jobb" value="Code">
                                                          <div class="icon">
                                                              <i class="fa fa-terminal"></i>
                                                          </div>
                                                          <h6>Code</h6>
                                                      </div>

                                                  </div>
                                                  <div class="col-sm-4">
                                                      <div class="choice" data-toggle="wizard-checkbox">
                                                          <input type="checkbox" name="jobb" value="Develop">
                                                          <div class="icon">
                                                              <i class="fa fa-laptop"></i>
                                                          </div>
                                                          <h6>Develop</h6>
                                                      </div>

                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="tab-pane" id="address">
                                          <div class="row">
                                              <div class="col-sm-12">
                                                  <h4 class="info-text"> Are you living in a nice area? </h4>
                                              </div>
                                              <div class="col-sm-7 col-sm-offset-1">
                                                  <div class="form-group">
                                                      <label>Street Name</label>
                                                      <input type="text" class="form-control" placeholder="5h Avenue">
                                                    </div>
                                              </div>
                                              <div class="col-sm-3">
                                                  <div class="form-group">
                                                      <label>Street Number</label>
                                                      <input type="text" class="form-control" placeholder="242">
                                                    </div>
                                              </div>
                                              <div class="col-sm-5 col-sm-offset-1">
                                                  <div class="form-group">
                                                      <label>City</label>
                                                      <input type="text" class="form-control" placeholder="New York...">
                                                    </div>
                                              </div>
                                              <div class="col-sm-5">
                                                  <div class="form-group">
                                                      <label>Country</label><br>
                                                      <select name="country" class="form-control">
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
                                          </div>
                                      </div>
                                  </div>
                                  <div class="wizard-footer height-wizard">
                                      <div class="pull-right">
                                          <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                          <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                                      </div>

                                      <div class="pull-left">
                                          <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>

                              </form>
                          </div>
                      </div> <!-- wizard container -->
                  </div>
                  </div><!-- end row -->
              </div> <!--  big container -->

          </div>