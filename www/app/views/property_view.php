<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('property', $attributes); ?>

<p>
        <label for="owner_id">owner_id</label>
        <?php echo form_error('owner_id'); ?>
        <br /><input id="owner_id" type="text" name="owner_id"  value="<?php echo set_value('owner_id'); ?>"  />
</p>

<p>
        <label for="type_code">type_code</label>
        <?php echo form_error('type_code'); ?>
        <br /><input id="type_code" type="text" name="type_code"  value="<?php echo set_value('type_code'); ?>"  />
</p>

<p>
        <label for="address_streename">address_streename <span class="required">*</span></label>
        <?php echo form_error('address_streename'); ?>
        <br /><input id="address_streename" type="text" name="address_streename" maxlength="40" value="<?php echo set_value('address_streename'); ?>"  />
</p>

<p>
        <label for="address_streetnumber">address_streetnumber <span class="required">*</span></label>
        <?php echo form_error('address_streetnumber'); ?>
        <br /><input id="address_streetnumber" type="text" name="address_streetnumber"  value="<?php echo set_value('address_streetnumber'); ?>"  />
</p>

<p>
        <label for="address_suppl">address_suppl</label>
        <?php echo form_error('address_suppl'); ?>
        <br /><input id="address_suppl" type="text" name="address_suppl" maxlength="5" value="<?php echo set_value('address_suppl'); ?>"  />
</p>

<p>
        <label for="post_code">post_code <span class="required">*</span></label>
        <?php echo form_error('post_code'); ?>
        <br /><input id="post_code" type="text" name="post_code" maxlength="8" value="<?php echo set_value('post_code'); ?>"  />
</p>

<p>
        <label for="city">city <span class="required">*</span></label>
        <?php echo form_error('city'); ?>
        <br /><input id="city" type="text" name="city" maxlength="40" value="<?php echo set_value('city'); ?>"  />
</p>

<p>
        <label for="country_code">country_code <span class="required">*</span></label>
        <?php echo form_error('country_code'); ?>
        <br /><input id="country_code" type="text" name="country_code" maxlength="2" value="<?php echo set_value('country_code'); ?>"  />
</p>

<p>
        <label for="size_mtq">size_mtq <span class="required">*</span></label>
        <?php echo form_error('size_mtq'); ?>
        <br /><input id="size_mtq" type="text" name="size_mtq"  value="<?php echo set_value('size_mtq'); ?>"  />
</p>

<p>
        <label for="rooms">rooms <span class="required">*</span></label>
        <?php echo form_error('rooms'); ?>
        <br /><input id="rooms" type="text" name="rooms"  value="<?php echo set_value('rooms'); ?>"  />
</p>

<p>
        <label for="rent">rent <span class="required">*</span></label>
        <?php echo form_error('rent'); ?>
        <br /><input id="rent" type="text" name="rent"  value="<?php echo set_value('rent'); ?>"  />
</p>

<p>
        <label for="currency">currency <span class="required">*</span></label>
        <?php echo form_error('currency'); ?>
        <br /><input id="currency" type="text" name="currency" maxlength="3" value="<?php echo set_value('currency'); ?>"  />
</p>

<p>
        <label for="rent_add">rent_add</label>
        <?php echo form_error('rent_add'); ?>
        <br /><input id="rent_add" type="text" name="rent_add"  value="<?php echo set_value('rent_add'); ?>"  />
</p>

<p>
        <label for="deposit">deposit</label>
        <?php echo form_error('deposit'); ?>
        <br /><input id="deposit" type="text" name="deposit"  value="<?php echo set_value('deposit'); ?>"  />
</p>

<p>
        <label for="date_available">date_available <span class="required">*</span></label>
        <?php echo form_error('date_available'); ?>
        <br /><input id="date_available" type="text" name="date_available"  value="<?php echo set_value('date_available'); ?>"  />
</p>

<p>
        <label for="date_created">date_created</label>
        <?php echo form_error('date_created'); ?>
        <br /><input id="date_created" type="text" name="date_created"  value="<?php echo set_value('date_created'); ?>"  />
</p>

<p>
        <label for="date_modified">date_modified</label>
        <?php echo form_error('date_modified'); ?>
        <br /><input id="date_modified" type="text" name="date_modified"  value="<?php echo set_value('date_modified'); ?>"  />
</p>

<p>
        <label for="status_code">status_code</label>
        <?php echo form_error('status_code'); ?>
        <br /><input id="status_code" type="text" name="status_code"  value="<?php echo set_value('status_code'); ?>"  />
</p>

<p>
        <label for="furnished_code">furnished_code</label>
        <?php echo form_error('furnished_code'); ?>
        <br /><input id="furnished_code" type="text" name="furnished_code"  value="<?php echo set_value('furnished_code'); ?>"  />
</p>

<p>
        <label for="pets_ok">pets_ok</label>
        <?php echo form_error('pets_ok'); ?>
        <br /><input id="pets_ok" type="text" name="pets_ok"  value="<?php echo set_value('pets_ok'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
