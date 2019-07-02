Real Estate Lister
==================

Real estate listing manager created with Drupal 8

Getting Started
----------------

These instructions will assist in getting the project up and running on your local machine. 


Installing
----------

Clone or download the repository from github

`git clone https://github.com/ckyoga/drupallisting.git`


Checkout this repository and place the “drupallisting” folder under your apache path.

Create an MySQL database named 'dbCMS'

Create the following drupal user on your new MySQL database.
- database user: userCMS
- database password: drupal

- mysql commands:

`CREATE USER 'userCMS'@'localhost' IDENTIFIED BY 'drupal';`

`GRANT ALL PRIVILEGES ON * . * TO 'userCMS'@'localhost';`

`FLUSH PRIVILEGES;`

Import the dbCMS.sql file into the new `dbCMS` MySQL database

- MySQL import command

`/Applications/MAMP/Library/bin/mysql -u userCMS -p dbCMS < dbCMS.sql`

Point your webserver document root to the "drupallisting" folder

User Login to manage listings:
- u: listuser
- p: listlist

Admin Login to manage drupal:
- u: admin
- p: admin

Author
------

**Caroline Burns** 

### Enjoy!
