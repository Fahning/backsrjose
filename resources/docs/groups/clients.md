# Clients

APIs para gerenciar Clients

## Retorna todos os clientes cadastrados.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clients/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clients/all"
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
            "id": 12,
            "name": "asdsa",
            "email": "123213@asdasd",
            "phone": "123123123",
            "created_at": "2021-03-28T01:52:18.000000Z",
            "updated_at": "2021-03-28T01:52:18.000000Z"
        },
        {
            "id": 13,
            "name": "Eduarda",
            "email": "eduarda@hotmail.com",
            "phone": "828888888",
            "created_at": "2021-03-28T02:01:01.000000Z",
            "updated_at": "2021-03-28T02:01:01.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-clients-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-clients-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clients-all"></code></pre>
</div>
<div id="execution-error-GETapi-clients-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clients-all"></code></pre>
</div>
<form id="form-GETapi-clients-all" data-method="GET" data-path="api/clients/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-clients-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-clients-all" onclick="tryItOut('GETapi-clients-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-clients-all" onclick="cancelTryOut('GETapi-clients-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-clients-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/clients/all</code></b>
</p>
</form>


## Cadastra um novo cliente.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/clients/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clients/new"
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


<div id="execution-results-POSTapi-clients-new" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-clients-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clients-new"></code></pre>
</div>
<div id="execution-error-POSTapi-clients-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clients-new"></code></pre>
</div>
<form id="form-POSTapi-clients-new" data-method="POST" data-path="api/clients/new" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-clients-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-clients-new" onclick="tryItOut('POSTapi-clients-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-clients-new" onclick="cancelTryOut('POSTapi-clients-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-clients-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/clients/new</code></b>
</p>
</form>


## Retorna dados de um cliente específico por telefone.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clients/findPhone/ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clients/findPhone/ab"
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
    "data": {
        "Falha": "Cliente não cadastrado"
    }
}
```
<div id="execution-results-GETapi-clients-findPhone--phone-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-clients-findPhone--phone-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clients-findPhone--phone-"></code></pre>
</div>
<div id="execution-error-GETapi-clients-findPhone--phone-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clients-findPhone--phone-"></code></pre>
</div>
<form id="form-GETapi-clients-findPhone--phone-" data-method="GET" data-path="api/clients/findPhone/{phone}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-clients-findPhone--phone-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-clients-findPhone--phone-" onclick="tryItOut('GETapi-clients-findPhone--phone-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-clients-findPhone--phone-" onclick="cancelTryOut('GETapi-clients-findPhone--phone-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-clients-findPhone--phone-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/clients/findPhone/{phone}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="GETapi-clients-findPhone--phone-" data-component="url" required  hidden>
<br>
</p>
</form>


## Retorna dados de um cliente específico por id.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clients/show/hic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clients/show/hic"
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
    "message": "No query results for model [App\\Models\\Client] hic",
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
<div id="execution-results-GETapi-clients-show--client-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-clients-show--client-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clients-show--client-"></code></pre>
</div>
<div id="execution-error-GETapi-clients-show--client-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clients-show--client-"></code></pre>
</div>
<form id="form-GETapi-clients-show--client-" data-method="GET" data-path="api/clients/show/{client}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-clients-show--client-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-clients-show--client-" onclick="tryItOut('GETapi-clients-show--client-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-clients-show--client-" onclick="cancelTryOut('GETapi-clients-show--client-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-clients-show--client-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/clients/show/{client}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client" data-endpoint="GETapi-clients-show--client-" data-component="url" required  hidden>
<br>
</p>
</form>


## Atualiza um Cliente informado por ID




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/clients/update/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clients/update/quidem"
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


<div id="execution-results-PUTapi-clients-update--client-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-clients-update--client-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-clients-update--client-"></code></pre>
</div>
<div id="execution-error-PUTapi-clients-update--client-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-clients-update--client-"></code></pre>
</div>
<form id="form-PUTapi-clients-update--client-" data-method="PUT" data-path="api/clients/update/{client}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-clients-update--client-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-clients-update--client-" onclick="tryItOut('PUTapi-clients-update--client-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-clients-update--client-" onclick="cancelTryOut('PUTapi-clients-update--client-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-clients-update--client-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/clients/update/{client}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client" data-endpoint="PUTapi-clients-update--client-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/clients/delete/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clients/delete/quidem"
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


<div id="execution-results-DELETEapi-clients-delete--client-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-clients-delete--client-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-clients-delete--client-"></code></pre>
</div>
<div id="execution-error-DELETEapi-clients-delete--client-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-clients-delete--client-"></code></pre>
</div>
<form id="form-DELETEapi-clients-delete--client-" data-method="DELETE" data-path="api/clients/delete/{client}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-clients-delete--client-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-clients-delete--client-" onclick="tryItOut('DELETEapi-clients-delete--client-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-clients-delete--client-" onclick="cancelTryOut('DELETEapi-clients-delete--client-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-clients-delete--client-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/clients/delete/{client}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client" data-endpoint="DELETEapi-clients-delete--client-" data-component="url" required  hidden>
<br>
</p>
</form>



