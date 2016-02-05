<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check login functions');
$I->amOnPage('/typo3');
$I->waitForElement('#t3-username');

$I->wantTo('redirect to slash url');
$I->canSeeCurrentUrlEquals('/typo3/');

$I->wantTo('mouse over css change login button');
$bc = $I->executeInSelenium(function(\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
    return $webdriver->findElement(WebDriverBy::cssSelector('#t3-login-submit'))->getCSSValue('background-color');
});

$I->moveMouseOver('#t3-login-submit');
$bcmo = $I->executeInSelenium(function(\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
    return $webdriver->findElement(WebDriverBy::cssSelector('#t3-login-submit'))->getCSSValue('background-color');
});
$this->assertFalse($bc == $bcmo);

$I->wantTo('loading hint');

