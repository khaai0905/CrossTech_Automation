<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Admin1 extends \AcceptanceTester
{
    public function loginAsAdmin1($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->wait(2);
        $I->click(LoginPage::$Changepass);
        $I->wait(3);
    }
}