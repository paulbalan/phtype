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
The same technique applied to any other class.
## Using instructions
Bellow are going to be listed instruction for every class included in the framework. 

## sql.class.php
### query method
Used for inserting, deleting or updating rows of a database.

$sql_code = The actual code written in SQL for that specific task, prepared statements only

$params = An array with the values of the parameters for the prepared statements
```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->query($sql_code, $params); //Call a specific method
```
### fetch_assoc method
Returns an associative array with the rows selected from the database.
 If there are no rows matching the conditions for search the function returns false(boolean);

$sql_code = The actual code written in SQL for that specific task, prepared statements only

$params = An array with the values of the parameters for the prepared statements
```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->fetch_assoc($sql_code, $params); //Call a specific method
```

### fetch_num method
Returns a numerical array with the rows selected from the database. If there are no rows matching the conditions for search the function returns false(boolean);

$sql_code = The actual code written in SQL for that specific task, prepared statements only

$params = An array with the values of the parameters for the prepared statements
```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->fetch_num($sql_code, $params); //Call a specific method
```

### fetch_obj method
Returns an object array with the rows selected from the database. If there are no rows matching the conditions for search the function returns false(boolean);

$sql_code = The actual code written in SQL for that specific task, prepared statements only

$params = An array with the values of the parameters for the prepared statements
```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->fetch_obj($sql_code, $params); //Call a specific method
```

### fetch_single method
Returns an array with a single row selected from the database. If there are no rows matching the conditions for search the function returns false(boolean).

$sql_code = The actual code written in SQL for that specific task, prepared statements only

$params = An array with the values of the parameters for the prepared statements

Note: If there is more than one row that matches your search conditions then only the first row found will be returned
```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->fetch_single($sql_code, $params); //Call a specific method
```

### sanitize method
Returns the input string but sanitized.

Note: It uses the following functions: trim, strip_tags, stripslashes and htmlspecialchars.

```php
require_once("sql.class.php"); //Include the specific ".class.php" file
$sql = new Sql; //Instantiate a new object

$sql->sanitize($input); //Call a specific method
```
