# Lumen-Boilerplate

Versão do Lumen `5.8`\
Versão do Swaggler `OAS3`\
Padrao de código `PSR-2`\
PHP `7.3`

## Testes

* Nomenclatura dos metodos com o padrao `snake case`
* Banco separado para testes
* Limpar banco após execução de testes.

Rodar testes
```bash
# Rodar todos os testes
php vendor/bin/phpunit

# Rodar teste somente para um arquivo
php vendor/bin/phpunit --filter CollaboratorTest

# Rodar teste somente para um determinado método.
php vendor/bin/phpunit --filter should_return_collaborator_collection

```

## RoadMap

* [andersao/l5-repository](https://github.com/andersao/l5-repository)
* [thephpleague/fractal](https://github.com/thephpleague/fractal)
* [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
* [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors)
* [mpociot/laravel-apidoc-generator](https://github.com/mpociot/laravel-apidoc-generator)
* coverage
* [codedungeon/phpunit-result-printer](https://github.com/mikeerickson/phpunit-pretty-result-printer) e [nunomaduro/collision](https://github.com/nunomaduro/collision) para testes mais agradaveis;
* [illuminate/routing](https://github.com/illuminate/routing) Para requisições `throttling`
* [itsgoingd/clockwork](https://underground.works/clockwork/) para facil debug;
* [laravel/tinker](https://github.com/laravel/tinker);
* [spatie/laravel-cors](https://github.com/spatie/laravel-cors);
