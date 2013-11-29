<?php /* Smarty version 2.6.26, created on 2013-11-29 22:39:13
         compiled from admin:entry/delete */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry_block', 'admin:entry/delete', 5, false),array('block', 'html_form', 'admin:entry/delete', 6, false),array('function', 'html_submit', 'admin:entry/delete', 14, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>
	
<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>
	
	<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<fieldset><legend><?php echo $this->_tpl_vars['panelstrings']['preview']; ?>
</legend>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "preview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</fieldset>
	<p><?php echo $this->_tpl_vars['panelstrings']['confirm']; ?>
</p>
	
		<input type="hidden" name="entry" value="<?php echo $this->_tpl_vars['id']; ?>
" />
		<div class="buttonbar">
		<?php echo smarty_function_html_submit(array('name' => 'delete','id' => 'delete','value' => $this->_tpl_vars['panelstrings']['ok']), $this);?>

		<?php echo smarty_function_html_submit(array('name' => 'cancel','id' => 'cancel','value' => $this->_tpl_vars['panelstrings']['cancel']), $this);?>

		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	