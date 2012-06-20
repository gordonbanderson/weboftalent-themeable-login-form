Login Form Theming
==================

There seem to be some issues around theming the login form, this module makes it nice and simple.  The main use case here is one of overriding the actual Form itself (e.g. adding twitter bootstrap classes).

## Installation

    cd <root of your installation>
    git clone git://github.com/gordonbanderson/weboftalent-themeable-login-form.git

## Configuration
### Login Form Template
In your configuration file add something like the following:

	ThemeableLoginForm::set_form_template('BoostrapVerticalForm');

This overrides the template used to render the Form (not the layout of the page around the form)

### Layout Around the Form
To alter the layout around the form, simply override <tt>Security_login.ss</tt> as normal
