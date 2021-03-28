# Orders

APIs para gerenciar Orders

## Retorna todas as comandas registradas.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 42,
            "total": 204.7,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T02:06:17.000000Z",
            "updated_at": "2021-03-28T02:06:17.000000Z",
            "client": {
                "id": 13,
                "name": "Eduarda",
                "email": "eduarda@hotmail.com",
                "phone": "828888888",
                "created_at": "2021-03-28T02:01:01.000000Z",
                "updated_at": "2021-03-28T02:01:01.000000Z"
            },
            "waiter": {
                "id": 2,
                "name": "Cícero Fahning",
                "email": "cicerofahning@hotmail.com",
                "phone": "82999384018",
                "role": "garçom",
                "created_at": "2021-03-27T13:57:37.000000Z",
                "updated_at": "2021-03-27T13:57:37.000000Z"
            }
        },
        {
            "id": 43,
            "total": 0,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T03:29:53.000000Z",
            "updated_at": "2021-03-28T03:29:53.000000Z",
            "client": {
                "id": 13,
                "name": "Eduarda",
                "email": "eduarda@hotmail.com",
                "phone": "828888888",
                "created_at": "2021-03-28T02:01:01.000000Z",
                "updated_at": "2021-03-28T02:01:01.000000Z"
            },
            "waiter": {
                "id": 2,
                "name": "Cícero Fahning",
                "email": "cicerofahning@hotmail.com",
                "phone": "82999384018",
                "role": "garçom",
                "created_at": "2021-03-27T13:57:37.000000Z",
                "updated_at": "2021-03-27T13:57:37.000000Z"
            }
        },
        {
            "id": 44,
            "total": 26.7,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T03:30:57.000000Z",
            "updated_at": "2021-03-28T03:30:59.000000Z",
            "client": {
                "id": 13,
                "name": "Eduarda",
                "email": "eduarda@hotmail.com",
                "phone": "828888888",
                "created_at": "2021-03-28T02:01:01.000000Z",
                "updated_at": "2021-03-28T02:01:01.000000Z"
            },
            "waiter": {
                "id": 2,
                "name": "Cícero Fahning",
                "email": "cicerofahning@hotmail.com",
                "phone": "82999384018",
                "role": "garçom",
                "created_at": "2021-03-27T13:57:37.000000Z",
                "updated_at": "2021-03-27T13:57:37.000000Z"
            }
        },
        {
            "id": 45,
            "total": 195.8,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T20:03:06.000000Z",
            "updated_at": "2021-03-28T20:03:06.000000Z",
            "client": {
                "id": 13,
                "name": "Eduarda",
                "email": "eduarda@hotmail.com",
                "phone": "828888888",
                "created_at": "2021-03-28T02:01:01.000000Z",
                "updated_at": "2021-03-28T02:01:01.000000Z"
            },
            "waiter": {
                "id": 2,
                "name": "Cícero Fahning",
                "email": "cicerofahning@hotmail.com",
                "phone": "82999384018",
                "role": "garçom",
                "created_at": "2021-03-27T13:57:37.000000Z",
                "updated_at": "2021-03-27T13:57:37.000000Z"
            }
        }
    ]
}
```
<div id="execution-results-GETapi-orders-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-all"></code></pre>
</div>
<div id="execution-error-GETapi-orders-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-all"></code></pre>
</div>
<form id="form-GETapi-orders-all" data-method="GET" data-path="api/orders/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders-all" onclick="tryItOut('GETapi-orders-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders-all" onclick="cancelTryOut('GETapi-orders-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/all</code></b>
</p>
</form>


## Cadastra nova comanda.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/orders/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-new" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-new"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-new"></code></pre>
</div>
<form id="form-POSTapi-orders-new" data-method="POST" data-path="api/orders/new" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-orders-new" onclick="tryItOut('POSTapi-orders-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-orders-new" onclick="cancelTryOut('POSTapi-orders-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-orders-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/new</code></b>
</p>
</form>


## Registra pedido realizado pelo client




> Example request:

```bash
curl -X POST \
    "http://localhost/api/orders/makeOrder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/makeOrder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-orders-makeOrder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-orders-makeOrder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders-makeOrder"></code></pre>
</div>
<div id="execution-error-POSTapi-orders-makeOrder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders-makeOrder"></code></pre>
</div>
<form id="form-POSTapi-orders-makeOrder" data-method="POST" data-path="api/orders/makeOrder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders-makeOrder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-orders-makeOrder" onclick="tryItOut('POSTapi-orders-makeOrder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-orders-makeOrder" onclick="cancelTryOut('POSTapi-orders-makeOrder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-orders-makeOrder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/orders/makeOrder</code></b>
</p>
</form>


## Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/sellsResume" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/sellsResume"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (201):

