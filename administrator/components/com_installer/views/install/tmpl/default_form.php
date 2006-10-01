<script language="javascript" type="text/javascript">
<!--
	function submitbutton3(pressbutton) {
		var form = document.adminForm_dir;

		// do field validation
		if (form.userfile.value == ""){
			alert( "<?php echo JText::_( 'Please select a directory', true ); ?>" );
		} else {
			form.submit();
		}
	}

	function submitbutton4(pressbutton) {
		var form = document.webinstall;

		// do field validation
		if (form.userfile.value == ""){
			alert( "<?php echo JText::_( 'Please enter a URL', true ); ?>" );
		} else {
			form.submit();
		}
	}
//-->
</script>

<form enctype="multipart/form-data" action="index.php" method="post" name="filename">

	<table class="adminform">
	<tr>
		<th colspan="2"><?php echo JText::_( 'Upload Package File' ); ?></th>
	</tr>
	<tr>
		<td width="120">
           	<label for="install_package"><?php echo JText::_( 'Package File' ); ?>:</label>
		</td>
		<td>
			<input class="input_box" id="install_package" name="userfile" type="file" size="57" />
			<input class="button" type="submit" value="<?php echo JText::_( 'Upload File' ); ?> &amp; <?php echo JText::_( 'Install' ); ?>" />
		</td>
	</tr>
	</table>

	<input type="hidden" name="installtype" value="upload" />
	<input type="hidden" name="task" value="doInstall" />
	<input type="hidden" name="option" value="com_installer" />
</form>

<form enctype="multipart/form-data" action="index.php" method="post" name="adminForm_dir">
	<table class="adminform">
	<tr>
		<th colspan="2"><?php echo JText::_( 'Install from directory' ); ?></th>
	</tr>
	<tr>
		<td width="120">
           	<label for="install_directory"><?php echo JText::_( 'Install directory' ); ?>:</label>
		</td>
		<td>
			<input type="text" id="install_directory" name="userfile" class="input_box" size="70" value="<?php echo $this->state->get('install.directory'); ?>" />
			<input type="button" class="button" value="<?php echo JText::_( 'Install' ); ?>" onclick="submitbutton3()" />
		</td>
	</tr>
	</table>

	<input type="hidden" name="installtype" value="folder" />
	<input type="hidden" name="task" value="doInstall" />
	<input type="hidden" name="option" value="com_installer" />
</form>

<form enctype="multipart/form-data" action="index.php" method="post" name="webinstall">
	<table class="adminform">
	<tr>
	  	<th colspan="2"><?php echo JText::_( 'Install from URL' ); ?></th>
	</tr>
	<tr>
	  	<td width="120">
	    	<label for="install_url"><?php echo JText::_( 'Install URL' ); ?>:</label>
		</td>
		<td>
	    	<input type="text" id="install_url" name="userfile" class="input_box" size="70" value="http://" />
	       	<input type="button" class="button" value="<?php echo JText::_( 'Install' ); ?>" onclick="submitbutton4()" />
	  	</td>
	</tr>
	</table>

	<input type="hidden" name="installtype" value="url" />
	<input type="hidden" name="task" value="doInstall" />
	<input type="hidden" name="option" value="com_installer" />
</form>
