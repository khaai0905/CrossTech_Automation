<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_17Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('', ' Khaai@@0905');
        $I->see('Pass/HomePage');
    }
}
