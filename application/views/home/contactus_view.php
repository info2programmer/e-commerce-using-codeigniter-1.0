<!--content-->
  <div class="content">
    <!--contact-->
      <div class="mail-w3ls">
        <div class="container">
          <h2 class="tittle">Contact With Us</h2>
          <div class="mail-grids">
            <div class="mail-top">
              <div class="col-md-4 mail-grid">
                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                <h5>E-mail</h5>
                <p><a href="mailto:biva.publications@gmail.com"> biva.publications@gmail.com</a></p>
              </div>
              <div class="col-md-4 mail-grid">
                <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                <h5>Phone</h5>
                <p>+91 9434 343446</p><p>+91 9749 701988</p><p>+91 9903 308811</p>
              </div>
              <div class="col-md-4 mail-grid">
                <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                <h5>Address</h5>
                <p>BIVA Publication</p>
                <p>c/o- Kamal Pramanik</p>
                <p>1K Uday, Menoka Apartment</p>
                <p>Roypara, Hatiyara,Rajarhat,</p>
                <p>Kolkata-700157,</p>
                <p>Near Vivekananda Club</p>
              </div>


              <div class="clearfix"></div>
            </div>
            <!--<div class="map-w3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673607.6340751307!2d-104.44001811743372!3d48.738351336759585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5321f600f5170943%3A0x94f2e8e71e1dfc7a!2sE+Comertown+Rd%2C+Westby%2C+MT+59275%2C+USA!5e0!3m2!1sen!2sin!4v1467080368135"  allowfullscreen></iframe>
            </div>-->
            <div class="mail-bottom">
              <h4>Get In Touch With Us</h4>
              <?php if($this->session->flashdata('val_err')):  ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong align="center">Error!</strong><br/><?php echo $this->session->flashdata('val_err'); ?>
              </div>
            <?php elseif($this->session->flashdata('success_log')): ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong align="center">Error!</strong><br/><?php echo $this->session->flashdata('success_log'); ?>
              </div>
            <?php endif; ?>
              <?php echo form_open('home/contact'); ?>
                <input type="text" placeholder="Name" name="txtname" onfocus="" onblur="" required/>
                <input type="email" placeholder="Email" name="txtemail" onfocus="" onblur="" required/>
                <input type="number" placeholder="Phone" name="txtphone" onfocus="" onblur="" required style="width:365px"/>
                <textarea name="txtmsg" onfocus="" onblur="" required="" placeholder="Message...."></textarea>
                <input type="submit" value="Submit" name="btnSubmit" >
              <?php echo  form_close(); ?>
            </div>
          </div>
          <div class="col-md-12 text-center phy-stall">
            <h1>Our Physical Stall</h1>
          </div></br>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center stall-left">
            <p>SAHA BOOK STALL</p>
            <p>Stall No- 68, College Square (South)</p>
            <p>1 Surya Sen Street, Kolkata- 700 012</p>
            <p>Phone- +91 9874807210</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center stall-left">
            <p>CHUCKERVERTTY CHATTERJEE & CO. LTD.</p>
            <p>15 College Square, Kolkata- 700 073</p>
            <p>1st floor of Coffe House building</p>
            </br>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center stall-right">
            <p>CHUCKERVERTTY CHATTERJEE & CO. LTD.</p>
            <p>15 College Square, Kolkata- 700 073</p>
            <p>1st floor of Coffe House building</p>
            </br>
          </div>
        </div>
      </div>
    <!--contact-->
  </div>
<!--content-->
