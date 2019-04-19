<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        $I->fillField('//*[@id="usernameOrEmail"]', 'khaai.0905@gmail.com');
        $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $I->wait(2);
        $I->fillField('//*[@id="password"]', 'Newsuccess@0905');
        $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $I->wait(4);
        $I->see('My Site');
    }
}
