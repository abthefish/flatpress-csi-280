<?php /* Smarty version 2.6.26, created on 2013-11-30 16:53:24
         compiled from shared:comment-form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'link', 'shared:comment-form.tpl', 7, false),array('modifier', 'notempty', 'shared:comment-form.tpl', 22, false),array('modifier', 'wp_specialchars', 'shared:comment-form.tpl', 22, false),array('modifier', 'default', 'shared:comment-form.tpl', 22, false),array('function', 'comment_form', 'shared:comment-form.tpl', 36, false),)), $this); ?>
<?php if (! $this->_tpl_vars['entry_commslock']): ?>
<h4><?php echo $this->_tpl_vars['lang']['comments']['head']; ?>
</h4>
<p><?php echo $this->_tpl_vars['lang']['comments']['descr']; ?>
</p>
	

<form id="commentform" method="post"
	action="<?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['params']['entry'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link')); ?>
#commentform"
	enctype="multipart/form-data">

	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	
	<?php if (! $this->_tpl_vars['flatpress']['loggedin']): ?>
	
	

		<div id="comment-userdata">
	
		<p>
		<input type="text" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['name'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 name="name" id="name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['name'])) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, 1) : wp_specialchars($_tmp, 1)))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['cookie']['name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['cookie']['name'])); ?>
" />
		<label class="textlabel" for="name"><?php echo $this->_tpl_vars['lang']['comments']['name']; ?>
</label>
		</p>
		
		<p>
		<input type="text" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['email'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 name="email" id="email" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['email'])) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, 1) : wp_specialchars($_tmp, 1)))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['cookie']['email']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['cookie']['email'])); ?>
" />
		<label class="textlabel" for="email"><?php echo $this->_tpl_vars['lang']['comments']['email']; ?>
</label>
		</p>
		
		<p>
		<input type="text" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['url'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 name="url" id="url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['url'])) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, 1) : wp_specialchars($_tmp, 1)))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['cookie']['url']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['cookie']['url'])); ?>
" />
		<label class="textlabel" for="url"><?php echo $this->_tpl_vars['lang']['comments']['www']; ?>
</label>
		</p>
		
		<?php echo smarty_function_comment_form(array(), $this);?>

		
	</div>
	
	<?php endif; ?>
	
	
	<div class="comment-content">
			<p><textarea name="content" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['content'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>

			id="content" rows="10" cols="74"><?php echo $this->_tpl_vars['values']['content']; ?>
</textarea></p>
				</div>
	
	<div class="buttonbar">
	<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['lang']['comments']['submit']; ?>
" />
	</div>

</form>
<?php endif; ?>