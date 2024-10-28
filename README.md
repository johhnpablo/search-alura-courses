# Projeto de Busca de Cursos da Alura

Este projeto tem como objetivo criar uma aplicação PHP que busca cursos no site da Alura utilizando uma classe CSS específica. Durante o desenvolvimento, adquiri diversos conhecimentos relacionados ao Composer e boas práticas em PHP.

## Sumário

- [Instalação do Composer](#instalação-do-composer)
- [Tipo Padrão de um Projeto Composer: Library](#tipo-padrão-de-um-projeto-composer-library)
- [Funcionamento do Composer vs Apt/Yum](#funcionamento-do-composer-vs-aptyum)
- [Nomenclatura do Projeto](#nomenclatura-do-projeto)
- [Gerenciamento de Dependências e Packagist](#gerenciamento-de-dependências-e-packagist)
- [Utilização do GuzzleHTTP e DomCrawler do Symfony](#utilização-do-guzzlehttp-e-domcrawler-do-symfony)
- [Princípio da Responsabilidade Única](#princípio-da-responsabilidade-única)
- [Autoload no Composer](#autoload-no-composer)
- [PSRs do PHP-FIG](#psrs-do-php-fig)
- [Classmap no Composer](#classmap-no-composer)
- [Ferramentas de Qualidade de Código em PHP](#ferramentas-de-qualidade-de-código-em-php)
- [Automatização de Scripts no Composer](#automatização-de-scripts-no-composer)
- [Publicação de um Pacote PHP](#publicação-de-um-pacote-php)
- [Conclusão](#conclusão)

## Instalação do Composer

Iniciei o projeto aprendendo a instalar o Composer, o gerenciador de dependências padrão para PHP. A instalação correta é fundamental para o gerenciamento eficiente de pacotes e bibliotecas no projeto.

## Tipo Padrão de um Projeto Composer: Library

Descobri que o tipo padrão de um projeto no Composer é **library**. Isso significa que, por padrão, o Composer trata o projeto como uma biblioteca que pode ser compartilhada e reutilizada em outros projetos.

## Funcionamento do Composer vs Apt/Yum

Entendi que o Composer funciona de maneira diferente de gerenciadores de pacotes como **Apt** ou **Yum**. Enquanto esses gerenciadores instalam dependências globalmente no sistema, o Composer armazena as dependências diretamente no projeto. No entanto, é possível instalar dependências globais se necessário.

## Nomenclatura do Projeto

Aprendi sobre a importância da nomenclatura no `composer.json`. Seguir o padrão `vendor/package` ajuda na organização e facilita a identificação do pacote no **Packagist**.

## Gerenciamento de Dependências e Packagist

Explorei como gerenciar dependências e buscar pacotes no [Packagist](https://packagist.org/), o repositório padrão para o Composer. Isso inclui adicionar, atualizar e remover pacotes conforme as necessidades do projeto.

## Utilização do GuzzleHTTP e DomCrawler do Symfony

Implementei o uso do **GuzzleHTTP** para realizar requisições HTTP de forma eficiente e do **DomCrawler** do Symfony para navegar e extrair dados do DOM das páginas web.

## Princípio da Responsabilidade Única

Estudei o **Princípio da Responsabilidade Única** (SRP - Single Responsibility Principle), que prega que uma classe deve ter apenas uma única responsabilidade. Isso melhora a manutenibilidade e a clareza do código.

## Autoload no Composer

Aprendi sobre o **autoload** no Composer, que automatiza o carregamento de classes sem a necessidade de `require` ou `include`. Isso é configurado no `composer.json` e segue padrões como PSR-4.

## PSRs do PHP-FIG

Conheci as **PSRs (PHP Standards Recommendations)** do **PHP-FIG**, que são recomendações de padrões para melhorar a interoperabilidade entre frameworks e bibliotecas em PHP. Algumas PSRs estudadas incluem:

- **PSR-1**: Padrões básicos de codificação.
- **PSR-4**: Autoloading de classes baseado em namespaces.

## Classmap no Composer

Entendi como utilizar o **classmap** no Composer para mapear classes que não seguem padrões de autoload, permitindo que o Composer as carregue automaticamente.

## Ferramentas de Qualidade de Código em PHP

Explorei ferramentas essenciais para garantir a qualidade do código:

- **PHPUnit**: Framework para testes unitários.
- **PHPCS (PHP CodeSniffer)**: Análise de conformidade com padrões de codificação.
- **PHPStan**: Análise estática de código para encontrar erros potenciais.

## Automatização de Scripts no Composer

Aprendi a automatizar tarefas utilizando scripts no Composer:

- Adicionar scripts personalizados no `composer.json`.
- Compor scripts para executar múltiplas tarefas.
- Descrição de scripts para melhor documentação.
- Criar scripts que executam outros scripts.
- Utilizar eventos do Composer para executar scripts automaticamente em determinadas ações.

## Publicação de um Pacote PHP

Concluí o projeto publicando um pacote PHP:

- Aprendi sobre **versionamento semântico** para gerenciar versões do pacote.
- Configurei o **binário** no `composer.json` para permitir a execução de comandos via linha de comando.
- Publiquei o pacote no Packagist para compartilhamento com a comunidade.

## Conclusão

Este curso proporcionou um aprofundamento significativo no uso do Composer e nas boas práticas de desenvolvimento em PHP. Através da criação deste projeto, desenvolvi habilidades que serão fundamentais para projetos futuros.

