
<!-- Grid BG -->
<div id="gridBg" class="container">

    <div class="row">
        <div class="one columns"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div><div class="one columns hide-on-phones"></div>
     
    </div><!-- /row -->
    
</div>

<style>
    
    
      .xperiment {
	/* supply height to ensure consistent positioning for every browser */
           font-family: "Helvetica Neue Light","Helvetica",Arial,sans-serif;
        font-weight: 300;
        font-style:  oblique;
	
	font-size:40px;
	color:#000;
	
}
   .xperiment1 {
	/* supply height to ensure consistent positioning for every browser */
           font-family: "Helvetica Neue ","Helvetica",Arial,sans-serif;
        font-weight: 300;
       
	
	font-size:80px;
	color:#000;
	
}
</style>


<!-- Header -->
<div  class="container">
    <div class="row">
        <header>
        <div class="twelve columns">
            <h1 class="xperiment1">PAMi</h1>
            <h2 class="xperiment"> Machine intelligence for your portfolio
            </h2>
         <!---  <h2 class="xperiment"> "...a new technology that eliminates direct analysis of strategies such as condors, straddles 
                or covered calls."
            </h2>
         --->
          <embed width="100%"src="images/pami7.svg" type="image/svg+xml" />
        </div>
        
        </header>
    </div><!-- /row -->
</div><!-- /container -->
<!-- /Header -->

<!-- Main Container -->
<div id="main" class="container">

        <!-- Value Props -->
        <section id="valueProps" class="row">
    
            <article class="four columns">
                <h4 id="quantpost">Quantpost</h4>
                <p>At Quantpost we are focused on capturing volatility on scales from milliseconds to months. 
                    Our advanced options analysis and HFT systems help our clients create a stream of opportunity
                    while all while managing and understanding risk.</p>

            </article>
    

            <article class="four columns">
                <h4 id="pami">PAMi</h4>
                <p>PAMi is a radical and new approach to options trading.  
                    You select your goal and PAMi determines the optimal pool of options you should hold.
                    It is simple to learn and easy to use.  Try it free by registering now.
                </p>
            </article>

            <article class="four columns">
                <h4 id="registration">Registration</h4>
                <p>We work with options traders, institutional investors, fund managers and investment advisors.  
                    Interested in PAMi, our HFT technologies or investing with our advisor partners?</p>
                    <p>
                        <?php { 
                    echo anchor('Registration/register', 'REGISTER TODAY &raquo;', array('class'=> "nice tan radius button",'title' => 'Register')); 
                }?>
                        
                        
                       <!--- <a href="/Registration/register" class="nice button tan radius">REGISTER TODAY &raquo;</a> 
                       -->
                    </p>
            </article>

        </section>

</div><!-- /main -->