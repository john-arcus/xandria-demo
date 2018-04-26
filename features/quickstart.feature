Feature: Quick Start to see demo in action.
  In order to encourage speedy use and understanding of the Xandria library
  As a PHP developer who is new to the project
  I can see the demo code working with least amount of effort on my part.

  It is a common courtesy to make it easy for newcomers. Any project that exposes the ethos that they value contributors
  and make the effort to welcome them will get more supporters.


  Scenario: Launching the environment.
    Given I have installed the project
    And I have Vagrant and a virtualization product installed on my host machine
    When I run `vagrant up` in the root of the project
    Then vagrant provisions and launches a Homestead Improved virtual environment

  Scenario: Run the demo code to prove it works.
    Given I have installed the project
    When I run the command to run the project's quickstart.php script
    Then The expected output is written to STDOUT to prove that the project code is working OK.




