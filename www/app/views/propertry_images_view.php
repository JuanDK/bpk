<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('images', $attributes); ?>

<p>
        <label for="nameimage_guid">nameimage_guid</label>
        <?php echo form_error('nameimage_guid'); ?>
        <br /><input id="nameimage_guid" type="text" name="nameimage_guid" maxlength="32" value="<?php echo set_value('nameimage_guid'); ?>"  />
</p>

<p>
        <label for="filename">filename</label>
        <?php echo form_error('filename'); ?>
        <br /><input id="filename" type="text" name="filename" maxlength="255" value="<?php echo set_value('filename'); ?>"  />
</p>

<p>
        <label for="path">path</label>
        <?php echo form_error('path'); ?>
        <br /><input id="path" type="text" name="path" maxlength="255" value="<?php echo set_value('path'); ?>"  />
</p>

<p>
        <label for="description">description</label>
        <?php echo form_error('description'); ?>
        <br /><input id="description" type="text" name="description"  value="<?php echo set_value('description'); ?>"  />
</p>

<p>
        <label for="owner_id">owner_id</label>
        <?php echo form_error('owner_id'); ?>
        <br /><input id="owner_id" type="text" name="owner_id"  value="<?php echo set_value('owner_id'); ?>"  />
</p>

<p>
        <label for="property_id">property_id</label>
        <?php echo form_error('property_id'); ?>
        <br /><input id="property_id" type="text" name="property_id"  value="<?php echo set_value('property_id'); ?>"  />
</p>

<p>
        <label for="mime_type">mime_type</label>
        <?php echo form_error('mime_type'); ?>
        <br /><input id="mime_type" type="text" name="mime_type" maxlength="10" value="<?php echo set_value('mime_type'); ?>"  />
</p>

<p>
        <label for="orig_name">orig_name</label>
        <?php echo form_error('orig_name'); ?>
        <br /><input id="orig_name" type="text" name="orig_name" maxlength="255" value="<?php echo set_value('orig_name'); ?>"  />
</p>

<p>
        <label for="file_size">file_size</label>
        <?php echo form_error('file_size'); ?>
        <br /><input id="file_size" type="text" name="file_size"  value="<?php echo set_value('file_size'); ?>"  />
</p>

<p>
        <label for="width">width</label>
        <?php echo form_error('width'); ?>
        <br /><input id="width" type="text" name="width"  value="<?php echo set_value('width'); ?>"  />
</p>

<p>
        <label for="height">height</label>
        <?php echo form_error('height'); ?>
        <br /><input id="height" type="text" name="height"  value="<?php echo set_value('height'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
