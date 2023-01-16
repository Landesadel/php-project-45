install:
	composer install

brain-game:
	@php ./bin/brain-games

brain-even:
	@php ./bin/brain-even

validate:
	composer validate

dump:
	composer dump-autoload

lint:
	@composer exec --verbose phpcs -- --standard=PSR12 src bin