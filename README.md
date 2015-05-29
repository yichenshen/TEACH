# TEACH: IS1112FC Project (RNS01)

This repository contains all technical aspects of the project, including database schema dumps, HTML/PHP/CSS files and database model.

---

###Requirements

 - MySQL Workbench 6.0(or above)
 - MySQL 5.6
 - Apache HTTP Server 2.4
 - PHP 5
 - Web browser with HTML5 and Javascript

> [XAMPP](https://www.apachefriends.org/) contains Apache, MySQL and PHP

#####Optional

 - bower  (http://bower.io/)

#####Website Dependencies

 - [Materialize](http://materializecss.com/)
 - [jQuery](https://jquery.com/)
 - [Parsedown](http://parsedown.org/) 

> Dependencies are already included in this repository.

---

###Setup
####Database Model

> Model file: "/db_model/TEACH.mwb"

1. Open MySQL Workbench
2. Look for the __Models__ section
3. Open the model file as above
4. In __Model -> Relationship Notation__, choose __UML__

####Database

> Database file: "/db/schema.sql"

######Option 1 (Workbench import)

1. Open MySQL Workbench and connect to your desired database
2. Click on the __Management__ tab on the left panel and click __Data Import/Restore__
3. Select __Import from Self-Contained File__ and open the database file as above
4. Click __Start Import__

######Option 2 (Workbench run SQL)

1. Open MySQL workbench and connect to your desired database
2. Open the database file as above in workbench (__File__ > __Open SQL Script__)
3. Execute the entire script

######Option 3 (Command line)

```bash
# From system terminal 
mysql -u root -p < database_file

# From mysql terminal
source database_file
```

Where `database_file` is the path to the file as above.

####Website Sources

> Location: `/source`

1. Copy the contents of the entire folder `/source` _(not the folder itself)_ to to your Apache root folder. 
 - XAMPP Windows: `C:\xampp\htdocs\`
 - Linux(non-XAMPP): `/var/www/html/`
2. Make sure Apache is running from either XAMPP or OS services.
3. Open a broweser and go to the host address
 - Default: http://localhost/
 
> Remember to sync from download folder to Apache root and back when changes are made.

######Manual install

You may manually install/update the required packages using bower. Though they are already included in the repository for convenience. 

```bash
bower install
bower update
```

---

###Editing

####Database Model

Do not edit the database model concurrently, as it is a binary file and is almost impossible to merge. Only one person should edit, commit and push at any given time.

####Database

You may edit the database in your own MySQL connection, but changes will not be reflected in the database file. To update the file, you have to overwrite it with the new schema dump.

######MySQL Workbench

1. Go the the __Management__ tab and click __Data Export__
2. Select __Export to Self-Contained File__ and open the old database file to overwrite it.
3. Click __Start Export__

######Command Line

```bash
# From system terminal
mysqldump -u root -p > database_file
```

Add the following lines to the top of the file after operation exits

```sql
CREATE DATABASE  IF NOT EXISTS `TEACH` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `TEACH`;
```

> Remember to update the model as well if you change the database tables/columns structure to avoid confusion in the future.

####Website Sources

######Framework

 - Each page has a `page.php` and a `page.layout.php`
  - `page.php` specifies the data required and `page.layout.php` specifies the layout
  - `page.php` is found in `pages/`
  - `page.layout.php` is found in `layouts/`

The main template is `/templates/main.layout.php`. References to website level resources as well as universal elements should be defined here.


To set up a page, use the following in `page.php`


```PHP
$pageTitle = "...";
$titleLabel = "...";

//Set up data here

$mainContent = $_SERVER['DOCUMENT_ROOT']."/page.layout.php";
include($_SERVER['DOCUMENT_ROOT']."/templates/main.layout.php");
```

######Helpers

Various helpers are included in `helpers/`. They include various utility functions.

For example, to check if the user is logged in, we can use the `getLogin()` function in `source/helpers/login.helper.php`

```PHP
require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

$loggedInUser = getLogin("staff");

if(isset($loggedInUser)){
	//Authorised content
}
```

######Models

Models are representations of enities in the real world and mirrors those that would be in a database.

Models can be found in `source/models/`. Without a database connection, data will be stored in the model itself. If not, SQL statements are found here too.

######Resources

 - Materialize reference can be found [here](http://materializecss.com/).
 - Internal resources can be found in `/resources`
  - The internal CSS rules are defined in `/css/main.css`
 - External resources can be found in `/bower_components`
  - e.g. Materialize: `/bower_components/materialize/dist`

---

###Credits

 - Icons: Icons made by [Freepik](http://www.freepik.com/) from [www.flaticon.com](http://www.flaticon.com/)
 - Terms and Conditions was created using a Contractology template available at [http://www.freenetlaw.com](http://www.freenetlaw.com).
