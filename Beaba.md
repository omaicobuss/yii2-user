# Guia Beabá: Implantação do Módulo omaicobuss/yii2-user-module

Este guia é para quem está começando a programar e quer instalar e usar o módulo de usuários em um projeto Yii2.

## 1. O que é este módulo?
É um pacote pronto para adicionar cadastro, login, painel de administração de usuários, permissões, integração com Bootstrap 5, OAuth, internacionalização e mais, em qualquer sistema Yii2.

## 2. Pré-requisitos
- Ter o PHP instalado (versão 8.0 ou superior)
- Ter o Composer instalado (https://getcomposer.org/)
- Ter um projeto Yii2 já criado (ou criar um novo)

## 3. Instalando o módulo
Abra o terminal na pasta do seu projeto Yii2 e execute:

```
composer require omaicobuss/yii2-user-module
```

Esse comando baixa o módulo e suas dependências.

## 4. Ativando o módulo no Yii2
Abra o arquivo de configuração do seu projeto, normalmente `config/web.php`.

Adicione o módulo na seção `modules`:

```php
'modules' => [
    'user' => [
        'class' => 'app\\modules\\user\\Module',
    ],
],
```

Isso faz o Yii2 reconhecer o módulo e suas rotas.

## 5. Executando as migrations (criação das tabelas no banco)
Se o módulo tiver migrations, rode:

```
php yii migrate --migrationPath=@app/modules/user/migrations
```

Esse comando cria as tabelas necessárias para usuários, funções, logs, etc.

## 6. Acessando as telas do módulo
Abra o navegador e acesse:
- `/user/auth/login` para login
- `/user/auth/register` para cadastro
- `/user/admin/index` para painel admin
- `/user/user/profile` para perfil do usuário

## 7. Testando o módulo
Para rodar os testes automatizados (opcional):

```
composer install
vendor\bin\phpunit --configuration phpunit.xml
```

## 8. Internacionalização
O módulo já vem com traduções pt-BR e en-US. Para usar outro idioma, configure o Yii2 para usar a linguagem desejada.

## 9. Precisa de ajuda?
Entre em contato com o autor:
- Maico Oliveira Buss
- Email: maico.buss@gmail.com
- GitHub: https://github.com/omaicobuss

Pronto! Agora você tem um módulo de usuários completo e pronto para usar no seu Yii2.
