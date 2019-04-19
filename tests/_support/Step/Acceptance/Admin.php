<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Admin extends \AcceptanceTester
{
    public function loginAsAdmin($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
        $I->wait(2);
    }
}