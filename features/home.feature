Feature: Home
  In order to visit the start page of the application
  As a web user
  I need to be able to reach home

  Scenario: Visiting home
    Given I am on "/"
    Then I should see "Home"
    