Set-Up:
Open XAMPP - Start and XAMPP - control.  In the download file for XAMPP, open up the folder called “htdocs” and create a new folder to place the project in.  Remember what you called this folder.  

 On your preferred web browser, type in “localhost.” Go to phpMyAdmin in the top right, then click on the mysql top near the top middle of the page and type “CREATE database dbtest.”  Once the database is created, click ‘dbtest’ and then import.  Upload “uid.sql” and scroll down and click GO.  Repeat this step with “transactions.sql” and “uid.sql.” The required tables should be attached.

To access the website, type in the address bar of your preferred web browser localhost/title of the folder.  The title of the folder you created to put the project in is what you type after localhost.


Homepage
There is a navigation bar (located at the top of every page) with different buttons that links to different pages on our website. This provides an easy way for the customer to visit different sections.
Clicking the ‘Start Shopping!’ button will direct the customer to the Products page. However, if the user is not logged in, then they will be redirected to the Login/Sign Up page.
‘PRODUCTS’ will direct customers to the products page 
‘CART’ will direct customers to the cart (empty by default)
‘PROFILE’ will guide customers to view their transaction record 
‘LOGIN/ SIGN UP’ will direct them to the log-in or sign-up page directly ‘LOGOUT’ will result in the user being logged out of their account

Create an account
First-time customers have to create their own account and the account information will be stored into the database. 
If the new account name is duplicated with existing ones in the database, the user will be prompted to enter another one.
If the user is not signed in or has not made an account yet they will be redirected to the create account page if they try to access any page other than the home page.


Log in to the account
Customers have to log-in before accessing any other pages.
Customers will be redirected if the user tries to go to any other page before signing in.
If the account and password combination does not match with the existing one in the database, the user will be prompted to enter again.
If either one of the entries put in does not match the database the website will give a pop up saying an error that either one of them might be incorrect.
Once logged in the username will be displayed near the top right corner of every page.

Go to the product page to shop
There are different products listed under different categories. Currently, we have 8 products listed under each of the 4 categories, which are fruits, vegetables, meats, and dairy. 
There is a side navigation bar to help the customer search the specific product by category, and then by name. Clicking on the product name will direct the customer to the location of the product on the page.  

Select products and add them to cart
When the customer moves the mouse to a specific product, details including weight, price, and availability of the product will be shown. 
Customers can choose to add the product to the cart by typing in the amount/quantity they want. If the amount they add is greater than the availability, they will be informed and prompted to adjust the amount. 
If a negative value is typed in, then it will deduct the existing quantity in the cart. However, a negative quantity will not be permitted. 

Go to the cart and verify products
The cart will show all the items added by the customer, with their name, price, and quantity. 
Items can be removed and added, then the total weight and price will be updated accordingly.

 
Checkout
Customers will be prompted to enter their personal information such as name, email, payment information, and address.
If any of the information is missing, an error will be prompted to remind the customer to fill it in.
The total price and weight will be calculated. If the total weight exceeds 20lbs, extra shipping fee will be added to the total price.
Once completed, the transaction record will be stored in the database and available on the profile page.

Thank you Page 
This is a confirmation to the customer that the transaction is finished.
Customers can go back to the products page for browsing other items if they click the “return” button.   

Profile Page - Transactions
The Profile page will show a user’s past transactions.
Each transaction will be stored after a user completely finishes an order and no errors were produced.
The table where each transaction is stored will include the unique username of each user to enable it so the transaction page will only sure their own transactions
