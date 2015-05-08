# TEACH: IS1112FC Project (RNS01)

This repository contains all technical aspects of the project, including database schema dumps, HTML/PHP/CSS files and database model.

---

###Requirements
 - MySQL Workbench 6.0(or above)
 - MySQL 5.6
 - Apache HTTP Server 2.4
> [XAMPP](https://www.apachefriends.org/) contains both MySQL and Apache

#####Optional
 - bower  (http://bower.io/)

---

###Setup
####Database Model
> Model file: "/db_model/TEACH.mwb"

1. Open MySQL Workbench
2. Look for the __Models__ section
3. Open the model file as above
4. In __Model -> Relationship Notation__, choose __UML__

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
Packages can be found in `/bower_components`. The following are currently included.
 - materialize
 - jquery 

---

###Editing
####Database Model
Do not edit the database model concurrently, as it is a binary file and is almost impossible to merge. Only one person should edit, commit and push at any given time.

####Website Sources
 - Templates for topbars, footers etc can be copied over from `index.html`.
 - Materialize reference can be found [here](http://materializecss.com/).
 - Resources can be found in `/bower_components`
  - e.g. Materialize: `/bower_components/materialize/dist`
