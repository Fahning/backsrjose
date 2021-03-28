<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: March 28 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.5.3.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Endpoints</h1>
<h2>Retorna todos os clientes cadastrados.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/clients/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Cadastra um novo cliente.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/clients/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Retorna dados de um cliente específico por telefone.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/clients/findPhone/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/findPhone/in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "Falha": "Cliente não cadastrado"
    }
}</code></pre>
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
<h2>Retorna dados de um cliente específico por id.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/clients/show/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/show/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Client] ex",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 381,
    "trace": [
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 330,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
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
<h2>Atualiza um Cliente informado por ID</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/clients/update/expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/update/expedita"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/clients/delete/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/delete/consequatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Retorna todos os produtos cadastrados.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/products/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Cadastra um novo produto.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/products/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Mostra um produto por id.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/products/show/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/show/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Product] voluptatem",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 381,
    "trace": [
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 330,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
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
<h2>Atualiza produto por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/products/update/saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/update/saepe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Deleta produto por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/products/delete/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/delete/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Retornar todos os funcionários.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/waiters/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/waiters/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2,
            "name": "Cícero Fahning",
            "email": "cicerofahning@hotmail.com",
            "phone": "82999384018",
            "role": "garçom",
            "created_at": "2021-03-27T13:57:37.000000Z",
            "updated_at": "2021-03-27T13:57:37.000000Z"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-waiters-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-waiters-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-waiters-all"></code></pre>
</div>
<div id="execution-error-GETapi-waiters-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-waiters-all"></code></pre>
</div>
<form id="form-GETapi-waiters-all" data-method="GET" data-path="api/waiters/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-waiters-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-waiters-all" onclick="tryItOut('GETapi-waiters-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-waiters-all" onclick="cancelTryOut('GETapi-waiters-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-waiters-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/waiters/all</code></b>
</p>
</form>
<h2>Salva novo funcionário.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/waiters/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/waiters/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-waiters-new" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-waiters-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-waiters-new"></code></pre>
</div>
<div id="execution-error-POSTapi-waiters-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-waiters-new"></code></pre>
</div>
<form id="form-POSTapi-waiters-new" data-method="POST" data-path="api/waiters/new" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-waiters-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-waiters-new" onclick="tryItOut('POSTapi-waiters-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-waiters-new" onclick="cancelTryOut('POSTapi-waiters-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-waiters-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/waiters/new</code></b>
</p>
</form>
<h2>Mostra um funcionário por id.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/waiters/show/adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/waiters/show/adipisci"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Waiter] adipisci",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 381,
    "trace": [
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 330,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-waiters-show--waiter-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-waiters-show--waiter-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-waiters-show--waiter-"></code></pre>
</div>
<div id="execution-error-GETapi-waiters-show--waiter-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-waiters-show--waiter-"></code></pre>
</div>
<form id="form-GETapi-waiters-show--waiter-" data-method="GET" data-path="api/waiters/show/{waiter}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-waiters-show--waiter-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-waiters-show--waiter-" onclick="tryItOut('GETapi-waiters-show--waiter-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-waiters-show--waiter-" onclick="cancelTryOut('GETapi-waiters-show--waiter-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-waiters-show--waiter-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/waiters/show/{waiter}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>waiter</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="waiter" data-endpoint="GETapi-waiters-show--waiter-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Atualiza funcionário por id passado</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/waiters/update/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/waiters/update/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-waiters-update--waiter-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-waiters-update--waiter-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-waiters-update--waiter-"></code></pre>
</div>
<div id="execution-error-PUTapi-waiters-update--waiter-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-waiters-update--waiter-"></code></pre>
</div>
<form id="form-PUTapi-waiters-update--waiter-" data-method="PUT" data-path="api/waiters/update/{waiter}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-waiters-update--waiter-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-waiters-update--waiter-" onclick="tryItOut('PUTapi-waiters-update--waiter-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-waiters-update--waiter-" onclick="cancelTryOut('PUTapi-waiters-update--waiter-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-waiters-update--waiter-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/waiters/update/{waiter}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>waiter</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="waiter" data-endpoint="PUTapi-waiters-update--waiter-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Deleta funcionário por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/waiters/delete/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/waiters/delete/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-waiters-delete--waiter-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-waiters-delete--waiter-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-waiters-delete--waiter-"></code></pre>
</div>
<div id="execution-error-DELETEapi-waiters-delete--waiter-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-waiters-delete--waiter-"></code></pre>
</div>
<form id="form-DELETEapi-waiters-delete--waiter-" data-method="DELETE" data-path="api/waiters/delete/{waiter}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-waiters-delete--waiter-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-waiters-delete--waiter-" onclick="tryItOut('DELETEapi-waiters-delete--waiter-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-waiters-delete--waiter-" onclick="cancelTryOut('DELETEapi-waiters-delete--waiter-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-waiters-delete--waiter-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/waiters/delete/{waiter}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>waiter</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="waiter" data-endpoint="DELETEapi-waiters-delete--waiter-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Retorna todas as comandas registradas.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/orders/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Cadastra nova comanda.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/orders/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Registra pedido realizado pelo client</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/orders/makeOrder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/makeOrder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/orders/sellsResume" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/sellsResume"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retorna resumo de vendas do dia, mensal, total de itens vendidos, item mais vendido e item menos vendido.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/orders/waiterMonth/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/waiterMonth/cupiditate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\app\\Http\\Controllers\\Api\\OrderController.php",
            "line": 124,
            "function": "__get",
            "class": "Illuminate\\Http\\Resources\\Json\\JsonResource",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "waiterMonth",
            "class": "App\\Http\\Controllers\\Api\\OrderController",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
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
<h2>Retorna uma comanda por id passado</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/orders/show/nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/show/nesciunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Order] nesciunt",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 381,
    "trace": [
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 330,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\barSrJose\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
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
<h2>Atualiza comanda por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/orders/update/pariatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/update/pariatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Delete comanda por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/orders/delete/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/delete/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
<h2>Retorna todas as comandas e produtos.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/ordersproduct/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ordersproduct/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2,
            "quantity": 2,
            "product_id": 3,
            "order_id": 2,
            "created_at": "2021-03-27T14:32:11.000000Z",
            "updated_at": "2021-03-27T14:32:11.000000Z",
            "price": null,
            "product": {
                "id": 3,
                "name": "Cerveja",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 3,
            "quantity": 2,
            "product_id": 6,
            "order_id": 13,
            "created_at": "2021-03-27T21:00:36.000000Z",
            "updated_at": "2021-03-27T21:00:36.000000Z",
            "price": null,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 4,
            "quantity": 3,
            "product_id": 9,
            "order_id": 13,
            "created_at": "2021-03-27T21:00:36.000000Z",
            "updated_at": "2021-03-27T21:00:36.000000Z",
            "price": null,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 5,
            "quantity": 5,
            "product_id": 12,
            "order_id": 13,
            "created_at": "2021-03-27T21:00:36.000000Z",
            "updated_at": "2021-03-27T21:00:36.000000Z",
            "price": null,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 15,
            "quantity": 2,
            "product_id": 6,
            "order_id": 17,
            "created_at": "2021-03-27T21:09:09.000000Z",
            "updated_at": "2021-03-27T21:09:09.000000Z",
            "price": 8.9,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 16,
            "quantity": 3,
            "product_id": 9,
            "order_id": 17,
            "created_at": "2021-03-27T21:09:09.000000Z",
            "updated_at": "2021-03-27T21:09:09.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 17,
            "quantity": 5,
            "product_id": 12,
            "order_id": 17,
            "created_at": "2021-03-27T21:09:10.000000Z",
            "updated_at": "2021-03-27T21:09:10.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 21,
            "quantity": 2,
            "product_id": 6,
            "order_id": 19,
            "created_at": "2021-03-27T21:12:30.000000Z",
            "updated_at": "2021-03-27T21:12:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 22,
            "quantity": 3,
            "product_id": 9,
            "order_id": 19,
            "created_at": "2021-03-27T21:12:30.000000Z",
            "updated_at": "2021-03-27T21:12:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 23,
            "quantity": 5,
            "product_id": 12,
            "order_id": 19,
            "created_at": "2021-03-27T21:12:30.000000Z",
            "updated_at": "2021-03-27T21:12:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 24,
            "quantity": 2,
            "product_id": 6,
            "order_id": 20,
            "created_at": "2021-03-27T21:13:55.000000Z",
            "updated_at": "2021-03-27T21:13:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 6,
                "name": "Cerveja2",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 25,
            "quantity": 3,
            "product_id": 9,
            "order_id": 20,
            "created_at": "2021-03-27T21:13:55.000000Z",
            "updated_at": "2021-03-27T21:13:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 26,
            "quantity": 5,
            "product_id": 12,
            "order_id": 20,
            "created_at": "2021-03-27T21:13:55.000000Z",
            "updated_at": "2021-03-27T21:13:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 27,
            "quantity": 3,
            "product_id": 10,
            "order_id": 21,
            "created_at": "2021-03-27T21:15:12.000000Z",
            "updated_at": "2021-03-27T21:15:12.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 28,
            "quantity": 2,
            "product_id": 9,
            "order_id": 21,
            "created_at": "2021-03-27T21:15:12.000000Z",
            "updated_at": "2021-03-27T21:15:12.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 29,
            "quantity": 3,
            "product_id": 10,
            "order_id": 22,
            "created_at": "2021-03-27T21:15:22.000000Z",
            "updated_at": "2021-03-27T21:15:22.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 30,
            "quantity": 2,
            "product_id": 9,
            "order_id": 22,
            "created_at": "2021-03-27T21:15:22.000000Z",
            "updated_at": "2021-03-27T21:15:22.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 31,
            "quantity": 3,
            "product_id": 10,
            "order_id": 23,
            "created_at": "2021-03-27T21:15:30.000000Z",
            "updated_at": "2021-03-27T21:15:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 32,
            "quantity": 2,
            "product_id": 9,
            "order_id": 23,
            "created_at": "2021-03-27T21:15:30.000000Z",
            "updated_at": "2021-03-27T21:15:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 33,
            "quantity": 5,
            "product_id": 8,
            "order_id": 23,
            "created_at": "2021-03-27T21:15:30.000000Z",
            "updated_at": "2021-03-27T21:15:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 34,
            "quantity": 1,
            "product_id": 10,
            "order_id": 24,
            "created_at": "2021-03-27T21:15:55.000000Z",
            "updated_at": "2021-03-27T21:15:55.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 35,
            "quantity": 1,
            "product_id": 10,
            "order_id": 25,
            "created_at": "2021-03-27T21:16:03.000000Z",
            "updated_at": "2021-03-27T21:16:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 36,
            "quantity": 9,
            "product_id": 9,
            "order_id": 25,
            "created_at": "2021-03-27T21:16:03.000000Z",
            "updated_at": "2021-03-27T21:16:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 37,
            "quantity": 9,
            "product_id": 9,
            "order_id": 26,
            "created_at": "2021-03-27T21:16:47.000000Z",
            "updated_at": "2021-03-27T21:16:47.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 38,
            "quantity": 1,
            "product_id": 10,
            "order_id": 26,
            "created_at": "2021-03-27T21:16:47.000000Z",
            "updated_at": "2021-03-27T21:16:47.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 39,
            "quantity": 9,
            "product_id": 9,
            "order_id": 27,
            "created_at": "2021-03-27T21:20:24.000000Z",
            "updated_at": "2021-03-27T21:20:24.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 40,
            "quantity": 1,
            "product_id": 10,
            "order_id": 27,
            "created_at": "2021-03-27T21:20:24.000000Z",
            "updated_at": "2021-03-27T21:20:24.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 41,
            "quantity": 2,
            "product_id": 10,
            "order_id": 28,
            "created_at": "2021-03-27T21:35:53.000000Z",
            "updated_at": "2021-03-27T21:35:53.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 42,
            "quantity": 2,
            "product_id": 9,
            "order_id": 29,
            "created_at": "2021-03-27T22:27:20.000000Z",
            "updated_at": "2021-03-27T22:27:20.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 43,
            "quantity": 2,
            "product_id": 12,
            "order_id": 30,
            "created_at": "2021-03-27T22:28:23.000000Z",
            "updated_at": "2021-03-27T22:28:23.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 44,
            "quantity": 2,
            "product_id": 10,
            "order_id": 31,
            "created_at": "2021-03-27T22:59:14.000000Z",
            "updated_at": "2021-03-27T22:59:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 45,
            "quantity": 3,
            "product_id": 12,
            "order_id": 31,
            "created_at": "2021-03-27T22:59:14.000000Z",
            "updated_at": "2021-03-27T22:59:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 46,
            "quantity": 2,
            "product_id": 10,
            "order_id": 32,
            "created_at": "2021-03-27T23:01:14.000000Z",
            "updated_at": "2021-03-27T23:01:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 47,
            "quantity": 3,
            "product_id": 12,
            "order_id": 32,
            "created_at": "2021-03-27T23:01:14.000000Z",
            "updated_at": "2021-03-27T23:01:14.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 48,
            "quantity": 2,
            "product_id": 10,
            "order_id": 33,
            "created_at": "2021-03-27T23:01:30.000000Z",
            "updated_at": "2021-03-27T23:01:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 49,
            "quantity": 3,
            "product_id": 12,
            "order_id": 33,
            "created_at": "2021-03-27T23:01:30.000000Z",
            "updated_at": "2021-03-27T23:01:30.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 50,
            "quantity": 2,
            "product_id": 10,
            "order_id": 34,
            "created_at": "2021-03-27T23:02:08.000000Z",
            "updated_at": "2021-03-27T23:02:08.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 51,
            "quantity": 3,
            "product_id": 12,
            "order_id": 34,
            "created_at": "2021-03-27T23:02:08.000000Z",
            "updated_at": "2021-03-27T23:02:08.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 52,
            "quantity": 2,
            "product_id": 10,
            "order_id": 35,
            "created_at": "2021-03-27T23:02:52.000000Z",
            "updated_at": "2021-03-27T23:02:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 53,
            "quantity": 3,
            "product_id": 12,
            "order_id": 35,
            "created_at": "2021-03-27T23:02:52.000000Z",
            "updated_at": "2021-03-27T23:02:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 54,
            "quantity": 2,
            "product_id": 10,
            "order_id": 36,
            "created_at": "2021-03-27T23:03:52.000000Z",
            "updated_at": "2021-03-27T23:03:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 10,
                "name": "Cerveja6",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 55,
            "quantity": 3,
            "product_id": 12,
            "order_id": 36,
            "created_at": "2021-03-27T23:03:52.000000Z",
            "updated_at": "2021-03-27T23:03:52.000000Z",
            "price": 8.9,
            "product": {
                "id": 12,
                "name": "Cerveja8",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 56,
            "quantity": 23,
            "product_id": 8,
            "order_id": 37,
            "created_at": "2021-03-27T23:36:06.000000Z",
            "updated_at": "2021-03-27T23:36:06.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 57,
            "quantity": 23,
            "product_id": 9,
            "order_id": 37,
            "created_at": "2021-03-27T23:36:06.000000Z",
            "updated_at": "2021-03-27T23:36:06.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 58,
            "quantity": 23,
            "product_id": 8,
            "order_id": 38,
            "created_at": "2021-03-27T23:37:01.000000Z",
            "updated_at": "2021-03-27T23:37:01.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 59,
            "quantity": 23,
            "product_id": 9,
            "order_id": 38,
            "created_at": "2021-03-27T23:37:01.000000Z",
            "updated_at": "2021-03-27T23:37:01.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 60,
            "quantity": 2,
            "product_id": 4,
            "order_id": 39,
            "created_at": "2021-03-27T23:44:03.000000Z",
            "updated_at": "2021-03-27T23:44:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 4,
                "name": "Cerveja",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 61,
            "quantity": 3,
            "product_id": 9,
            "order_id": 39,
            "created_at": "2021-03-27T23:44:03.000000Z",
            "updated_at": "2021-03-27T23:44:03.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 62,
            "quantity": 2,
            "product_id": 5,
            "order_id": 40,
            "created_at": "2021-03-27T23:48:01.000000Z",
            "updated_at": "2021-03-27T23:48:01.000000Z",
            "price": 8.9,
            "product": {
                "id": 5,
                "name": "Cerveja0",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 63,
            "quantity": 2,
            "product_id": 9,
            "order_id": 41,
            "created_at": "2021-03-27T23:50:47.000000Z",
            "updated_at": "2021-03-27T23:50:47.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": null
        },
        {
            "id": 64,
            "quantity": 23,
            "product_id": 4,
            "order_id": 42,
            "created_at": "2021-03-28T02:06:17.000000Z",
            "updated_at": "2021-03-28T02:06:17.000000Z",
            "price": 8.9,
            "product": {
                "id": 4,
                "name": "Cerveja",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
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
        },
        {
            "id": 65,
            "quantity": 2,
            "product_id": 9,
            "order_id": 44,
            "created_at": "2021-03-28T03:30:59.000000Z",
            "updated_at": "2021-03-28T03:30:59.000000Z",
            "price": 8.9,
            "product": {
                "id": 9,
                "name": "Cerveja5",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 44,
                "total": 26.7,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T03:30:57.000000Z",
                "updated_at": "2021-03-28T03:30:59.000000Z"
            }
        },
        {
            "id": 66,
            "quantity": 1,
            "product_id": 8,
            "order_id": 44,
            "created_at": "2021-03-28T03:30:59.000000Z",
            "updated_at": "2021-03-28T03:30:59.000000Z",
            "price": 8.9,
            "product": {
                "id": 8,
                "name": "Cerveja4",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 44,
                "total": 26.7,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T03:30:57.000000Z",
                "updated_at": "2021-03-28T03:30:59.000000Z"
            }
        },
        {
            "id": 67,
            "quantity": 22,
            "product_id": 5,
            "order_id": 45,
            "created_at": "2021-03-28T20:03:06.000000Z",
            "updated_at": "2021-03-28T20:03:06.000000Z",
            "price": 8.9,
            "product": {
                "id": 5,
                "name": "Cerveja0",
                "price": 8.9,
                "created_at": "2021-03-27T14:31:47.000000Z",
                "updated_at": "2021-03-27T14:31:47.000000Z"
            },
            "order": {
                "id": 45,
                "total": 195.8,
                "discount": 0,
                "commission": 0,
                "commands": "0",
                "client_id": 13,
                "waiter_id": 2,
                "created_at": "2021-03-28T20:03:06.000000Z",
                "updated_at": "2021-03-28T20:03:06.000000Z"
            }
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-ordersproduct-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ordersproduct-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ordersproduct-all"></code></pre>
</div>
<div id="execution-error-GETapi-ordersproduct-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ordersproduct-all"></code></pre>
</div>
<form id="form-GETapi-ordersproduct-all" data-method="GET" data-path="api/ordersproduct/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ordersproduct-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ordersproduct-all" onclick="tryItOut('GETapi-ordersproduct-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ordersproduct-all" onclick="cancelTryOut('GETapi-ordersproduct-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ordersproduct-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ordersproduct/all</code></b>
</p>
</form>
<h2>Cadastra nova comanda e produto.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/ordersproduct/new" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ordersproduct/new"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-ordersproduct-new" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-ordersproduct-new"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-ordersproduct-new"></code></pre>
</div>
<div id="execution-error-POSTapi-ordersproduct-new" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-ordersproduct-new"></code></pre>
</div>
<form id="form-POSTapi-ordersproduct-new" data-method="POST" data-path="api/ordersproduct/new" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-ordersproduct-new', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-ordersproduct-new" onclick="tryItOut('POSTapi-ordersproduct-new');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-ordersproduct-new" onclick="cancelTryOut('POSTapi-ordersproduct-new');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-ordersproduct-new" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/ordersproduct/new</code></b>
</p>
</form>
<h2>Retorna comanda produto por id passado</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/ordersproduct/show/laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ordersproduct/show/laudantium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "product": null,
        "order": null
    }
}</code></pre>
<div id="execution-results-GETapi-ordersproduct-show--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ordersproduct-show--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ordersproduct-show--order-"></code></pre>
</div>
<div id="execution-error-GETapi-ordersproduct-show--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ordersproduct-show--order-"></code></pre>
</div>
<form id="form-GETapi-ordersproduct-show--order-" data-method="GET" data-path="api/ordersproduct/show/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ordersproduct-show--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ordersproduct-show--order-" onclick="tryItOut('GETapi-ordersproduct-show--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ordersproduct-show--order-" onclick="cancelTryOut('GETapi-ordersproduct-show--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ordersproduct-show--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ordersproduct/show/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="GETapi-ordersproduct-show--order-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Atualiza comanda produto por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/ordersproduct/update/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ordersproduct/update/placeat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTapi-ordersproduct-update--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-ordersproduct-update--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-ordersproduct-update--order-"></code></pre>
</div>
<div id="execution-error-PUTapi-ordersproduct-update--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-ordersproduct-update--order-"></code></pre>
</div>
<form id="form-PUTapi-ordersproduct-update--order-" data-method="PUT" data-path="api/ordersproduct/update/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-ordersproduct-update--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-ordersproduct-update--order-" onclick="tryItOut('PUTapi-ordersproduct-update--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-ordersproduct-update--order-" onclick="cancelTryOut('PUTapi-ordersproduct-update--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-ordersproduct-update--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/ordersproduct/update/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="PUTapi-ordersproduct-update--order-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Deleta comanda produto por id passado.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/ordersproduct/delete/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/ordersproduct/delete/id"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-ordersproduct-delete--order-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-ordersproduct-delete--order-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-ordersproduct-delete--order-"></code></pre>
</div>
<div id="execution-error-DELETEapi-ordersproduct-delete--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-ordersproduct-delete--order-"></code></pre>
</div>
<form id="form-DELETEapi-ordersproduct-delete--order-" data-method="DELETE" data-path="api/ordersproduct/delete/{order}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-ordersproduct-delete--order-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-ordersproduct-delete--order-" onclick="tryItOut('DELETEapi-ordersproduct-delete--order-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-ordersproduct-delete--order-" onclick="cancelTryOut('DELETEapi-ordersproduct-delete--order-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-ordersproduct-delete--order-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/ordersproduct/delete/{order}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>order</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order" data-endpoint="DELETEapi-ordersproduct-delete--order-" data-component="url" required  hidden>
<br>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>