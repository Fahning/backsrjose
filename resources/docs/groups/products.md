# Products

APIs para gerenciar Products

## Retorna todos os produtos cadastrados.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/all"
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
            "id": 3,
            "name": "Cerveja",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 4,
            "name": "Cerveja",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 5,
            "name": "Cerveja0",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 6,
            "name": "Cerveja2",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 7,
            "name": "Cerveja3",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 8,
            "name": "Cerveja4",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 9,
            "name": "Cerveja5",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 10,
            "name": "Cerveja6",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 11,
            "name": "Cerveja7",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        },
        {
            "id": 12,
            "name": "Cerveja8",
            "price": 8.9,
            "created_at": "2021-03-27T14:31:47.000000Z",
            "updated_at": "2021-03-27T14:31:47.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-products-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-all"></code></pre>
</div>
<div id="execution-error-GETapi-products-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-all"></code></pre>
</div>
<form id="form-GETapi-products-all" data-method="GET" data-path="api/products/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products-all" onclick="tryItOut('GETapi-products-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products-all" onclick="cancelTryOut('GETapi-products-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/all</code></b>
</p>
</form>


## Cadastra um novo produto.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/products/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/new"
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


<div id="execution-results-POSTapi-products-new" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-products-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products-new"></code></pre>
</div>
<div id="execution-error-POSTapi-products-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products-new"></code></pre>
</div>
<form id="form-POSTapi-products-new" data-method="POST" data-path="api/products/new" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-products-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-products-new" onclick="tryItOut('POSTapi-products-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-products-new" onclick="cancelTryOut('POSTapi-products-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-products-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/products/new</code></b>
</p>
</form>


## Mostra um produto por id.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products/show/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/show/sapiente"
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
    "message": "No query results for model [App\\Models\\Product] sapiente",
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
<div id="execution-results-GETapi-products-show--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products-show--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-show--product-"></code></pre>
</div>
<div id="execution-error-GETapi-products-show--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-show--product-"></code></pre>
</div>
<form id="form-GETapi-products-show--product-" data-method="GET" data-path="api/products/show/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products-show--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products-show--product-" onclick="tryItOut('GETapi-products-show--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products-show--product-" onclick="cancelTryOut('GETapi-products-show--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products-show--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/show/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="GETapi-products-show--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Atualiza produto por id passado.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/products/update/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/update/ut"
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


<div id="execution-results-PUTapi-products-update--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-products-update--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products-update--product-"></code></pre>
</div>
<div id="execution-error-PUTapi-products-update--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products-update--product-"></code></pre>
</div>
<form id="form-PUTapi-products-update--product-" data-method="PUT" data-path="api/products/update/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-products-update--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-products-update--product-" onclick="tryItOut('PUTapi-products-update--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-products-update--product-" onclick="cancelTryOut('PUTapi-products-update--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-products-update--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/products/update/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="PUTapi-products-update--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Deleta produto por id passado.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/products/delete/nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products/delete/nesciunt"
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


<div id="execution-results-DELETEapi-products-delete--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-products-delete--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products-delete--product-"></code></pre>
</div>
<div id="execution-error-DELETEapi-products-delete--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products-delete--product-"></code></pre>
</div>
<form id="form-DELETEapi-products-delete--product-" data-method="DELETE" data-path="api/products/delete/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products-delete--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-products-delete--product-" onclick="tryItOut('DELETEapi-products-delete--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-products-delete--product-" onclick="cancelTryOut('DELETEapi-products-delete--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-products-delete--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/products/delete/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="DELETEapi-products-delete--product-" data-component="url" required  hidden>
<br>
</p>
</form>



