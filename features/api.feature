Feature: API Access
  In order to access protected resource
  As an API client
  I need to be able to connect

  Scenario: Perform API call
    Given I retrieve an access token for "superadmin"
    And I perform a search call
    Then I should see the search results

  Scenario: Invalid credentials
    Given I use an invalid access token
    And I perform a search call
    Then I should see an error message
