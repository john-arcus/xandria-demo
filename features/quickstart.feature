Feature: Quick Start to see demo in action.
  In order to encourage speedy use and understanding of the Xandria library
  As a PHP developer who is new to the project
  I can see the demo code working with least amount of effort on my part.

  It is a common courtesy to make it easy for newcomers. Any project that exposes the ethos that they value contributors
  and make the effort to welcome them will get more supporters.

  Scenario: Cloning the Xandria-Demo project.
    Given I have access to the "project's github repo"
    When I visit "the README file"
    Then I can see "instructions on how to clone the repository".

  Scenario: Launching the environment.
    Given I have cloned the project locally
    And I have "Vagrant" and a "virtualization product" installed on my host machine
    When I navigate to the "project's root directory" in my terminal
    And run `vagrant up`
    Then vagrant provisions "Homestead Improved virtual environment"
    And launches it

  Scenario: Run the demo code to prove it works.
    Given I have navigated to "the project's root directory" in my terminal
    And I have the project's "Homestead Improved virtual environment" running.
    And I have run vagrant ssh
    When I run the command to run the project's "quickstart.php" script
    Then The "expected output" is written to STDOUT to prove that the project code is working OK.




