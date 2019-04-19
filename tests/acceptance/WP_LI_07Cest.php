<?php
use Step\Acceptance\Admin as AdminTester;
class WP_LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('khaai.0905@gmail.com', 'Khaai@@09055');
        $I->see('Pass/HomePage');
    }
}
