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
<!-- <div id="return-to-top" class="scrollTop">
    <span><a href="#" class="go-to-top btn btn-flat"><i class="fa fa-angle-up"></i></a></span>
  </div>


	 <footer class="page-footer">
          <div class="container">
            <div class="row">
            
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 inContact | All Right Reserved
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer> -->
            


	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>