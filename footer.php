<!-- Footer -->
   <!-- <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e"> -->
   <footer id="footer" class="footer" data-bg-color="#25272e">
    <div class="container pt-40 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-12 col-md-6">
          <div class="widget dark">
            <img class="mt-5 mb-10" height="100" alt="" src="images/logo/footer-logo.png">
            <!-- <p><b class="text-white">Rajkot Mahajan Panjrapole</b> -->
            <ul class="list-inline mt-5 pb-15">
              <li class="m-0 pl-10 pr-10 post-title"> <i style="font-size: 20px;" class="fa fa-envelope-o text-theme-colored mr-5"></i> <a target="_blank" href="mailto:info@rajkotmahajanpanjarapole.org">info@rajkotmahajanpanjarapole.org</a> </li>
              <li class="m-0 pl-10 pr-10 post-title"> <i style="font-size: 24px;" class="fa fa-map-marker  text-theme-colored mr-15"></i><a target="_blank" href="https://maps.app.goo.gl/myGAK7QZaPiJkAQ18">Bhavnagar Road, Nr. Aaji River Bank, Rajkot - 360003, Gujarat, India.</a> </li>
              <li class="m-0 pl-10 pr-10 post-title"> <i style="font-size: 20px;" class="fa fa-clock-o  text-theme-colored mr-10"></i><a>365 Days: 8:00 AM - 6:00 PM</a> </li>
            </ul>
            <a href="brochure/panjarapole-gujarati-brochure.pdf" target="_blank" class="btn btn-dark btn-theme-colored">Gujarati Brochure</a>
            <!-- <a href="brochure.pdf" target="_blank" class="btn btn-dark btn-theme-colored">English Brochure</a> -->
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="index">Home</a></li>
              <li><a href="aboutus">About</a></li>
              <li><a href="gallery">Gallery</a></li>
              <li><a href="policy">Policy</a></li>
              <li><a href="contactus">Contact Us</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Upcoming Event</h5>
            <div class="latest-posts">
              <?php
                  $link=mysqli_connect("localhost","root","") or die(mysqli_error("not connect"));
                  mysqli_select_db($link,"panjarapole")or die(mysqli_error($link));

                  $query = "select date, MONTHNAME(date) AS MONTHNAME, name, description from events where date>=curdate() ORDER BY date ASC LIMIT 3";
                  $res = mysqli_query($link, $query) or die ("not execute");
                  while($row = mysqli_fetch_assoc($res)){
              ?>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb"><img alt="" src="images/footer-logo.png" height="55" width="55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5">
                    <a> <?php echo $row['name']; ?> </a>
                  </h5>
                  <p class="post-date mb-0 font-12"><?php echo substr($row['date'], 8, 2)." ".substr($row['MONTHNAME'], 0, 3); ?></p>
                </div>
              </article>
              <?php } ?>
             
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 sm-text-center m-0">
            2024, Rajkot Mahajan Panjarapole. All rights reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="policy">Terms & Conditions</a>
                </li>
                <li>|</li>
                <li>
                  <a href="policy#privacy-policy">Privacy Policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="policy#refund-policy">Refund Policy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>