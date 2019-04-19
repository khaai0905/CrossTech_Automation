<?php
//use Step\Acceptance\Admin as AdminTester;
use Page\Login as LoginPage;
class WP_LI_26Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        $I->click(LoginPage::$createnewacc);
        $I->wait(3);
    }
}
