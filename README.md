Paypal Subscription Button Widget
==================================

Purpose
-------
Creates a Paypal Subscribe button.
https://www.paypal.com/

Configuration
-------------
You must first create an account on Paypal
https://www.paypal.com/
Once you have created the account, you must create subscription button and obtains the button's id code. They consist normally of a set of numbers (like YY-XXXXX).

Usage
-----
	$paypalSubscribeButton = new PaypalSubscribeButton();
	$paypalSubscribeButton->setButtonId("XXXXX");
	$paypalSubscribeButton->render();

Optional configuration:

* Sandbox environment (true,false):  $paypalSubscribeButton->setSandbox(false);

Copyright
---------
Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)

Copyright (c) 2012-3 Diaz-Caneja Consultores

Contact
--------
Gerardo Colorado Diaz-Caneja   gcdiazcaneja@diaz-caneja-consultores.com

Github: https://github.com/gerardocdc/paypal-subscribe-button (feel free to contribute)