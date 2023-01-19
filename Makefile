install:
	composer install

brain-game:
	@php ./bin/brain-games

brain-even:
	@php ./bin/brain-even

brain-calc:
	@php ./bin/brain-calc

brain-gcd:
	@php ./bin/brain-gcd

brain-progression:
	@php ./bin/brain-progression

brain-prime:
	@php ./bin/brain-prime

validate:
	composer validate

dump:
	composer dump-autoload

lint:
	@composer exec --verbose phpcs -- --standard=PSR12 src bin