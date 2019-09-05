---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Author management


APIs for managing authors
<!-- START_cf1251112a611b51ba88e395f6bd15fe -->
## Show all Authors

> Example request:

```bash
curl -X GET -G "/authors" 
```

```javascript
const url = new URL("/authors");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /authors`


<!-- END_cf1251112a611b51ba88e395f6bd15fe -->

<!-- START_59e7915d598b2b2705178db7e5a982f6 -->
## Select one Author

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "/authors/1" \
    -H "Content-Type: application/json" \
    -d '{"author_id":10}'

```

```javascript
const url = new URL("/authors/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "author_id": 10
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 4,
    "name": "Jessica Jones",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET /authors/{author}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    author_id | integer |  optional  | the ID of the author

<!-- END_59e7915d598b2b2705178db7e5a982f6 -->

<!-- START_bfb05bba6bd6e003fd9a428bfb610255 -->
## Create New Author

> Example request:

```bash
curl -X POST "/authors" \
    -H "Content-Type: application/json" \
    -d '{"name":"consequatur","password":"eum","e-mail":"quis","twitter":"ut","github":"ex","last_published":"quia"}'

```

```javascript
const url = new URL("/authors");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "consequatur",
    "password": "eum",
    "e-mail": "quis",
    "twitter": "ut",
    "github": "ex",
    "last_published": "quia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /authors`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The Author name.
    password | password |  required  | The Author's password.
    e-mail | e-mail |  required  | The Author's e-mail.
    twitter | e-mail |  required  | The Author's twitter.
    github | e-mail |  required  | The Author's github.
    last_published | The |  optional  | last Author's article.

<!-- END_bfb05bba6bd6e003fd9a428bfb610255 -->

<!-- START_303f73b051cad41035a040f52b6aa908 -->
## Update Author&#039;s details

> Example request:

```bash
curl -X PUT "/authors/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"eveniet","password":"fuga","e-mail":"qui","twitter":"optio","github":"laborum","last_published":"sint"}'

```

```javascript
const url = new URL("/authors/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "eveniet",
    "password": "fuga",
    "e-mail": "qui",
    "twitter": "optio",
    "github": "laborum",
    "last_published": "sint"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /authors/{author}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | The Author name.
    password | password |  optional  | The The Author's password.
    e-mail | e-mail |  optional  | The Author's e-mail.
    twitter | e-mail |  optional  | The The Author's twitter.
    github | e-mail |  optional  | The The Author's github.
    last_published | The |  optional  | last Author's article.

<!-- END_303f73b051cad41035a040f52b6aa908 -->

<!-- START_76829248ba3a4fa170c545d561bf5631 -->
## Delete Author

> Example request:

```bash
curl -X DELETE "/authors/1" \
    -H "Content-Type: application/json" \
    -d '{"id":"debitis"}'

```

```javascript
const url = new URL("/authors/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": "debitis"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /authors/{author}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | Int |  required  | The Author's ID.

<!-- END_76829248ba3a4fa170c545d561bf5631 -->

#general


<!-- START_ac6527c96d4b9793a4c77ff1e22a8906 -->
## /auth/login
> Example request:

```bash
curl -X POST "/auth/login" 
```

```javascript
const url = new URL("/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /auth/login`


<!-- END_ac6527c96d4b9793a4c77ff1e22a8906 -->

<!-- START_8b794a0f08ddd4d69013d2fd7726b7e2 -->
## /articles
> Example request:

```bash
curl -X GET -G "/articles" 
```

```javascript
const url = new URL("/articles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /articles`


<!-- END_8b794a0f08ddd4d69013d2fd7726b7e2 -->

<!-- START_26f1d28e7bb78a0d43ff6c296c65e4cf -->
## /articles/{article}
> Example request:

```bash
curl -X PUT "/articles/1" 
```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /articles/{article}`


<!-- END_26f1d28e7bb78a0d43ff6c296c65e4cf -->

<!-- START_46be8f8d1a61d59af8bdf43694836b62 -->
## /articles/{article}
> Example request:

```bash
curl -X GET -G "/articles/1" 
```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /articles/{article}`


<!-- END_46be8f8d1a61d59af8bdf43694836b62 -->

<!-- START_24a000b518b36afd387d5e167fde2c1a -->
## /articles
> Example request:

```bash
curl -X POST "/articles" 
```

```javascript
const url = new URL("/articles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /articles`


<!-- END_24a000b518b36afd387d5e167fde2c1a -->

<!-- START_2386275662bedc625d0b1e6e95087f6a -->
## /articles/{article}
> Example request:

```bash
curl -X PATCH "/articles/1" 
```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH /articles/{article}`


<!-- END_2386275662bedc625d0b1e6e95087f6a -->

<!-- START_e41d3b962100ea51125a979028919282 -->
## /articles/{article}
> Example request:

```bash
curl -X DELETE "/articles/1" 
```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /articles/{article}`


<!-- END_e41d3b962100ea51125a979028919282 -->


