
##Monujo
[![Build Status](https://secure.travis-ci.org/monujo/monujo.png)](http://travis-ci.org/monujo/monujo)

Personal finance planning.
Check out our [wiki](https://github.com/monujo/monujo/wiki) for further information about using and contributing to the project.

-----

##How to Install
Assuming you have php cli installed on a *nix machine (or windows with cygwin).

###1) Downloading
####1.1) Clone the develop branch

	git clone -b develop http://github.com/monujo/monujo


###2) Install the Dependencies via Composer
#####2.1) If you don't have composer installed globally

	cd your-folder
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

#####2.2) For globally composer installations

	cd your-folder
	composer install

-----

###3) Setup Database
Create a new database.

Now that you have the Monujo project cloned and all the dependencies installed, you need to create a database for it.

After the database is created, open the file `app/config/database.php` and update the needed entries.

-----

###4) Install

cd into the build folder and from your command line run:

	chmod +x setup.sh
	./setup.sh
	
You can now login to the application with:

	email: admin@admin.com
	password: admin
