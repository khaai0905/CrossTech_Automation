<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.0905@gmail.com', '            ');
        $I->see('Pass/HomePage');
    }
}
