<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use  PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    //By convention, any succesful cli command should return 0 upon success.
    const STANDARD_SUCCESFUL_EXITCODE = 0;
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
     * Check CLI return status for success.
     *
     * Zero is the exit status that, by convention, indicates 'Success'.
     * See this written in
     *
     *
     * @param $command
     * @return bool if the cli command returns 0
     */
    private function isCliCommandSuccessful($command)
    {
        exec($command, $latestConsoleOutputArray, $returnVariable);

        $this->latestConsoleOutputArray  = $latestConsoleOutputArray;
        return $returnVariable == self::STANDARD_SUCCESFUL_EXITCODE;
    }


    private function assertCliCommandSuccessful($command)
    {
        PHPUnit\Framework\Assert::assertTrue($this->isCliCommandSuccessful($command));
    }

    /**
     * @Given I have installed the project
     */
    public function iHaveInstalledTheProject()
    {
        //Execute the command to check composer platform requirements
        $this->assertCliCommandSuccessful("composer check-platform-reqs");
    }

    /**
     * @Given I have Vagrant and a virtualization product installed on my host machine
     */
    public function iHaveVagrantAndAVirtualizationProductInstalledOnMyHostMachine()
    {
        //check for vagrant
        $this->assertCliCommandSuccessful("vagrant --version");

        //check for some virtualization product
        //See: https://www.vagrantup.com/docs/providers/
        PHPUnit\Framework\Assert::assertTrue( $this->isCliCommandSuccessful("VBoxManage --version") );

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
        $this->assertCliCommandSuccessful('php ./src/bootstrap.php');
    }

    /**
     * @Then The expected output is written to STDOUT to prove that the project code is working OK.
     */
    public function theExpectedOutputIsWrittenToStdoutToProveThatTheProjectCodeIsWorkingOk()
    {
        //var_dump($this->latestConsoleOutputArray);


        PHPUnit\Framework\Assert::assertEquals("Seems OK", $this->latestConsoleOutputArray[0]);
    }
}
