# language: en
@kms
Feature: Amazon Key Management Service

  Scenario: Making a request
    When I call the "ListAliases" API
    Then the value at "Aliases" should be a list

  Scenario: Handling errors
    When I attempt to call the "GetKeyPolicy" API with:
    | KeyId      | fake-key    |
    | PolicyName | fake-policy |
    Then I expect the response error code to be "NotFoundException"
    And I expect the response error message to include:
    """
    does not exist
    """
