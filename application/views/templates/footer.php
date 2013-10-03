	  <!-- Footer -->
	  <div class="container">

	  <footer class="row">
	    <section class="five columns">
                <h6>  Quantpost LLC </h6>
        <p>We understand mathematics, diffusive systems, simulation, machine learning and computer science, 
            but more importantly we understand trading.  
            Our advanced HFT systems have traded nearly a 
            billion shares and our options models give professionals real-world advantage.
            
        </p>
 	    </section>
	    
	    <section class="four columns offset-by-three">
	      &copy; 2012 Quantpost LLC
	      </br>
	      <p>
          <?php
            echo anchor('privacy_policy', 'Privacy Policy', array('title' => 'Privacy Policy'));    
          ?>
          &#124; 
          <?php
            echo anchor('terms_of_use', 'Terms Of Use', array('title' => 'Terms Of Use'));    
          ?>
          </p>
	      <p>For quick answers or help <a href="mailto:support@quantpost.com">email us &rarr;</a> </p>
              <p>To test RESTful interface <a href="index.php/Registration/rest_service">service &rarr;</a></p>
            
	    </section>
	  </footer>
	  <!-- /Footer -->

	</div>
	<!-- /Main Container -->

	<!-- Included JS Files -->
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>

  <script text="text/javascript"> 

    var _gaq = _gaq || [];
  	_gaq.push(
  	  ['_setAccount', 'UA-XXXXXXX-X'],
  	  ['_trackPageview'],
  	  ['b._setAccount', 'UA-XXXXXXX-X'],
  	  ['b._trackPageview'] 
  	);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

		/*$(document).on('click', '.src-download', function (event) {
			_gaq.push(['_trackEvent', 'Foundation', 'Downloaded']);
		});*/
  </script>

</body>
</html>