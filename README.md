How use the web application: 

1. Open the folder with an editor, setting the file ".env" with your IP of localhost, open the software "MAMP" (I used that) and open "phpMyAdmin" and create a db: "lunch" 

2.Open the terminal on the folder of project and write "php artisan serve" and than "php artisan migrate" 

3. Now you can use your browser with your IP local and see the basic front-end with "Vuejs"

4. Now click on "Admin Panel"-> Register an account-> Click on "Places List"

5. Now you can click on button "Create a Lunch Meeting", put your info. Now you can see the Info with button "Show" or delete immediately with button "Delete"

6. With the button "Create" you send automatically an email for notify the new Lunch Meeting

7. For test the email, I used "mailtrap.io", you can register a free account and setup the file of the project ".env" with your code

8. For logout, click your Username->LogOut

Bonus: 
-Add an secure method when you select the Date (if you change the ID of the <select>, the system say you "Is invalid")

