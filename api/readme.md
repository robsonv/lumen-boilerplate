# Lumen-Boilerplate

Versão do Lumen `5.8`
Versão do Swaggler `OAS3`

## Testing

It's *probably* a good idea to test your code. Lumen Boilerplate comes with tests to show you the way.

```bash
# Run all tests.
php vendor/bin/phpunit

# Run only unit tests.
php vendor/bin/phpunit --testsuite Unit

# Run only integration tests.
php vendor/bin/phpunit --testsuite Integration

# Run only tests within a given file.
php vendor/bin/phpunit tests/Integration/UserControllerTest.php

# Run only a given test method.
php vendor/bin/phpunit --filter user_can_read_his_own_data

# You can also do both.
php vendor/bin/phpunit tests/Integration/UserControllerTest.php --filter user_can_read_his_own_data
```
