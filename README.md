```javascript
var xhr = new XMLHttpRequest();
var data = new FormData;

data.append('action', 'block');

xhr.open("POST", '/dev/protection/from/anything', true)
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

xhr.send(data);
```