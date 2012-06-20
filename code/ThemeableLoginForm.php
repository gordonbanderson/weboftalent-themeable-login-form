<?php
class ThemeableLoginForm extends MemberLoginForm 
{

	/* 
	The template to use for the login form itself.
	To override the layout other than the form, override Security_login.ss in your own theme.
	Defaults to standard Forms template
	*/
	private static $themeable_login_form_template = 'Form';

	function forTemplate() {
		return $this->renderWith(array(
			$this->class,
			self::$themeable_login_form_template
		));
   	}

   /*
	Call this from your config to change the template used to render the login form itself
   */
   static function set_form_template($new_themeable_login_form_template) {
		self::$themeable_login_form_template = $new_themeable_login_form_template;
   }
}
?>