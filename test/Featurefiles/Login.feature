Feature: Login feature

	
	
	
	Scenario: As a valid user I can log into the page
		When I navigate to the login page
		And  I enter the user "test" and the password "test123"
		And  I click the login button
		Then I want to get forwarded to the mainpage
		
		

		
