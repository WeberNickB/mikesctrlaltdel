<script type="text/javascript">
  //<![CDATA[
	$(function()
  {
		$('#name').poshytip({
			className: 'tip-darkgray',
			showOn: 'focus',
			alignTo: 'target',
			alignX: 'right',
			alignY: 'center',
			offsetX: 5
		});
		$('#email').poshytip({
			className: 'tip-darkgray',
			showOn: 'focus',
			alignTo: 'target',
			alignX: 'right',
			alignY: 'center',
			offsetX: 5
		});
		$('#message').poshytip({
			className: 'tip-darkgray',
			showOn: 'focus',
			alignTo: 'target',
			alignX: 'right',
			alignY: 'center',
			offsetX: 5
		});
	});
	//]]>
</script>
<h3>
  Use this form to contact us about anything.  If you have questions about our services offered, or if you are a business that is wanting to partner with us to provide
  your customers with a truly useful service at no additional cost, we're here to guide you through the process.
</h3>
<hr />
  <?php echo Form::open('') ?>
  <fieldset>
  <?php if ( !empty($error)): ?>
  <p class="alert message"><?php echo $error ?></p>
 <?php endif; ?>
  
  
<p>
  <label for="name">* Name:</label>
  <br />
  <?php echo Form::input('name', '', array('id' => 'name', 'title' => 'Enter your full name.')); ?>
</p>

<p>
  <label for="email">* Email:</label>
  <br />
  <?php echo Form::input('email', '', array('id' => 'email', 'title' => 'Enter a valid e-mail.')); ?>
</p>

<p>
  <label for="message">* Comment:</label>
  <br />
    <?php echo Form::textarea('message', '', array('id' => 'message', 'title' => 'Enter your comment.')); ?>
</p>
<p>
   <div class="input"><?php echo Form::submit('submit'); ?></div>
</p>
</fieldset>

