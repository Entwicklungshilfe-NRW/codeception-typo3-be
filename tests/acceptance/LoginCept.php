<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check login functions');
$I->amOnPage('/typo3');
$I->waitForElement('#t3-username');
$I->canSeeCurrentUrlEquals('/typo3/');
