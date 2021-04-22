<?php

use Tests\Support\Page\Acceptance\CustomerSignupHomePage;

class CustomerSignupCest
{
    const ADDRESS = "11505 Silmarillion Trail, Austin TX 78739";
    const NAME = "POC Automation Tester";
    const PHONE = "512-203-4590";

    /**
     * signUp
     *
     * @param AcceptanceTester $I
     * @return void
     */
    public function signUp(AcceptanceTester $I)
    {
        $I->wantToTest("the signup flow");
        CustomerSignupHomePage::fillGetQuickAndEasyPrice($I, self::ADDRESS, self::NAME, self::PHONE);
    }
}
