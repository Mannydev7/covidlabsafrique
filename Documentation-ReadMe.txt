/*******************************************************************************
* DOCUMENTATION: COVIDLABSAFRIQUE                                                               *
* Version:  --                                                               *
* Date:     2020-12-31                                                         *
* Author:   Emmanuel Cofie                                                    *
* License:  MIT
* Status:   DEV                                                                             *
*                           *
*******************************************************************************/

How to run  COVIDLABSAFRIQUE MANAGEMENT SYSTEM Using PHP and MySQL (laravel in update)

Download the zip file

Extract the file and copy covidlabsafrique folder
Paste inside root directory(for xampp xampp/htdocs, for wamp wamp/www, for lamp var/www/html)
Open PHPMyAdmin (http://localhost/phpmyadmin)
Create a database with name covid_pass
Import covid_pass.sql file(given inside the zip package in SQL file folder)
Run the script http://localhost/covid-tms


Admin CredentialS
-----------------------------
Username: Emmanuel
Password: cnqz4843




Landing page : localhost/covidlabsafrique   OR covidlabsafrique.dev (IF Virtual Host configuration is used)

Phlebotomist : localhost/phleb/new-user-testing.php -> admin session must not have started or must be logged out first

LAB ADMIN : localhost/admin/login.php OR covidlabsafrique.dev/admin/login(IF Virtual Host configuration is used)





<VirtualHost *:80>
    DocumentRoot "D:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    ##DocumentRoot "D:/xampp/htdocs/covidlabsafrique/public" 
    ServerName covidlabsafrique.dev
</VirtualHost>