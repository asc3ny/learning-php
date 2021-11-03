composer-install:
	composer install

app-install: composer-install
app-test: 
	php vendor/bin/phpunit src/FindValues/FindMissingValuesTest.php
