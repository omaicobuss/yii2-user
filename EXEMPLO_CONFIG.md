## Exemplo de configuração para importar o módulo manualmente em qualquer projeto Yii2

1. Copie todo o conteúdo da pasta `src/` deste módulo para `modules/user` do seu projeto Yii2.

2. No arquivo de configuração da sua aplicação (ex: `config/web.php`), adicione:

```php
'modules' => [
    'user' => [
        'class' => 'omaicobuss\user\Module',
    ],
],
```

3. Execute as migrations do módulo:

```
php yii migrate --migrationPath=@app/modules/user/migrations
```

4. Pronto! Agora acesse as rotas do módulo normalmente, por exemplo:
- `/user/auth/login`
- `/user/auth/register`
- `/user/admin/index`

Se precisar customizar, basta sobrescrever controllers, views ou models dentro do seu próprio projeto.
