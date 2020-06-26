# wordpress_cookbook

To start a project, you must first have a wampserver or xamp. 
Start the server, in my case I have a xamp. 
On the Apache click button 'Chonfig' and click on Apache(httpd.chonf). 
When the file opens find 'Listen 80' and 'ServerName localhost: 80' 
change the port from 80 to 8080. 
Start Apache and MySQL.
Click button 'Admin' for MySQL and it will show phpmyadmin. Create database
'receipts' and import 'receipts.sql' from folder 'db'.
Now click button 'Admin' for Apache and it will show the project.