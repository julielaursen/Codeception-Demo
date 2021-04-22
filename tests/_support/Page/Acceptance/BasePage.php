<?php
namespace Tests\Support\Page\Acceptance;

use \Faker\Factory;

class BasePage
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    const ADDRESS = "11505 Silmarillion Trail, Austin TX 78739";
    const NAME = "POC Automation Tester";
    const PHONE = "512-203-4590";

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public static function getRandomEmail($I)
    {
        $email = Factory::create()->email;
        return $email;
    }

}
