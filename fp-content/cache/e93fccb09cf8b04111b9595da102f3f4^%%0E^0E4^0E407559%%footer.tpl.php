<?php /* Smarty version 2.6.26, created on 2013-11-29 02:31:18
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'action', 'footer.tpl', 5, false),)), $this); ?>
		</div>
		
		
		<div id="footer">
			<?php echo theme_smarty_function_action(array('hook' => 'wp_footer'), $this);?>

			
			<!--
			
				Even though your not required to do this, we'd appreciate
				a lot if you didn't remove the notice above.
				
				This way we'll get a better ranking on search engines
				and you'll spread the FlatPress word all around the world :)
				
				If you really want to remove it, you may want to
				consider doing at least a small donation.  
			
			-->
			
			<p>
			This blog is powered by <a href="http://www.flatpress.org/">FlatPress</a>.
			</p>
		</div> <!-- end of #footer -->

	</div>
</body>
</html>