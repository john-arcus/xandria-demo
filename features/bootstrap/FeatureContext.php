<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have cloned the project locally
     */
    public function iHaveClonedTheProjectLocally()
    {
        throw new PendingException();
    }

    /**
     * @Given I have :arg1 and a :arg2 installed on my host machine
     */
    public function iHaveAndAInstalledOnMyHostMachine($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I navigate to the :arg1 in my terminal
     */
    public function iNavigateToTheInMyTerminal($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When run `vagrant up`
     */
    public function runVagrantUp()
    {
        throw new PendingException();
    }

    /**
     * @Then vagrant provisions :arg1
     */
    public function vagrantProvisions($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then launches it
     */
    public function launchesIt()
    {
        throw new PendingException();
    }

    /**
     * @Given I have navigated to :arg1 in my terminal
     */
    public function iHaveNavigatedToInMyTerminal($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have the project's :arg1 running.
     */
    public function iHaveTheProjectsRunning($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have run vagrant ssh
     */
    public function iHaveRunVagrantSsh()
    {
        throw new PendingException();
    }

    /**
     * @When I run the command to run the project's :arg1 script
     */
    public function iRunTheCommandToRunTheProjectsScript($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then The :arg1 is written to STDOUT to prove that the project code is working OK.
     */
    public function theIsWrittenToStdoutToProveThatTheProjectCodeIsWorkingOk($arg1)
    {
        throw new PendingException();
    }
}
