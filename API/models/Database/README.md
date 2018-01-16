## Connect

Connexion to MySQL, plus very limited interraction through PDO :
* Prepare a PDO Statement
* Bind Values to the Statement
* Execute the Statement

### Connect::setBindingParams(Array $params)

$params must be declared as follow :
```php
[ 
    ":tag" => [
        "value" => value,
        "type" => PDO_TYPE
    ], 
    ":tag" => [
        "value" => value,
        "type" => PDO_TYPE
    ]
]
``` 