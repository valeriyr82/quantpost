

<div id="wrap" class="container">
    
    <div class="row registration">
        <div class="eight columns">
            <h1><?php echo $page_title ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <div class="panel">
                <h3>Set Client Information</h3><br/>
                <p>For example, id is 1.</p>
                <?php
                    $attributes = array('class' => 'nice', 'id' => 'setClientInfoForm');
                    echo form_open('api/client_info/client', $attributes);
                ?>
                
                    <input type="hidden" id="id" name="id" value="1"/>
                    
                    <p>
                        <label for="info_user_name">Your Full Name *</label>
                        <input class="oversize input-text required" id="info_user_name" name="name" type="text" 
                            value="<?php echo set_value('name'); ?>" placeholder="John J. Jones"/>
                        <?php 
                            if (form_error('name')) 
                                echo form_error('name', '<label class="error">', '</label>');
                        ?>
                    </p>                    

                    <p>
                        <label for="info_email">Email * </label> 
                        <input type="email" class="oversize input-text required" id="info_email" name="email" 
                            placeholder="Enter a valid email address" value="<?php echo set_value('email'); ?>"/>                        
                        <?php 
                            if (form_error('email')) 
                                echo form_error('email', '<label class="error">', '</label>');
                        ?>
                    </p>                    

                    <p>
                        <label for="info_url">Website or LinkedIn URL *</label>
                        <input class="oversize input-text required" id="info_url" type="url" name="url" placeholder="http://jpmorgan.com"
                            value="<?php echo set_value('url'); ?>"/>                                         
                        <?php 
                            if (form_error('url'))
                                echo form_error('url', '<label class="error">', '</label>'); 
                        ?>
                    </p>                    
                    
                    <p id="terms">
                        <div class="text-right">
                            <button id="set-info" type="submit" class="nice radius button tan"><span>Set Info</span></button>
                        </div>                        
                    </p>
                    
                </form>
                
                <h3>Get Client Information</h3><br/>
                <p>For example, id is 1.</p>
                <div class="row">
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_info/client/id/1') ?>" />Get Info (XML)</a>
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_info/client/id/1/format/json') ?>" />Get Info (JSON)</a>
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_info/client/id/1/format/csv') ?>" />Get Info (CSV)</a>
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_info/client/id/1/format/csv') ?>" id="client_info_ajax" />Get Info (AJAX)</a>
                    <script>
                    $(function(){
                        $('#setClientInfoForm').validate();
                        // Bind a click event to the 'ajax' object id
                        $("#client_info_ajax").bind("click", function( evt ){
                            // Javascript needs totake over. So stop the browser from redirecting the page
                            evt.preventDefault();
                            // AJAX request to get the data
                            $.ajax({
                                // URL from the link that was clicked on
                                url: $(this).attr("href"),
                                // Success function. the 'data' parameter is an array of objects that can be looped over
                                success: function(data, textStatus, jqXHR){
                                    alert(data);
                                },
                                // Failed to load request. This could be caused by any number of problems like server issues, bad links, etc.
                                error: function(jqXHR, textStatus, errorThrown){
                                    alert('Oh no! A problem with the AJAX request!');
                                }
                            });
                        });
                    }); 
                    </script>
                </div>
                <br/>
            </div>
        </div>    
        <div class="six columns">
            <div class="panel">
                <h3>Set Model Usage Information</h3><br/>
                <p>For example, id is 1.</p>
                <?php
                    $attributes = array('class' => 'nice', 'id' => 'setClientModelForm');
                    echo form_open('api/client_model_use/model', $attributes);
                ?>
                
                    <input type="hidden" id="id" name="id" value="1"/>
                    
                    <p>
                        <label for="usage_email">Email * </label> 
                        <input type="email" class="oversize input-text required" id="usage_email" name="email" 
                            placeholder="Enter a valid email address" value="<?php echo set_value('email'); ?>"/>                        
                        <?php 
                            if (form_error('email')) 
                                echo form_error('email', '<label class="error">', '</label>');
                        ?>
                    </p>                    

                    <p>
                        <label for="usage_symbol">Symbol *</label>
                        <input class="oversize input-text required" id="usage_symbol" name="symbol" type="text" 
                            value="<?php echo set_value('symbol'); ?>" placeholder="Enter a symbol"/>
                        <?php 
                            if (form_error('symbol')) 
                                echo form_error('symbol', '<label class="error">', '</label>');
                        ?>
                    </p>                    
                    
                    <p>
                        <label for="usage_model">Model *</label>
                        <input class="oversize input-text required" id="usage_model" name="model" type="text" 
                            value="<?php echo set_value('model'); ?>" placeholder="Enter a model"/>
                        <?php 
                            if (form_error('model')) 
                                echo form_error('model', '<label class="error">', '</label>');
                        ?>
                    </p>
                    
                    <p>
                        <label for="usage_capital">Capital *</label>
                        <input class="oversize input-text required" id="usage_capital" name="capital" type="text" 
                            value="<?php echo set_value('capital'); ?>" placeholder="Enter a capital"/>
                        <?php 
                            if (form_error('capital')) 
                                echo form_error('capital', '<label class="error">', '</label>');
                        ?>
                    </p>

                    <p>
                        <label for="usage_summary">Summary *</label>
                        <input class="oversize input-text required" id="usage_summary" name="summary" type="text" 
                            value="<?php echo set_value('summary'); ?>" placeholder="Enter a capital"/>
                        <?php 
                            if (form_error('summary')) 
                                echo form_error('summary', '<label class="error">', '</label>');
                        ?>
                    </p>
                    
                    <p id="terms">
                        <div class="text-right">
                            <button id="set-usage" type="submit" class="nice radius button tan"><span>Set Info</span></button>
                        </div>                        
                    </p>
                    
                </form>
                
                <h3>Get Model Usage Information</h3><br/>
                <p>For example, id is 1.</p>
                <div class="row">
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_model_use/model/id/1') ?>" />Get Info (XML)</a>
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_model_use/model/id/1/format/json') ?>" />Get Info (JSON)</a>
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_model_use/model/id/1/format/csv') ?>" />Get Info (CSV)</a>
                    <a class="nice radius button tan" href="<?php echo site_url('api/client_model_use/model/id/1/format/csv') ?>" id="client_model_ajax" />Get Info (AJAX)</a>
                    <script>
                    $(function(){
                        $('#setClientModelForm').validate();
                        // Bind a click event to the 'ajax' object id
                        $("#client_model_ajax").bind("click", function( evt ){
                            // Javascript needs totake over. So stop the browser from redirecting the page
                            evt.preventDefault();
                            // AJAX request to get the data
                            $.ajax({
                                // URL from the link that was clicked on
                                url: $(this).attr("href"),
                                // Success function. the 'data' parameter is an array of objects that can be looped over
                                success: function(data, textStatus, jqXHR){
                                    alert(data);
                                },
                                // Failed to load request. This could be caused by any number of problems like server issues, bad links, etc.
                                error: function(jqXHR, textStatus, errorThrown){
                                    alert('Oh no! A problem with the AJAX request!');
                                }
                            });
                        });
                    }); 
                    </script>
                </div>
                <br/>
            </div>
            
        </div>
        
    </div>
        
    <div class="row">
        <div class="six columns">
            <div class="panel">
                <h3>Register Client</h3><br/>
                <?php
                    $attributes = array('class' => 'nice', 'id' => 'registerClientInfoForm');
                    echo form_open('api/client_register/register', $attributes);
                ?>
                
                    <p>
                        <label for="reg_user_name">Your Full Name *</label>
                        <input class="oversize input-text required" id="reg_user_name" name="name" type="text" 
                            value="<?php echo set_value('name'); ?>" placeholder="John J. Jones"/>
                        <?php 
                            if (form_error('name')) 
                                echo form_error('name', '<label class="error">', '</label>');
                        ?>
                    </p>                    

                    <p>
                        <label for="reg_email">Email * </label> 
                        <input type="email" class="oversize input-text required" id="reg_email" name="email" 
                            placeholder="Enter a valid email address" value="<?php echo set_value('email'); ?>"/>                        
                        <?php 
                            if (form_error('email')) 
                                echo form_error('email', '<label class="error">', '</label>');
                        ?>
                    </p>                    

                    <p>
                        <label for="reg_url">Website or LinkedIn URL *</label>
                        <input class="oversize input-text required" id="reg_url" type="url" name="url" placeholder="http://jpmorgan.com"
                            value="<?php echo set_value('url'); ?>"/>                                         
                        <?php 
                            if (form_error('url'))
                                echo form_error('url', '<label class="error">', '</label>'); 
                        ?>
                    </p>                    
                    
                    <p id="terms">
                        <div class="text-right">
                            <button id="reg-info" type="submit" class="nice radius button tan"><span>Register</span></button>
                        </div>                        
                    </p>
                    
                </form>
                <script>
                    $(function(){
                        $('#registerClientInfoForm').validate();
                    });
                </script>
            </div>

        </div>        
        
        <div class="six columns">
            <div class="panel">
                <h3>UnRegister Client</h3><br/>
                <?php
                    $attributes = array('class' => 'nice', 'id' => 'unregisterClientInfoForm');
                    echo form_open('api/client_register/unregister', $attributes);
                ?>
                
                    <p>
                        <label for="unreg_email">Email * </label> 
                        <input type="email" class="oversize input-text required" id="unreg_email" name="email" 
                            placeholder="Enter a valid email address" value="<?php echo set_value('email'); ?>"/>                        
                        <?php 
                            if (form_error('email')) 
                                echo form_error('email', '<label class="error">', '</label>');
                        ?>
                    </p>                    

                    <p id="terms">
                        <div class="text-right">
                            <button id="unreg-info" type="submit" class="nice radius button tan"><span>UnRegister</span></button>
                        </div>                        
                    </p>
                    
                </form>
                <script>
                    $(function(){
                        $('#unregisterClientInfoForm').validate();
                    });
                </script>
            </div>

        </div>        
        
        <script>
            $(document).ready(function() {
                // validate the comment form when it is submitted
                $("#myform").validate();
            })                
        </script>
        
    </div>
</div>

