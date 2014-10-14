<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
    public function testLoginUrl()
    {
        $crawler = $this->client->request('GET','/auth/login');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
    public function testAuthController()
    {
        $crawler = $this->action('GET','AuthController@getRegister');
    }

}
