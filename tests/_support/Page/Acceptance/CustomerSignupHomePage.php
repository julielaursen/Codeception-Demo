<?php

namespace Tests\Support\Page\Acceptance;

class CustomerSignupHomePage 
{
    // include url of current page
    public static $URL = 'https://dev-www.lawnstarter.com';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    const ADDRESS_INPUT = "#streetAddress";
    const SEE_PRICE_BUTTON = ".js-submitButton";
    const NAME_INPUT = ".js-fullNameInput";
    const PHONE_INPUT = ".js-phoneInput";
    
    /**
     * fillGetQuickAndEasyPrice
     *
     * @param AcceptanceTester $I
     * @param mixed $address
     * @param mixed $name
     * @param mixed $phone
     * @return void
     */
    public static function fillGetQuickAndEasyPrice(AcceptanceTester $I, $address, $name, $phone)
    {
        $I->waitForElement(self::ADDRESS_INPUT);
        $I->fillField(self::ADDRESS_INPUT, $address);
        $I->click(self::SEE_PRICE_BUTTON);
        $I->fillField(self::NAME_INPUT, $name);
        $I->fillField(self::PHONE_INPUT, $phone);
        $I->click(self::SEE_PRICE_BUTTON);
    }

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
