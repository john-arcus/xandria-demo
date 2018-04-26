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
     * @Given I have installed the project
     */
    public function iHaveInstalledTheProject()
    {
        throw new PendingException();
    }

    /**
     * @Given I have Vagrant and a virtualization product installed on my host machine
     */
    public function iHaveVagrantAndAVirtualizationProductInstalledOnMyHostMachine()
    {
        throw new PendingException();
    }

    /**
     * @When I run `vagrant up` in the root of the project
     */
    public function iRunVagrantUpInTheRootOfTheProject()
    {
        throw new PendingException();
    }

    /**
     * @Then vagrant provisions and launches a Homestead Improved virtual environment
     */
    public function vagrantProvisionsAndLaunchesAHomesteadImprovedVirtualEnvironment()
    {
        throw new PendingException();
    }

    /**
     * @When I run the command to run the project's quickstart.php script
     */
    public function iRunTheCommandToRunTheProjectsQuickstartPhpScript()
    {
        throw new PendingException();
    }

    /**
     * @Then The expected output is written to STDOUT to prove that the project code is working OK.
     */
    public function theExpectedOutputIsWrittenToStdoutToProveThatTheProjectCodeIsWorkingOk()
    {
        throw new PendingException();
    }
}
