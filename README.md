# PHtype 

PHtype is a PHP framework for prototyping the back-end of web apps fast.

## Installation

In order for it to work, you have to place the "config.php" file and any other ".class.php" files in the same directory.

You should only modify the "config.php" file. As a rule of thumb, any modification to a ".class.php" file will modify the core functionality of the framework and it's not recommended, instead just inherit the classes and make your changes.


## Usage

The framework is made out of the "config.php" file which holds various information such as database details and as many ".class.php" files as you want.

PHtype is made out of small chunks of code, called classes that are actually PHP OOP classes. The idea behind it is to only download and include what you will actually need instead of including PHP files for the sake of including them.

To use any of the classes just include the ".class.php" file that you want to use to your new php page and instantiate a new object. From this point just follow the instruction listed below for every class of the framework.

```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->query("INSERT INTO user(name) VALUES(?)", array("Paul")); //Call a specific method
```

