<?php
/**
 * Class PaypalSubscribeButton
 * Creates a widget for Paypal's subscription button
 * https://www.paypal.com/
 *
 * @author		Gerardo Colorado Diaz-Caneja <gcdiazcaneja@diaz-caneja-consultores.com>
 * @link		http://www.diaz-caneja-consultores.com
 * @link        https://github.com/gerardocdc/facebook-like-box
 * @copyright	Copyright (c) 2013 Diaz-Caneja Consultores
 * @license		Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)
 * @version     1.0
 * @filesource
 */

/**
 * Class PaypalSubscribeButton
 * Creates a widget for Paypal's subscription button
 * https://www.paypal.com/
 *
 * Uso:
 * <code>
 *      $paypalSubscribeButton = new PaypalSubscribeButton();
 *      $paypalSubscribeButton->setButtonId("XXXXX");
 *      $paypalSubscribeButton->setSandbox(false);
 *      $paypalSubscribeButton->render();
 * </code>
 *
 * @package		Paypal
 * @version     1.0
 * @since		Version 1.0
 */
class PaypalSubscribeButton
{
	/*--------------------------------------------
	|             V A R I A B L E S             |
	============================================*/

	/**
	 * Button Id (XXXXX)
	 *
	 * @var string
	 */
	private $buttonId;

	/**
	 * Sandbox environment
	 *
	 * @var boolean
	 */
	private $sandbox = false;

	/*--------------------------------------------
	|           C O N S T R U C T O R           |
	============================================*/

	/**
	 * Constructor
	 */
	function __construct()
	{
	}

	/*--------------------------------------------
	|      G E T T E R S / S E T T E R S        |
	============================================*/

	/**
	 * @param string $buttonId
	 */
	public function setButtonId($buttonId)
	{
		$this->buttonId = $buttonId;
	}

	/**
	 * @return string
	 */
	public function getButtonId()
	{
		return $this->buttonId;
	}

	/**
	 * @param boolean $sandbox
	 */
	public function setSandbox($sandbox)
	{
		$this->sandbox = $sandbox;
	}

	/**
	 * @return boolean
	 */
	public function isSandbox()
	{
		return $this->sandbox;
	}

	/*--------------------------------------------
	|        C L A S S   M E T H O D S          |
	============================================*/

	/**
	 * Renderizes and creates the Paypal subscription Button code
	 */
	public function render()
	{
		$code = "";

		if ($this->isSandbox())
		{
			$code .= "<form action=\"https://www.sandbox.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">\r\n";
			$code .= "<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">\r\n";
			$code .= "<input type=\"hidden\" name=\"hosted_button_id\" value=\"".$this->getButtonId()."\">\r\n";
			$code .= "<input type=\"image\" src=\"https://www.sandbox.paypal.com/es_ES/ES/i/btn/btn_subscribeCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal. La forma rápida y segura de pagar en Internet.\">\r\n";
			$code .= "<img alt=\"\" border=\"0\" src=\"https://www.sandbox.paypal.com/es_ES/i/scr/pixel.gif\" width=\"1\" height=\"1\">\r\n";
			$code .= "</form>\r\n";
		} else {
			$code .= "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">\r\n";
			$code .= "<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">\r\n";
			$code .= "<input type=\"hidden\" name=\"hosted_button_id\" value=\"".$this->getButtonId()."\">\r\n";
			$code .= "<input type=\"image\" src=\"https://www.paypalobjects.com/es_ES/ES/i/btn/btn_subscribeCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal. La forma rápida y segura de pagar en Internet.\">\r\n";
			$code .= "<img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_ES/i/scr/pixel.gif\" width=\"1\" height=\"1\">\r\n";
			$code .= "</form>\r\n";
		}

		echo $code;
	}
}