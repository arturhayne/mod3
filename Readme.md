## Mod3
This applications uses the finite state machine principle to calculate the mod 3 function from a binary number.

## Usage
 ```
 #php index.php 11101
  2
```
Where `11101` is equivalent of 29, and 29 mod 3 = 2.

## About the code
This application uses the state machine design pattern. "State is a behavioral design pattern that lets an object alter its behavior when its internal state changes. It appears as if the object changed its class."

### References
[State Design Pattern](https://refactoring.guru/design-patterns/state/php/example)

### Code style
Using [oskarstark](https://github.com/OskarStark/php-cs-fixer-ga) to autofix phpcs
```
docker run --rm -it -w=/app -v ${PWD}:/app oskarstark/php-cs-fixer-ga:latest
```

## Requirements to run
  - Docker
 
 ## How to Run 
 1. `docker-compose up -d`
 2. `docker-compose exec web bash` (command to get inside the container)
 3. `composer install` (inside container)
 4. `php index.php 10101`

## Tests
  - Inside the container: `vendor/bin/phpunit --testdox` or;
  - Outside Container: `docker-compose exec web vendor/bin/phpunit --testdox`

```
root@a7de761be239:/var/www/html# vendor/bin/phpunit --testdox
PHPUnit 10.0.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.1.25
Configuration: /var/www/html/phpunit.xml

................                                                  16 / 16 (100%)

Time: 00:00.380, Memory: 8.00 MB

Context Hanlder (Tests\ContextHanlder)
 ✔ Mod three with "110"
 ✔ Mod three with "1101"
 ✔ Mod three with "1110"
 ✔ Mod three with empty·input
 ✔ Mod three with "0"
 ✔ Mod three with "1"
 ✔ Mod three with big·number

Context (Tests\Context)
 ✔ State result with data set 0
 ✔ State result with data set 1
 ✔ State result with data set 2
 ✔ State transitions with data set 0
 ✔ State transitions with data set 1
 ✔ State transitions with data set 2
 ✔ State transitions with data set 3
 ✔ State transitions with data set 4
 ✔ State transitions with data set 5

OK (16 tests, 16 assertions)
```