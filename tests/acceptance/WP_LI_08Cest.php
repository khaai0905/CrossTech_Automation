<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_08Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaaI.09055@gmail.com', 'Khaai@@0905');
        $I->see('Pass/HomePage');
    }
}
