Feature: Set Filters
  As an actor you can set filters, that we're giving. You don't have to set
  filters, so you can just see every restaurants in your range if you pressed 
  the Range button.
  Scenario: App started succesfully
    Given See Filters
    When User presses Location button
    Then User can enter wanted location or can enter current location
    When User presses on Name button
    Then User can enter a specific name of the restaurant
    When User presses on Categorie button
    Then User is able to choose different types of restaurants
    When User presses on Pricerange button
    Then User can select his price range
    When User presses on Rating button 
    Then User is able to select a rating from one to five stars
    When Range button is pressed
    Then App leads User to the Search range with the given filters

  Scenario: App didn't start succesfully
    Given Don't see filters
    When User can't see any filters
    Then User restarts app