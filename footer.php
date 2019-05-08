<?php   
echo '<footer>
    <div class="footer-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8">
                    <div class="wrraper">
                            <img src="assets/images/footer/footer1.png" class="img-fluid footer-logo" alt="logo">
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4">
                        <ul class="social-media-icons">
                                <a href="#">
                                    <li>
                                        <img src="assets/images/footer/facebook.png" class="img-fluid">
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="assets/images/footer/twitter.png" class="img-fluid">
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <img src="assets/images/footer/linkedin.png" class="img-fluid">
                                    </li>
                                </a>

                            </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xs-12">
                    <p>ITWORX is a global IT Services firm providing Cloud-based and On-premise solutions to the
                        world’s leading organizations with an emphasis on Advanced Analytics, Enterprise Mobility,
                        Performance Management, and CRM. </p>
                    <br>
                    <p>ITWORX has a 20-year proven track record building award-winning solutions for Telco, Banking,
                        Manufacturing, Agriculture, and Government. </p>
                    <img src="assets/images/footer/footer2.png" class="img-fluid footer-logo" alt="logo" id="marging-bottom">
                    <p> TWORX HUB is an enterprise-grade digital workplace that offers you an integrated employee
                        experience, facilitating collaboration, as well as access to enterprise applications,
                        internal tools, and shared documents.</p>
                    <div class="row">
                        <div class="col" id="Copyright">
                            <span> &copy; Copyright 2018 ITWORX. All Rights Reserved </span>
                        </div>
                    </div>
                </div>
                <!-- block for the menu  -->
                <div class="col-lg-3
                 col-xs-12 nav-menu">
                        <div class="footer-navigationbar">
                            <ul class="footer-menu">

                                <li>
                                    <a href="index.php">Home </a>
                                </li>



                                <li>
                                    <a href="pricing.php">Pricing </a>
                                </li>


                                <li>
                                    <a href="blogs.php">Blogs </a>
                                </li>

                            </ul>
                      
        
                            <ul class="footer-menu">

                                <li>
                                    <a href="#">Support </a>
                                </li>


                                <li>
                                    <a href="terms-of-use.php">Terms of Use </a>
                                </li>


                                <li>
                                    <a href="privacy-policy.php">Privacy Policy </a>
                                </li>




                            </ul>
                        </div>
                        </div>
                   
                
                <!-- end of block  -->






                <div class="col-lg-4 col-xs-12">
                    <div>
                        <form>
                            <div class="form-group" id="contact-us">
                             
                              <input type="email" class="form-control" id="Name_contactus" aria-describedby="emailHelp" placeholder="Name...">
                              <input type="email" class="form-control" id="Title_contactus" aria-describedby="emailHelp" placeholder="Title...">
                              <input type="email" class="form-control" id="Phone_contactus" aria-describedby="emailHelp" placeholder=" Number...">
                              <input type="email" class="form-control" id="Organization_contactus" aria-describedby="emailHelp" placeholder="Organization...">

                              <div class="country-form">
                                    <select class="form-control" id="Country_contactus" aria-describedby="emailHelp" placeholder="Country">

                                        <option>Country</option>
                                        <option>option1</option>
                                        <option>option2</option>
                                        <option>option3</option>
                                        <option>option4</option>
                                    </select>

                                    <div class="double-arrow">
                                        <i class="fas fa-angle-double-down"></i>
                                    </div>
                                </div>
                                <textarea class="form-control" id="Message_contactus" rows="3" placeholder="Message.."></textarea>
                            </div>
                           
                            <a href="javascript:post_contact();" class="button3">SUBMIT</a>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- modal calling  -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Request A Demo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <input type="email" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Name...">

                <input type="email" class="form-control" id="Title" aria-describedby="emailHelp" placeholder="Title...">
                <input type="email" class="form-control" id="Phone" aria-describedby="emailHelp" placeholder="Phone Number...">

                <input type="email" class="form-control" id="Organization" aria-describedby="emailHelp" placeholder="Organization...">

                <div class="country-form">
                    <select class="form-control" id="Country" aria-describedby="emailHelp" placeholder="Country...">

                        <option>Country</option>
                        <option>option1</option>
                        <option>option2</option>
                        <option>option3</option>
                        <option>option4</option>
                    </select>
                    <div class="double-arrow">
                        <i class="fas fa-angle-double-down"></i>
                    </div>
                </div>
                <textarea class="form-control" id="Message" rows="3" placeholder="Message.."></textarea>
                <div class="modal-footer">
                    <button type="button" id="cancelbtn" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                    <button type="button" id="request-demo-submit" class="btn btn-primary">submit</button>
                </div>
        </div>
       
    </div>
</div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submitmodel" id="hiddenmsgbtn" style="display:none;"></button>
<div class="modal fade" id="submitmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitmodelLongTitle">Request A Demo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div>submitted</div>
            </div>
                          <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    </div>
          
           
        </div>
    </div>
</div>
    <script src="js/jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/fonts/fontawesome-free-5.1.1-web/js/all.min.js"></script>
    <script src="js/pages-scripts/posting-forms.js"></script>
    <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   
    
    
  
     
 


 
   
   
 
    
  
  </body>
  


    
  
' ;
?>