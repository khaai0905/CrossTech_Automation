<?php
use Step\Acceptance\Admin as AdminTester;
class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.0905@gmail.com', 'Khaai@@0905');
        $I->see('Pass/HomePage');
    }
}
