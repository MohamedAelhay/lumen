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

#Article Management


APIs for managing Article
<!-- START_8b794a0f08ddd4d69013d2fd7726b7e2 -->
## Show all Article

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
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


> Example response (200):

```json
{
    "data": [
        {
            "ID": 0,
            "First Title": "Alysa Morar",
            "Second Title": "Maeve Schowalter",
            "Content": "Ut in ipsam eaque rerum aliquid et. Nesciunt enim nihil esse nesciunt est veniam. Hic sit quod et totam.",
            "Image": "\/tmp\/f300441e88938b3cf6b1f54507f6d286.jpg"
        },
        {
            "ID": 0,
            "First Title": "Alysa Morar",
            "Second Title": "Maeve Schowalter",
            "Content": "Ut in ipsam eaque rerum aliquid et. Nesciunt enim nihil esse nesciunt est veniam. Hic sit quod et totam.",
            "Image": "\/tmp\/f300441e88938b3cf6b1f54507f6d286.jpg"
        }
    ]
}
```

### HTTP Request
`GET /articles`


<!-- END_8b794a0f08ddd4d69013d2fd7726b7e2 -->

<!-- START_26f1d28e7bb78a0d43ff6c296c65e4cf -->
## Create Update Article

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "/articles/1" \
    -H "Content-Type: application/json" \
    -d '{"first_title":"qui","second_title":"aut","content":"placeat","image":"cum","author_id":"voluptate"}'

```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "first_title": "qui",
    "second_title": "aut",
    "content": "placeat",
    "image": "cum",
    "author_id": "voluptate"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "ID": null,
        "Name": "Tyree O'Keefe",
        "E-mail": "bailey80@metz.com",
        "Github": "fadel.marcelino@hotmail.com",
        "Twitter": "willms.mireya@block.com",
        "Location": "32821 Stracke Squares\nHectormouth, PA 71231-9885",
        "Latest Article Publish": null
    }
}
```

### HTTP Request
`PUT /articles/{article}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_title | string |  optional  | Main title.
    second_title | string |  optional  | title.
    content | text |  optional  | content.
    image | image |  optional  | image.
    author_id | Int |  optional  | The Author's ID.

<!-- END_26f1d28e7bb78a0d43ff6c296c65e4cf -->

<!-- START_46be8f8d1a61d59af8bdf43694836b62 -->
## Show one Articles

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "/articles/1" \
    -H "Content-Type: application/json" \
    -d '{"article_id":16}'

```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "article_id": 16
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
    "data": [
        {
            "ID": 0,
            "First Title": "Nels Hill",
            "Second Title": "Don Morissette",
            "Content": "Veniam necessitatibus beatae vero et odit doloremque. Ut eos distinctio autem exercitationem deleniti. Minima sit iusto quas illum quia qui.",
            "Image": "\/tmp\/35df6f6a07ee97a706c97109de928cb1.jpg"
        },
        {
            "ID": 0,
            "First Title": "Nels Hill",
            "Second Title": "Don Morissette",
            "Content": "Veniam necessitatibus beatae vero et odit doloremque. Ut eos distinctio autem exercitationem deleniti. Minima sit iusto quas illum quia qui.",
            "Image": "\/tmp\/35df6f6a07ee97a706c97109de928cb1.jpg"
        }
    ]
}
```

### HTTP Request
`GET /articles/{article}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    article_id | integer |  optional  | the ID of the article

<!-- END_46be8f8d1a61d59af8bdf43694836b62 -->

<!-- START_24a000b518b36afd387d5e167fde2c1a -->
## Create New Article

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "/articles" \
    -H "Content-Type: application/json" \
    -d '{"first_title":"in","second_title":"eum","content":"totam","image":"quaerat","author_id":"quo"}'

```

```javascript
const url = new URL("/articles");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "first_title": "in",
    "second_title": "eum",
    "content": "totam",
    "image": "quaerat",
    "author_id": "quo"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "ID": null,
        "Name": "Mrs. Daisha Blanda MD",
        "E-mail": "abby03@gibson.org",
        "Github": "lisandro45@nienow.org",
        "Twitter": "alayna.murphy@anderson.com",
        "Location": "60577 Goldner Spring\nNorth Julienchester, WY 06507-0465",
        "Latest Article Publish": null
    }
}
```

### HTTP Request
`POST /articles`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_title | string |  required  | Main title.
    second_title | string |  required  | title.
    content | text |  required  | content.
    image | image |  required  | image.
    author_id | Int |  required  | The Author's ID.

<!-- END_24a000b518b36afd387d5e167fde2c1a -->

<!-- START_2386275662bedc625d0b1e6e95087f6a -->
## Create Update Article

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PATCH "/articles/1" \
    -H "Content-Type: application/json" \
    -d '{"first_title":"maiores","second_title":"aut","content":"provident","image":"id","author_id":"repellendus"}'

```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "first_title": "maiores",
    "second_title": "aut",
    "content": "provident",
    "image": "id",
    "author_id": "repellendus"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "ID": null,
        "Name": "Dr. Reid Fay II",
        "E-mail": "lcormier@renner.com",
        "Github": "jackeline.mraz@nienow.biz",
        "Twitter": "marilyne49@gmail.com",
        "Location": "456 Raphael Groves Apt. 001\nKuhicmouth, WV 64936-0849",
        "Latest Article Publish": null
    }
}
```

### HTTP Request
`PATCH /articles/{article}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_title | string |  optional  | Main title.
    second_title | string |  optional  | title.
    content | text |  optional  | content.
    image | image |  optional  | image.
    author_id | Int |  optional  | The Author's ID.

