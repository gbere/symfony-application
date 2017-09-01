Feature: Admin
  In order to administer the application
  As a web user
  I need to be able to login

  @javascript
  Scenario: EasyAdmin login
    Given I am on "/easy-admin"
    And I fill in "_username" with "superadmin"
    And I fill in "_password" with "superadmin"
    And I press "_submit"
    Then I should see "EasyAdmin"

  @javascript
  Scenario: Sonata Admin login
    Given I am on "/sonata-admin"
    And I fill in "_username" with "superadmin"
    And I fill in "_password" with "superadmin"
    And I press "_submit"
    Then I should see "Sonata Admin"
