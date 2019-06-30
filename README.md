# drupallisting

Drupal implemented site to manage real estate listings

## Getting Started

These instructions will allow you to get the project up and running on your local machine for development and testing purposes. 

### Prerequisites

Project developed using MAMP, Drupal 8, MySQL, PHP, Apache.

### Installing

Clone or download the repository from github

`git clone https://github.com/ckyoga/drupallisting.git`


+ Checkout this repository and place the “drupallisting” folder under your apache path.

+ Create an MySQL database named 'dbCMS'

+ Create the following drupal user on your new MySQL database.
- database user: userCMS
- database password: drupal

- mysql commands:
`CREATE USER 'userCMS'@'localhost' IDENTIFIED BY 'drupal';`
`GRANT ALL PRIVILEGES ON * . * TO 'userCMS'@'localhost';`
`FLUSH PRIVILEGES;`

+ Import the dbCMS.sql file into your new MySQL database
- MySQL import command
/Applications/MAMP/Library/bin/mysql -u userCMS -p dbCMS < dbCMS.sql

+ Point your webserver document root to the "drupallisting" folder

User Login to this site for managing listings with the following credentials:
- u: listuser
- p: listlist

Admin Login to this site for managing drupal with the following credentials:
- u: admin
- p: admin

## Author

**Caroline Burns** 

### Enjoy!

