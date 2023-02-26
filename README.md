# Login And Signup System Using **PHP AND PDO (PROCEDURAL)**

# Folder Structure

 The following files acts as our view files and they all exist in our project root directory.

 * login.php
 * dashboard.php
 * register.php

 These files contains the html structure (Form Included) for achieving this simple process. At the very top of these files are some php logic which handles some simple operations when a form is submitted.

 There is also a **functions folder** in our project directory which contains all the Business logic needed to make our forms work. In our functions folder, we have the following;

 1. **DB.PHP**
    This file houses a function which is responsible for creating a __DB Connection__ which infact is a **PDO Instance** or a **PDO Object** which we can then now use within our application in performing **CRUD (Create, Read, Update Delete)** operations.

    
2. **LOGIN.PHP**
    This file makes use of our __DB.PHP__ file which makes the **DBHandler function** available to us which we can then now make use of in communicating with our **MYSQL DATABASE** in order to verify the users __Email Address__ and __Password__. 
    The file has two functions,
    
    1. **Login** 
        This is where our business logic for authenticating a user is written. The function returns an **Array** if the user fails validation and performs a redirect when the user passes validation. 
        
        The __Superglobals $_POST__ is filtered and the values from the associative array is stripped off of any html special characters as this helps in preventing __Sql Injection__. After this, we check if the Email exists by calling the **checkEmail function** with the user's Email address as it's arguement which then returns an **Errors Array** if the Email address is not found but returns an Array containing the Users Information if the user exists. 
        
        The __password, an (hash)__ from the returned Array is then matched against the users typed in password using php's **password_verify** function. which returns a Boolean if the given password matches the hash. You can find more information on the [php.net website](https://www.php.net/password_verify) on using the __password_verify function__. 

        The boolean returned from the function __password_verify__ is then used in our conditional which sets a user session and redirects our user if true or returns an Errors Array if false.

 
    2. **checkEmail**
        This functions gets the users email address and queries our database by using our **DBHandler Function** using **PDO (PHP DATA OBJECTS)** __prepared statements__ to achieve this which is more secure than passing in the values directly which makes any application vulnerable to __MYSQL INJECTION__.

3. **SIGNUP.PHP**
    This file also makes use of our **DBHandler function** in communicating with our **MYSQL DATABASE** to perform **CRUD (Create, Read, Update Delete)** operations. The file also houses 3 functions which helps us with the process of creating a new user. 
    
    In our **SIGNUP.PHP** we have the __Signup function__ which handles our Business logic for creating a new user. The __Signup function__ accepts an Array as it's arguement and returns an Errors array if a condition is not satisfied else it performs an HTTP Redirect. We also filter and strip the values from our __$_POST Superglobals__ which helps us in preventing __Sql Injection__.

    We have some simple conditions such as; 
    * checking if an email exists
    * checking if the first name is a string
    * checking if the last name is a string
    * verifying that the password is greater than 7 characters.

    When all conditions are satisfied, we call the __register function__ which creates a new user by using our __DBHandler function__, set a new session for the user and perform an HTTP Redirect.


I have also attached the mysql file needed for you to set up this application and have it up and running.
