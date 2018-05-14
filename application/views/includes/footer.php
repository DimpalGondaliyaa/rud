<style>
.go-to-top {
    background-color: rgba(0, 0, 0, 0.08);
    position: fixed;
    right: 25px;
    bottom: 20%;
    padding: 25px 15px;
    z-index: 100;
    line-height: 0;
}
.go-to-top:hover,.go-to-top:focus {
	    background-color: rgba(0, 0, 0, 0.15) !important;
    color: #a417af !important;
    text-shadow: 0px 2px 4px #00000085;
}
}
</style>
<div id="return-to-top" class="scrollTop">
    <span><a href="#" class="go-to-top btn btn-flat"><i class="fa fa-angle-up"></i></a></span>
  </div>


	 <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col col s12 m4">
                <h5 class="white-text">Contacts</h5>
                <div class="col s12 m12">
                  <p class="grey-text text-lighten-4 col s2 m1"><i class="fas fa-mobile-alt"></i></p>
                  <p class="grey-text text-lighten-4 col s10 m11"> 0423 191 084</p>
                </div>
                <div class="col s12 m12">
                  <p class="grey-text text-lighten-4 col s2 m1"><i class="far fa-envelope"></i></p>
                  <p class="grey-text text-lighten-4 col s10 m11">  debrabright88@icloud.com</p>
                </div>
              </div>
              <div class="col s12 m4 socialLinks">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/debra.bright.77" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/debrabrightm" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                  <li><a class="grey-text text-lighten-3" href="https://plus.google.com/+DebraMBright" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
                  <!--<li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-instagram"></i>  </a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Debra Bright | All Right Reserved
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>
            


	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>