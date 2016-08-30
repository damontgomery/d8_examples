@api
Feature: Entity Query examples
  In order to show how to query entities
  As a user
  I need to check the output on the demo pages

  # If we are using the Drupal API driver
#  Background: Create users and nodes to test our scenarios.
#    Given "page" content:
#      | title              | author   | promote | status | Body                     |
#      | Example Page Alpha | Admin    | 1       | 1      | Example Page Alpha Body  |
#      | Example Page Beta  | Admin    | 1       | 1      | Example Page Beta Body   |

  Background:
    # Create 2 page nodes with 0 comments each. These are unpublished.
    Given I run drush "generate-content" "2 0 --types=page"

  Scenario: Basic query demo page
    Given I am on "/d8e/entity-query/basic-query-demo"
    Then I should see the text "d8e Entity Query Demo: Basic Query"
    Then I should see the text "Published Node IDs"
    # We have wrapped all of our NIDs in the .d8e-nid class.
    Then I should see a ".d8e-nid" element
    # If there are no results, we show a message with the .d8e-nids-empty class.
    Then I should not see a ".d8e-nids-empty" element
