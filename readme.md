## HasinHayder/D

A utility package to help PHP developers debug their script by providing utility methods to collect data and display them all at once

#### Usage
You can use this package as 

```php
use HasinHayder\D\D;
require_once "vendor/autoload.php";

$person = "John Doe";
$array = ["country"=>"Bangladesh","capital"=>"Dhaka"];
D::echo($person);
D::print_r($array);
D::print_r("My love is %s","Bangladesh");
D::dump();
D::dumpJSON();
D::dumpInConsole();
```