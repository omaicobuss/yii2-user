# Exemplos de Uso dos Models do Módulo User

## User

### Buscar usuário por e-mail
```php
$user = \omaicobuss\user\models\User::findByEmail('email@exemplo.com');
```

### Definir senha do usuário
```php
$user->setPassword('novaSenha123');
$user->save();
```

### Validar senha
```php
if ($user->validatePassword('senhaInformada')) {
    // Senha correta
}
```

### Atribuir função ao usuário
```php
$user->assignRole('admin');
```

### Listar funções do usuário
```php
foreach ($user->roles as $role) {
    echo $role->name;
}
```

### Verificar aniversário
```php
if ($user->isBirthday()) {
    echo 'Feliz aniversário!';
}
```

## Role

### Buscar função pelo nome
```php
$role = \omaicobuss\user\models\Role::findByName('admin');
```

### Listar usuários de uma função
```php
foreach ($role->users as $user) {
    echo $user->username;
}
```

### Atribuir função a um usuário
```php
$role->assignToUser($user->id);
```

## AuthLog

### Registrar tentativa de login
```php
\omaicobuss\user\models\AuthLog::logAttempt($user->id, $ip, $success);
```

### Consultar tentativas recentes
```php
$logs = \omaicobuss\user\models\AuthLog::getRecentAttempts($user->id, 5);
```

### Verificar se IP está bloqueado
```php
if (\omaicobuss\user\models\AuthLog::isIpBlocked($ip)) {
    echo 'IP bloqueado por excesso de tentativas.';
}
```

---

Esses exemplos podem ser usados diretamente em controllers, actions ou comandos Yii2.
