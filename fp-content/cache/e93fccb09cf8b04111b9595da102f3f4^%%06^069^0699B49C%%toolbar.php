<?php /* Smarty version 2.6.26, created on 2013-11-30 16:53:44
         compiled from plugin:bbcode/toolbar */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'plugin:bbcode/toolbar', 16, false),)), $this); ?>
<fieldset id="admin-bbcode-toolbar">
	<legend><?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['formatting']; ?>
</legend>
	<div class="alignright">
		<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['textarea']; ?>

		<input type="button" name="expand" id="expand" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['expand']; ?>
" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['expandtitle']; ?>
" onclick="form.content.rows+=5;" />
		<input type="button" name="reduce" id="reduce" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['reduce']; ?>
" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['reducetitle']; ?>
" onclick="form.content.rows-=5;" />
	</div>
	<p>
		<input type="button" name="bb_b" id="bb_b" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['bold']; ?>
" accesskey="b" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['boldtitle']; ?>
" onclick="insBBCode('b');" />
		<input type="button" name="bb_i" id="bb_i" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['italic']; ?>
" accesskey="i" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['italictitle']; ?>
" onclick="insBBCode('i');" />
		<input type="button" name="bb_u" id="bb_u" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['underline']; ?>
" accesskey="u" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['underlinetitle']; ?>
" onclick="insBBCode('u');" />
		<input type="button" name="bb_c" id="bb_c" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['quote']; ?>
" accesskey="q" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['quotetitle']; ?>
" onclick="insBBCode('quote');" />
		<input type="button" name="bb_q" id="bb_q" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['code']; ?>
" accesskey="c" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['codetitle']; ?>
" onclick="insBBCode('code');" />
	</p>
	<p>
		<?php echo smarty_function_html_options(array('name' => 'attachselect','values' => $this->_tpl_vars['attachs_list'],'output' => $this->_tpl_vars['attachs_list'],'onchange' => "insAttach(this.form.attachselect.value)"), $this);?>

		<?php echo smarty_function_html_options(array('name' => 'imageselect','values' => $this->_tpl_vars['images_list'],'output' => $this->_tpl_vars['images_list'],'onchange' => "insImage(this.form.imageselect.value)"), $this);?>

	</p>
</fieldset>

<p class="alignright">
	<a class="hint externlink" href="http://wiki.flatpress.org/doc:plugins:bbcode"><?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['help']; ?>
</a>
</p>
