Feature: Login page

Scenario: Login - Happy flow
  Given I am on the login page
  When I enter a correct username
  And I enter a correct password
  And I click the login button
  Then I should be redirected to the logout page