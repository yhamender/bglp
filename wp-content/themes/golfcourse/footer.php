<footer class="footer" role="contentinfo">
  <div class="container" style="width: 100%;">
  <div class="th-upper-footer">
    <div class="container">
      <div class="footer-widgets row th-widget-area">
        <div class="footer-area-1 col-md-3 col-sm-6">
          <section class="widget text-6 widget_text">
            <div class="widget-inner">
              <h3 class="widget-title"><a href="<?php echo site_url('about-sea');?>">About BGL Prestige </a></h3>
              <div class="textwidget">
           <p style="text-align: center;"><a href="<?php echo site_url('about-sea');?>">1999 vom jungen Golfprofessional und Wirtschaftsstudenten Jochen Mertl gegründet mit dem Ziel seine Geschäftstätigkeit auf das Golf-Veranstaltungsmanagement auszudehnen wurde die „BGL Prestige  Sport Eventmanagement Agentur“ 2001 in eine GmbH umfirmiert.</a></p>
           <p> <b> <a href="<?php echo site_url('about-sea');?>" style="float: right;">Read More..</a></b></p>
              </div>
            </div>
          </section>
        </div>
        <div class="footer-area-2 col-md-3 col-sm-6">
          <section class="widget text-5 widget_text">
            <div class="widget-inner">
              <h3 class="widget-title">Kontakt</h3>
              <div class="textwidget">
                <p>Mail : office@s-e-a.at</p>
                <p>Telefon: +43 664 2541675</p>
                <p>Telefon: +43 732 771260</p>
                <p>BGL Prestige  Sport Eventmanagement Agentur GmbH.</p>
                <p>Waldstrasse 18</p>
                <p>4616 Weisskirchen </p> 
               <p> ÖSTERREICH </p>
                
              </div>
            </div>
          </section>
        </div>
        <div class="footer-area-3 col-md-3 col-sm-6">
          <section class="widget text-4 widget_text">
            <div class="widget-inner">
              <h3 class="widget-title">Bürozeiten</h3>
              <div class="textwidget">
                <p>Mo-Fr: 9:00 - 16:00 Uhr</p>
                
              </div>
            </div>
          </section>
        </div>
        <div class="footer-area-4 col-md-3 col-sm-6">
          <section class="widget recent-posts-6 widget_recent_entries">
            <div class="widget-inner">
              <h3 class="widget-title">Recent Posts</h3>
              <ul>
                <li> <a href="#">Die neue BGL Prestige CARD</a> </li>
               
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="th-lower-footer">
    <div class="th-separator"></div>
    <div class="container">
      <div class="footer-widgets row th-widget-area">
        <div class="footer-area-1 col-sm-6">
          <section class="widget media_image-3 widget_media_image">
            <div class="widget-inner"></div>
          </section>
        </div>
        <div class="footer-area-2 col-sm-6">
          <section class="widget widget-social th-social-align-right">
            <div class="widget-inner pull-right">
              <div class="soc-widget"> <a target="_blank" href="#0"><i class="fa fa-facebook"></i></a><a target="_blank" href="#0"><i class="fa fa-twitter"></i></a><a target="_blank" href="#0"><i class="fa fa-instagram"></i></a><a href="#0"><i class="fa fa-pinterest"></i></a> </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div> 
</div>
</footer>
</body>
<?php if(is_user_logged_in()){ ?>
<script type="text/javascript">
  jQuery(".navbar-nav").append("<li><a href='<?php echo site_url('user-panel'); ?>'>User Dashboard</a></li>");
</script>
<?php } ?>
</html>