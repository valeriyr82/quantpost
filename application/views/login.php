

<div id="wrap" class="container">
    
    <div class="row registration">
        <div class="four columns centered">
            <h1><?php echo $page_title ?></h1>
        </div>
    </div>

    <div class="row">
        <div class="four columns centered">
            <div class="panel">
                <?php
                    $attributes = array('class' => 'nice', 'id' => 'myform');
                    echo form_open('landing/login', $attributes);
                ?>
                
                    <p>
                        <label for="platform_user_name">User Name *</label>
                        <input class="oversize input-text required" id="platform_user_name" name="name" type="text" 
                            value="<?php echo set_value('name'); ?>" placeholder="John J. Jones"/>
                        <?php 
                            if (form_error('name')) 
                                echo form_error('name', '<label class="error">', '</label>');
                        ?>
                    </p>                    
                    
                    <p>
                        <label for="platform_password">Password *</label>
                        <input class="oversize input-text required" id="platform_password" name="password" type="password" 
                            value="<?php echo set_value('password'); ?>" placeholder="Password"/>
                        <?php 
                            if (form_error('password')) 
                                echo form_error('password', '<label class="error">', '</label>');
                        ?>
                    </p>                    
                    <p>                        
                        <div class="text-right">
                            <button id="login" type="submit" class="nice radius button blue"><span>LOGIN</span></button>
                        </div>                        
                    </p>
                    
                </form>
            </div>
            
            <script>
                $(document).ready(function() {
                    // validate the comment form when it is submitted
                    $("#myform").validate();
                })                
            </script>

        </div>
        
    </div>
</div>
