<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('userdata', $attributes); ?>

<p>
        <label for="first_name">First Name <span class="required">*</span></label>
        <?php echo form_error('first_name'); ?>
        <br /><input id="first_name" type="text" name="first_name" maxlength="35" value="<?php echo set_value('first_name'); ?>"  />
</p>

<p>
        <label for="last_name">Last Name <span class="required">*</span></label>
        <?php echo form_error('last_name'); ?>
        <br /><input id="last_name" type="text" name="last_name"  value="<?php echo set_value('last_name'); ?>"  />
</p>

<p>
        <label for="email">email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="256" value="<?php echo set_value('email'); ?>"  />
</p>

<p>
        <label for="birth_date">Birth Date <span class="required">*</span></label>
        <?php echo form_error('birth_date'); ?>
        <br /><input id="birth_date" type="text" name="birth_date"  value="<?php echo set_value('birth_date'); ?>"  />
</p>

<p>
        <label for="phone_country_code">Phone Country Code <span class="required">*</span></label>
        <?php echo form_error('phone_country_code'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = $phone_country_code; ?>

        <br /><?php echo form_dropdown('phone_country_code', $options, set_value('phone_country_code'))?>
</p>                                             
                        
<p>
        <label for="phone_number">Phone number <span class="required">*</span></label>
        <?php echo form_error('phone_number'); ?>
        <br /><input id="phone_number" type="text" name="phone_number" maxlength="8" value="<?php echo set_value('phone_number'); ?>"  />
</p>

<p>
	
        <?php echo form_error('phone_is_mobile'); ?>
        
        <?php // Change the values/css classes to suit your needs ?>
        <br /><input type="checkbox" id="phone_is_mobile" name="phone_is_mobile" value="1" class="" <?php echo set_checkbox('phone_is_mobile', '1',TRUE); ?>> 
                   
	<label for="phone_is_mobile">Mobile?</label>
</p> 

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
