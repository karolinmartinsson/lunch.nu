<style type="text/css">
	#license_status input {
		width: 200px;
	}
</style>

<?php
	/** 
	 * license status 
	 */	
	$license = isset($options['license_status']) ? unserialize($options['license_status']) : false;	

	$license_status = "<span style='color:red'>Unregistered</span>";
	$license_email = "<span style='color:red'>None</span>";
	$license_date = "<span style='color:red'>Not checked</span>";
	$license_site = "<span style='color:red'>None</span>";

	if($license)
	{
		// status
		if($license['status'])
		{
			$license_status = "<span style='color:blue'>";
			$license_status.= __('Registered',TONJOO_ECAE);
			$license_status.= "</span>";
		} else {
			$license_status = "<span style='color:red'>";
			$license_status.= __($license['message'],TONJOO_ECAE);
			$license_status.= "</span>";
		}

		// email
		if(isset($license['email']) && $license['email'] != 'false')
		{
			$license_email = "<span style='font-weight:bold'>{$license['email']}</span>";
		}
		else
		{
			$license_email = "<span style='color:red'>none</span>";
		}

		// date
		if(isset($license['date']) && $license['date'])
		{
			$license_date = $license['date'];
		}
		else
		{
			$license_date = "<span style='color:red'>not checked</span>";
		}

		// site
		if(isset($license['site']) && is_array($license['site']))
		{
			foreach ($license['site'] as $key => $value) 
			{
				$pos = strpos(home_url(), $value);

				if($pos !== false)
				{
					$license_site = $value;

					break;
				}
			}
		}

		// end license if true
	}
?>

<tr valign="top" id="license_status">
	<th scope="row">Your License Code</th>
	<td style="width: 300px;" colspan="2">
		<input type="text" name="tonjoo_ecae_options[license_key]" value="<?php echo $options['license_key'] ?>" style="width:300px;">
		<input type="submit" name="save_status_license" class="button-primary" value="Register / Check Status" />
	</td>
</tr>

<tr valign="top" id="license_status">
	<th scope="row">Last Checked</th>
	<td style="width: 300px;" colspan="2">
		<?php echo $license_date ?>
	</td>
</tr>

<tr valign="top" id="license_status">
	<th scope="row">Last Status</th>
	<td style="width: 300px;" colspan="2">
		<?php echo $license_status ?>
	</td>
</tr>

<?php if($license['status']): ?>
	<tr valign="top" id="license_status">
		<th scope="row">Licensed To</th>
		<td style="width: 300px;" colspan="2">
			<?php echo $license_email ?>
		</td>
	</tr>

	<tr valign="top" id="license_status">
		<th scope="row">Registered Sites</th>
		<td style="width: 300px;" colspan="2">
			<?php echo $license_site ?>
		</td>
	</tr>

	<tr valign="top" id="license_status">
		<th scope="row" colspan="3">
			<input type="submit" name="unset_license" class="button" value="Unregister this site" />
		</th>
	</tr>
<?php endif ?>

<tr valign="top">
	<th colspan=3>
		<?php 
			_e('Register your license code here to get all benefit of Easy Custom Auto Excerpt. ',TONJOO_ECAE);
			echo '<div style="height:10px;"></div>';
			_e('Find your license code at ',TONJOO_ECAE);
		?>		
		<a href="https://tonjoostudio.com/manage/plugin" target="_blank">https://tonjoostudio.com/manage/plugin</a>
	</th>
</tr>