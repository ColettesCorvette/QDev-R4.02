install:
	composer install

start:
	php -S localhost:8080

test:
	# cd tst && ../vendor/bin/phpunit
	./vendor/bin/phpunit tst

lint:
	@find . -type f -name '*.php' -exec php -l {} \; || exit 1
	@./vendor/bin/phpcs --extensions=php . || exit 1
	@./vendor/bin/phpmd . ansi ruleset.xml || exit 1

