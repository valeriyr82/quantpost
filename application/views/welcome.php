<?php

$confirmPAMi = <<<EOT
OAM[50000,AAPL]
EOT;
            
$helpPAMi = <<<EOT
help
EOT;

$examplePAMi = <<<EOT
OAM[10000,CSCO]
EOT;

$modelsPAMi = <<<EOT
models
EOT;
?>



<div id="wrap" class="container">
    
    <div class="row registration">
        <div class="twelve columns">
             <p><h1>Welcome <?php echo $name ?></1></p>
        </div>
    </div>

    <div class="row">
        <div class="eight columns">
           
        
                <p>
                    PAMi is a cloud based system that responds to your analysis requests through email.  Please take a few moments to verify that
                    you understand the basics and that PAMi can communicate with you:     
                </p> 
                
                
                                <div class="panel">

                <h4>Confirm that your email is <?php echo $email ?></h4>
                <p>
                    If this is not correct please use the back arrow to correct again.
                </p>
                
            </div>
                <div class="panel">

                <h4>Confirm that you can receive a response</h4>
                <p>
                 To confirm that you have registered properly and that PAMi can deliver results to you please press the
                    button and send the generated email. When it arrives take a moment to confirm that you can open the attachments.
                </p>
              

                <form>
                    <input type="button" class="nice radius medium button tan" value="Test"
                           onClick="location.href='mailto:pami@quantpost.com?subject=$name:Testing PAMi&body=<?php echo $confirmPAMi?>'">
                </form>

                <p>
                    You may have to refresh your email client. If you do not receive a response within a minute or two check to
                    see that your spam filter is not capturing the email.  Also, check the value of the retrieval frequency in your email 
                    client preferences.
                </p>
                
              
            </div>
                
     
            <div class="panel">

                <h4>Requesting help</h4>
                <p>
                To request a summary of the instructions and current manual for using PAMi simply place the word help in the
                body of an email and send it to pami@quantpost.com.  Try it now by pressing the button below.
                </p>
                <form>
                    <input type="button" class="nice radius medium button tan" value="Help"
                           onClick="location.href='mailto:pami@quantpost.com?subject=$name:Help&body=<?php echo $helpPAMi?>'">
                </form>
           

            </div>
                         <div class="panel">

                <h4>Simple example</h4>
                
                <p>
                To get started press the button below. Take a moment to review the request.  Change CSCO to IBM and repeat.  Review 
                the results and consult the manual.
                </p>
                <form>
                    <input type="button" class="nice radius medium button tan" value="Example"
                           onClick="location.href='mailto:pami@quantpost.com?subject=$name:Example&body=<?php echo $examplePAMi?>'">
                </form>
            </div>
                         <div class="panel">

                <h4>Requesting available symbols</h4>
                <p>Simple type the word models in the body of an email addressed to pami@quantpost.co.</p>

                <form>
                    <input type="button" class="nice radius medium button tan" value="Symbols"
                           onClick="location.href='mailto:pami@quantpost.com?subject=$name:Models&body=<?php echo $modelsPAMi?>'">
                </form>
            </div>
        </div>
              <div class="four columns">
            <div class="panel">
               <h4>Problems?</h4>
                <p>
                    PAMi is a robust system designed to work with even the most secure email environments. However, 
                    if you are having a problem using PAMi or have questions please contact support@quantpost.com 
                </p>                     
            </div><!-- /panel -->
        </div><!-- /four -->
    </div><!-- /row -->
    </div>     
</div><!-- /main -->