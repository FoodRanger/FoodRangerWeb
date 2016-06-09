When(/^I navigate to the login page$/) do
	$login.navigate()
end

And(/^I enter the user "(.*?)" and the password "(.*?)"$/) do |user, pw|
	$login.login(user, pw)
end

And(/^I click the login button$/) do
	$login.clicksubmitButton()
end

Then(/^I want to get the error message "(.*?)"$/) do |message|
	$login.checkErrorMessage(message)
end

Then(/^I want to get forwarded to the mainpage$/) do
	$login.assertUser()
end

Then(/^I want to get forwarded to the adminpage$/) do
	$login.assertAdmin()
end

When(/^I can see my username$/)do
	$login.seeUser()
end

And(/^I can see the different status$/)do
	$login.checkwasser()
	$login.checktasse()
end

And(/^I can see my accountbalance$/)do
	$login.checkaccountbalance
end

When(/^I click on Kosten einstellen$/)do
	$login.accesskosten()
end

When(/^I click on Rechnung erstellen$/)do
	$login.accessrechnung()
end

When(/^I click on Warteschlange administrieren$/)do
	$login.accesswarteschlange()
end

Given(/^I am logged in as administrator$/)do
	$login.navigate()
	$login.loginadmin()
end

Given(/^I am logged in as a valid user$/)do
	$login.navigate()
	$login.login(test, kek)
end