```json
{
    "today": {
        "total_qnt": 4,
        "total_price": 427.2
    },
    "month": {
        "total_qnt": 4,
        "total_price": 427.2
    },
    "vendas": [
        {
            "id": 45,
            "total": 195.8,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T20:03:06.000000Z",
            "updated_at": "2021-03-28T20:03:06.000000Z"
        },
        {
            "id": 44,
            "total": 26.7,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T03:30:57.000000Z",
            "updated_at": "2021-03-28T03:30:59.000000Z"
        },
        {
            "id": 43,
            "total": 0,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T03:29:53.000000Z",
            "updated_at": "2021-03-28T03:29:53.000000Z"
        },
        {
            "id": 42,
            "total": 204.7,
            "discount": 0,
            "commission": 0,
            "commands": "0",
            "client_id": 13,
            "waiter_id": 2,
            "created_at": "2021-03-28T02:06:17.000000Z",
            "updated_at": "2021-03-28T02:06:17.000000Z"
        }
    ],
    "total_itens": 278,
    "bestSellers": {
        "Qnt": 16,
        "product_id": 9,
        "name": "Cerveja5"
    },
    "lessSold": {
        "Qnt": 1,
        "product_id": 3,
        "name": "Cerveja"
    }
}
```
<div id="execution-results-GETapi-orders-sellsResume" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders-sellsResume"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-sellsResume"></code></pre>
</div>
<div id="execution-error-GETapi-orders-sellsResume" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-sellsResume"></code></pre>
</div>
<form id="form-GETapi-orders-sellsResume" data-method="GET" data-path="api/orders/sellsResume" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-sellsResume', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders-sellsResume" onclick="tryItOut('GETapi-orders-sellsResume');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders-sellsResume" onclick="cancelTryOut('GETapi-orders-sellsResume');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders-sellsResume" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/sellsResume</code></b>
</p>
</form>


## Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/waiterMonth/a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/waiterMonth/a"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'waiter' of non-object",
    "exception": "ErrorException",
    "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Resources\\DelegatesToResource.php",
    "line": 136,
    "trace": [
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Resources\\DelegatesToResource.php",
            "line": 136,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\app\\Http\\Controllers\\Api\\OrderController.php",
            "line": 129,
            "function": "__get",
            "class": "Illuminate\\Http\\Resources\\Json\\JsonResource",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "waiterMonth",
            "class": "App\\Http\\Controllers\\Api\\OrderController",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-orders-waiterMonth--waiter_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders-waiterMonth--waiter_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-waiterMonth--waiter_id-"></code></pre>
</div>
<div id="execution-error-GETapi-orders-waiterMonth--waiter_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-waiterMonth--waiter_id-"></code></pre>
</div>
<form id="form-GETapi-orders-waiterMonth--waiter_id-" data-method="GET" data-path="api/orders/waiterMonth/{waiter_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-waiterMonth--waiter_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders-waiterMonth--waiter_id-" onclick="tryItOut('GETapi-orders-waiterMonth--waiter_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders-waiterMonth--waiter_id-" onclick="cancelTryOut('GETapi-orders-waiterMonth--waiter_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders-waiterMonth--waiter_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/waiterMonth/{waiter_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>waiter_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="waiter_id" data-endpoint="GETapi-orders-waiterMonth--waiter_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Retorna uma comanda por id passado




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/orders/show/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/show/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] sapiente",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 381,
    "trace": [
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 330,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-orders-show--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-orders-show--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-show--order-"></code></pre>
</div>
<div id="execution-error-GETapi-orders-show--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-show--order-"></code></pre>
</div>
<form id="form-GETapi-orders-show--order-" data-method="GET" data-path="api/orders/show/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-show--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-orders-show--order-" onclick="tryItOut('GETapi-orders-show--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-orders-show--order-" onclick="cancelTryOut('GETapi-orders-show--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-orders-show--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/orders/show/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETapi-orders-show--order-" data-component="url" required  hidden>
<br>
</p>
</form>


## Atualiza comanda por id passado.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/orders/update/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/update/architecto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-orders-update--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-orders-update--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-orders-update--order-"></code></pre>
</div>
<div id="execution-error-PUTapi-orders-update--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-orders-update--order-"></code></pre>
</div>
<form id="form-PUTapi-orders-update--order-" data-method="PUT" data-path="api/orders/update/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-orders-update--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-orders-update--order-" onclick="tryItOut('PUTapi-orders-update--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-orders-update--order-" onclick="cancelTryOut('PUTapi-orders-update--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-orders-update--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/orders/update/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="PUTapi-orders-update--order-" data-component="url" required  hidden>
<br>
</p>
</form>


## Delete comanda por id passado.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/orders/delete/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/orders/delete/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-orders-delete--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-orders-delete--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-orders-delete--order-"></code></pre>
</div>
<div id="execution-error-DELETEapi-orders-delete--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-orders-delete--order-"></code></pre>
</div>
<form id="form-DELETEapi-orders-delete--order-" data-method="DELETE" data-path="api/orders/delete/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-orders-delete--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-orders-delete--order-" onclick="tryItOut('DELETEapi-orders-delete--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-orders-delete--order-" onclick="cancelTryOut('DELETEapi-orders-delete--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-orders-delete--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/orders/delete/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="DELETEapi-orders-delete--order-" data-component="url" required  hidden>
<br>
</p>
</form>



