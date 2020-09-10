# Teste Guilherme Trevisan de Oliveira
> Laravel / MariaDb / Redis / Composer & PHPUnit

## Requisitos
* Make / Docker / Docker-Compose

## Setup
> Executar seguintes comandos
```
$ make build  ( para builder os containers do docker )
$ make install ( para instalar dependências do projeto e migrate )
```

### Comum
>Fora os comandos de "setup", segue abaixo outros comandos
```
$ make start ( inicia os containers )
$ make shell ( acessa o shell do container contendo composer e yarn )
$ make stop ( para todos containers )
$ make test ( executa bateria de testes )
$ make help ( lista todos comandos )
```