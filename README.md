# Composer
Exemplo de uso de Composer, PHPUnit e PHP Code Sniffer
Abaixo segue alguns códigos muito usados nas frameworks citadas...

# Uso geral em todas
--version
--help

# COMPOSER (https://getcomposer.org/)
composer init
composer install

# PHPUNIT (https://phpunit.de/getting-started/phpunit-9.html)
vendor\bin\phpunit tests --colors=always
vendor\bin\phpunit tests --colors=always --testdox-text=report-texts.txt 
vendor\bin\phpunit tests --colors=always --testdox-text=report-texts.txt --coverage-html=_report

# PHP CODE SNIFFER (https://github.com/squizlabs/PHP_CodeSniffer)
vendor/bin/phpcs PASTA/ARQUIVO.TAL ou somenta PASTA
vendor/bin/phpcs src/ --standard=PSR12
vendor/bin/phpcbf src/ --standard=PSR12
