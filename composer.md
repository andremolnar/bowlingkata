# JSON Syntax
Your composer.json file must be proper JSON
* No unescaped quotes
* No code comments
* No strings with linebreaks spanning multiple lines

{
# Basic information about your project
    "name": "planetarium/bowling",
    "description": "Bowling Kata Workshop",
    "license": "MIT",
    "authors": [
        {
            "name": "andremolnar",
            "email": "andre@myplanetdigital.com"
        }
    ],
# Required Libraries
* Stuff that you'd like to see in your project
* See: [basic usage](http://getcomposer.org/doc/01-basic-usage.md)
* See: [schema - require and require-dev] (http://getcomposer.org/doc/04-schema.md#require-dev)
* Two Types
    + require
    + require-dev (Only required if composer install is run with --dev)

## Example of require-dev
    "require-dev": {
        "phpunit/phpunit": "3.7.*"
    }

# Autoloading your project's files
    "autoload": {
        "psr-0": {"MDP": "src/"}
     }
}
