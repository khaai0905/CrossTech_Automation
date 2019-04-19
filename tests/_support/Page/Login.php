<?php
namespace Page; //dinh danh dia chi class

class Login
{
    // include url of current page
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $passwordField = '//*[@id="password"]';
    public static $loginButton = 'Log In';
    public static $ContinueButton = 'Continue';
    public static $Termofservice = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a';
    public static $Clickbtngg ='Continue with Google';
    public static $createnewacc = '//*[@id="primary"]/div/main/div/div[2]/a[1]';
    public static $sendbyemail = '//*[@id="primary"]/div/main/div/div[2]/a[2]';
    public static $lostpass = '//*[@id="primary"]/div/main/div/div[2]/a[3]';
    public static $back = '//*[@id="primary"]/div/main/div/div[2]/a[4]';
    public static $vietnamese ='//*[@id="primary"]/div/main/div/div[3]/div/a';
    public static $Changepass = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[1]/label/a';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

}
