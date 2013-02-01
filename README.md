client-project-bundle
=====================

This bundle demonstrates basic usage of nerdery-facebook-bundle (https://github.com/curtis1000/nerdery-facebook-bundle) for symfony2 framework.

In your controller, you can call:
 
     $facebookHelper = $this->get('nerd_facebook.helper');

And from there you have an instance of \Nerd\Facebook\Helper, which is a wrapper for the Facebook PHP SDK with some additional helper methods.

