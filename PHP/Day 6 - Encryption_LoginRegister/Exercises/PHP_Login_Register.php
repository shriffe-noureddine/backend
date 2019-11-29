<?php
	
	/*
		The purpose of this exercise is to create a login/register process for users.

		
		1. Create a new table named 'users' with those attributs : mail, nickname, password (you can add other if you want).

		2. Create a 'register.php' page. This page will be use to register a user in our database.
		This page should display a form asking informations about the user.

		Once the submit button is clicked, you have to save the user in the database.
		But don't forget to check the inputs ! It is mandatory to have a mail, a password and a nickname.
		You also need to check for the mail to be a valid one.

		Only if everything is ok, you save the user in the DB.

		3. Create a 'login.php' page. This page will be use to login the user to our website.
		This page should display a form asking mail and password to log in.

		Once the submit button is clicked, you should check if the fields are not empty.
		If they are not empty, you should check if the user exists in the DB and password is ok.

		4. Once the user is login, you need a way to be sure it'll stay login between all the pages of your website.
		To do that, use sessions to remember which user is connected.

		5. Create a 'myaccount.php' page.
		If the user is not login, you should display a message saying he have to login to access this page.
		If the user is login, display all informations about this user.

	*/

?>