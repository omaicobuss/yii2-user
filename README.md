# yii2-user-module

Módulo Yii2 para gerenciamento de usuários reutilizável em múltiplas aplicações.

## Funcionalidades
- Registro, autorização, recuperação de senha, alteração de e-mail
- Painel de administração de usuários
- Suporte à criação de funções e múltiplas funções por usuário
- Widget de Feliz Aniversário customizável
- Registro de tentativas de login com bloqueio de IP
- Integração com Bootstrap 5
- Integração com OAuth
- Suporte a múltiplos idiomas (base pt-BR)
- Fácil integração em qualquer aplicação Yii2

## Instalação
1. Adicione o módulo ao seu projeto via Composer:
   ```sh
   composer require acme/yii2-user-module
   ```
2. Certifique-se de que as dependências do Yii2 e Bootstrap 5 estejam instaladas.

## Estrutura do Módulo
```
src/
  Module.php
  controllers/
    AuthController.php
    AdminController.php
    UserController.php
  models/
    User.php
    Role.php
    AuthLog.php
  widgets/
    BirthdayWidget.php
  views/
    auth/
    admin/
    user/
  messages/
    pt-BR/
    en-US/
  assets/
  config/
    module.php
  migrations/
```

## Integração
Inclua o módulo na configuração da sua aplicação Yii2:
```php
'modules' => [
    'user' => [
        'class' => 'app\\modules\\user\\Module',
    ],
],
```

## Testes
Implemente testes conforme a necessidade da aplicação integradora.

## Licença
MIT
