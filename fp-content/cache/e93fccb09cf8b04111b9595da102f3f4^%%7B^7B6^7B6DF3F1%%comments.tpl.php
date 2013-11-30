<?php /* Smarty version 2.6.26, created on 2013-11-30 16:53:23
         compiled from comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry_block', 'comments.tpl', 4, false),array('block', 'entry', 'comments.tpl', 5, false),array('block', 'comment_block', 'comments.tpl', 7, false),array('block', 'comment', 'comments.tpl', 9, false),array('modifier', 'notempty', 'comments.tpl', 10, false),array('modifier', 'default', 'comments.tpl', 22, false),array('modifier', 'link', 'comments.tpl', 28, false),array('modifier', 'date_format', 'comments.tpl', 28, false),array('modifier', 'tag', 'comments.tpl', 31, false),array('function', 'nextpage', 'comments.tpl', 43, false),array('function', 'prevpage', 'comments.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main">
		<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "entry-default.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $this->_tag_stack[] = array('comment_block', array()); $_block_repeat=true;smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<ol id="comments">
		<?php $this->_tag_stack[] = array('comment', array()); $_block_repeat=true;smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<li id="<?php echo $this->_tpl_vars['id']; ?>
" <?php echo ((is_array($_tmp=$this->_tpl_vars['loggedin'])) ? $this->_run_mod_handler('notempty', true, $_tmp, "class=\"comment-admin\"") : smarty_modifier_notempty($_tmp, "class=\"comment-admin\"")); ?>
>
				
				<strong class='comment-name'>
								<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('notempty', true, $_tmp, "<a href=\"".($this->_tpl_vars['url'])."\" title=\"Permalink to ".($this->_tpl_vars['name'])."'s comment\">".($this->_tpl_vars['name'])."</a>") : smarty_modifier_notempty($_tmp, "<a href=\"".($this->_tpl_vars['url'])."\" title=\"Permalink to ".($this->_tpl_vars['name'])."'s comment\">".($this->_tpl_vars['name'])."</a>")))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['name'])); ?>

				</strong>
				
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:commentadminctrls.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 				
				<p class="date">
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['entryid'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link')); ?>
#<?php echo $this->_tpl_vars['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y - %H:%M:%S") : theme_date_format($_tmp, "%A, %B %e, %Y - %H:%M:%S")); ?>
</a>
				</p>
				
				<?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'comment_text') : theme_apply_filters_wrapper($_tmp, 'comment_text')); ?>

				
			</li>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ol>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		
				
			<div class="navigation">
				<?php echo smarty_function_nextpage(array(), $this);?>
<?php echo smarty_function_prevpage(array(), $this);?>

			</div>


		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:comment-form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	
		</div>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widgets.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
		

	<hr />
	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>