lint:
	@find . -type f -name '*.php' -exec php -l {} \; || exit 1
	@./vendor/bin/phpcs --extensions=php . || exit 1
	@./vendor/bin/phpmd . ansi ruleset.xml || exit 1
