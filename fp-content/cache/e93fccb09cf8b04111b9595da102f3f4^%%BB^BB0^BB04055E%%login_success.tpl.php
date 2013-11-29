<?php /* Smarty version 2.6.26, created on 2013-11-29 22:34:58
         compiled from /var/www/flatpress-csi-280/fp-interface/sharedtpls/login_success.tpl */ ?>
<?php if ($_REQUEST['do']['logout']): ?>
<p><?php echo $this->_tpl_vars['lang']['login']['success']['logout']; ?>
</p>
<?php if ($_REQUEST['redirect']): ?>
<p><?php echo $this->_tpl_vars['lang']['login']['success']['redirect']; ?>
 <a href="<?php echo $_REQUEST['redirect']; ?>
"><?php echo $_REQUEST['redirect']; ?>
</a>
<?php endif; ?>

<ul>
	<li><a href="index.php"><?php echo $this->_tpl_vars['lang']['login']['success']['opt1']; ?>
</a></li>
</ul>
<?php else: ?>
<p><?php echo $this->_tpl_vars['lang']['login']['success']['success']; ?>
</p>
<?php if ($this->_tpl_vars['redirect']): ?>
<p><?php echo $this->_tpl_vars['lang']['login']['success']['redirect']; ?>

<?php endif; ?>

<ul>
	<li><a href="<?php echo @BLOG_BASEURL; ?>
">
		<?php echo $this->_tpl_vars['lang']['login']['success']['opt1']; ?>

	</a></li>
	<li><a href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=main">
		<?php echo $this->_tpl_vars['lang']['login']['success']['opt2']; ?>

	</a></li>
	<li><a href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=entry&amp;action=write">
		<?php echo $this->_tpl_vars['lang']['login']['success']['opt3']; ?>

	</a></li>
</ul>
<?php endif; ?>