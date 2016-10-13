<?php


class TestCest
{
    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->wantTo('get locations via API');
        $I->haveHttpHeader('routername', 'RUCKUS');
        $I->sendPOST('locations', []);
        $I->seeResponseCodeIs(200);
    }
}