<!-- END_2386275662bedc625d0b1e6e95087f6a -->

<!-- START_e41d3b962100ea51125a979028919282 -->
## Delete Article

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "/articles/1" \
    -H "Content-Type: application/json" \
    -d '{"id":"officia"}'

```

```javascript
const url = new URL("/articles/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": "officia"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{}
```

### HTTP Request
`DELETE /articles/{article}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | Int |  required  | The Author's ID.

<!-- END_e41d3b962100ea51125a979028919282 -->

#Auth Layer


APIs for managing Auth
<!-- START_ac6527c96d4b9793a4c77ff1e22a8906 -->
## Author Login

> Example request:

```bash
curl -X POST "/auth/login" \
    -H "Content-Type: application/json" \
    -d '{"e-mail":"consequuntur","password":"cumque"}'

```

```javascript
const url = new URL("/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "e-mail": "consequuntur",
    "password": "cumque"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{}
```

### HTTP Request
`POST /auth/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    e-mail | e-mail |  required  | The Author's e-mail.
    password | password |  required  | The Author's password.

<!-- END_ac6527c96d4b9793a4c77ff1e22a8906 -->

#Author management


APIs for managing authors
<!-- START_cf1251112a611b51ba88e395f6bd15fe -->
## Show all Authors

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
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


> Example response (200):

```json
{
    "data": [
        {
            "ID": null,
            "Name": "Dr. Kolby Murphy",
            "E-mail": "kiarra37@konopelski.info",
            "Github": "vladimir56@johnston.com",
            "Twitter": "verda59@yahoo.com",
            "Location": "25952 Tyreek Village\nDaronfort, CA 68852",
            "Latest Article Publish": null
        },
        {
            "ID": null,
            "Name": "Dr. Kolby Murphy",
            "E-mail": "kiarra37@konopelski.info",
            "Github": "vladimir56@johnston.com",
            "Twitter": "verda59@yahoo.com",
            "Location": "25952 Tyreek Village\nDaronfort, CA 68852",
            "Latest Article Publish": null
        }
    ]
}
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
    -d '{"author_id":18}'

```

```javascript
const url = new URL("/authors/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "author_id": 18
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
    "data": {
        "ID": null,
        "Name": "Tina Dooley",
        "E-mail": "gulgowski.jannie@yahoo.com",
        "Github": "angel.oberbrunner@gmail.com",
        "Twitter": "paufderhar@gmail.com",
        "Location": "68432 Wolf Estate Apt. 447\nGislasonfort, MT 81934",
        "Latest Article Publish": null
    }
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
    -d '{"name":"maxime","password":"quisquam","e-mail":"ut","location":"laudantium","twitter":"enim","github":"corrupti","last_published":"laboriosam"}'

```

```javascript
const url = new URL("/authors");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "maxime",
    "password": "quisquam",
    "e-mail": "ut",
    "location": "laudantium",
    "twitter": "enim",
    "github": "corrupti",
    "last_published": "laboriosam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "ID": null,
        "Name": "Mr. Virgil Schultz V",
        "E-mail": "piper07@hotmail.com",
        "Github": "abel16@gmail.com",
        "Twitter": "vabshire@hotmail.com",
        "Location": "1274 Halvorson Wall\nSouth Nick, OK 56458",
        "Latest Article Publish": null
    }
}
```

### HTTP Request
`POST /authors`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The Author name.
    password | password |  required  | The Author's password.
    e-mail | e-mail |  required  | The Author's e-mail.
    location | address |  required  | The Author's address.
    twitter | e-mail |  required  | The Author's twitter.
    github | e-mail |  required  | The Author's github.
    last_published | The |  optional  | last Author's article.

<!-- END_bfb05bba6bd6e003fd9a428bfb610255 -->

<!-- START_303f73b051cad41035a040f52b6aa908 -->
## Update Author&#039;s details

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "/authors/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"optio","password":"ea","e-mail":"ea","location":"unde","twitter":"recusandae","github":"ut","last_published":"voluptatem"}'

```

```javascript
const url = new URL("/authors/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "optio",
    "password": "ea",
    "e-mail": "ea",
    "location": "unde",
    "twitter": "recusandae",
    "github": "ut",
    "last_published": "voluptatem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "ID": null,
        "Name": "Luis Brown",
        "E-mail": "gdonnelly@yahoo.com",
        "Github": "ronny82@yahoo.com",
        "Twitter": "kelley.effertz@gmail.com",
        "Location": "712 Reina Ways\nMarvinville, MS 82434-8945",
        "Latest Article Publish": null
    }
}
```

### HTTP Request
`PUT /authors/{author}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | The Author name.
    password | password |  optional  | The The Author's password.
    e-mail | e-mail |  optional  | The Author's e-mail.
    location | address |  optional  | The The Author's address.
    twitter | e-mail |  optional  | The The Author's twitter.
    github | e-mail |  optional  | The The Author's github.
    last_published | The |  optional  | last Author's article.

<!-- END_303f73b051cad41035a040f52b6aa908 -->

<!-- START_76829248ba3a4fa170c545d561bf5631 -->
## Delete Author

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "/authors/1" \
    -H "Content-Type: application/json" \
    -d '{"id":"dolorem"}'

```

```javascript
const url = new URL("/authors/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": "dolorem"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{}
```

### HTTP Request
`DELETE /authors/{author}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | Int |  required  | The Author's ID.

<!-- END_76829248ba3a4fa170c545d561bf5631 -->


