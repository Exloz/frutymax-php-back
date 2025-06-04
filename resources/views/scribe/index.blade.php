<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>FrutyMax-back API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-login">
                                <a href="#endpoints-POSTapi-auth-login">POST api/auth/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-register">
                                <a href="#endpoints-POSTapi-auth-register">POST api/auth/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-logout">
                                <a href="#endpoints-POSTapi-auth-logout">POST api/auth/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-auth-profile">
                                <a href="#endpoints-GETapi-auth-profile">GET api/auth/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-auth-profile">
                                <a href="#endpoints-PUTapi-auth-profile">PUT api/auth/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-auth-verify">
                                <a href="#endpoints-GETapi-auth-verify">GET api/auth/verify</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-change-password">
                                <a href="#endpoints-POSTapi-auth-change-password">POST api/auth/change-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-status">
                                <a href="#endpoints-GETapi-status">GET api/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products">
                                <a href="#endpoints-GETapi-products">Display a listing of the products with pagination and filters.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products--id-">
                                <a href="#endpoints-GETapi-products--id-">Display the specified product.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-products">
                                <a href="#endpoints-POSTapi-products">Store a newly created product in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-products--id-">
                                <a href="#endpoints-PUTapi-products--id-">Update the specified product in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-products--id-">
                                <a href="#endpoints-DELETEapi-products--id-">Remove the specified product from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-products--id--image">
                                <a href="#endpoints-POSTapi-products--id--image">Upload product image.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-categories">
                                <a href="#endpoints-GETapi-products-categories">Get all available product categories.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-products--id--stock">
                                <a href="#endpoints-PATCHapi-products--id--stock">Update product stock.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-low-stock">
                                <a href="#endpoints-GETapi-products-low-stock">Get products with low stock.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-suppliers">
                                <a href="#endpoints-GETapi-suppliers">Display a listing of the suppliers with pagination and search.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-suppliers--id-">
                                <a href="#endpoints-GETapi-suppliers--id-">Display the specified supplier.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-suppliers">
                                <a href="#endpoints-POSTapi-suppliers">Store a newly created supplier in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-suppliers--id-">
                                <a href="#endpoints-PUTapi-suppliers--id-">Update the specified supplier in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-suppliers--id-">
                                <a href="#endpoints-DELETEapi-suppliers--id-">Remove the specified supplier from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-suppliers--id--products">
                                <a href="#endpoints-GETapi-suppliers--id--products">Get products for a specific supplier.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-suppliers--id--toggle-status">
                                <a href="#endpoints-PATCHapi-suppliers--id--toggle-status">Toggle the supplier's status.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders">
                                <a href="#endpoints-GETapi-orders">Display a listing of the orders with pagination.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders--id-">
                                <a href="#endpoints-GETapi-orders--id-">Display the specified order.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-orders">
                                <a href="#endpoints-POSTapi-orders">Store a newly created order in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-orders--id--status">
                                <a href="#endpoints-PATCHapi-orders--id--status">Update the specified order status.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders-my-orders">
                                <a href="#endpoints-GETapi-orders-my-orders">Get the authenticated user's orders.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-orders--id--cancel">
                                <a href="#endpoints-PATCHapi-orders--id--cancel">Cancel the specified order.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders-stats">
                                <a href="#endpoints-GETapi-orders-stats">Get order statistics.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users">
                                <a href="#endpoints-GETapi-users">Display a listing of the users with pagination.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id-">
                                <a href="#endpoints-GETapi-users--id-">Display the specified user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-users--id-">
                                <a href="#endpoints-PUTapi-users--id-">Update the specified user in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-users--id-">
                                <a href="#endpoints-DELETEapi-users--id-">Remove the specified user from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-users--id--role">
                                <a href="#endpoints-PATCHapi-users--id--role">Change user role.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 3, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;head&gt;
    &lt;title&gt;Swagger UI: OAuth2 Redirect&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    &#039;use strict&#039;;
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1).replace(&#039;?&#039;, &#039;&amp;&#039;);
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split(&quot;&amp;&quot;);
        arr.forEach(function (v,i,_arr) { _arr[i] = &#039;&quot;&#039; + v.replace(&#039;=&#039;, &#039;&quot;:&quot;&#039;) + &#039;&quot;&#039;;});
        qp = qp ? JSON.parse(&#039;{&#039; + arr.join() + &#039;}&#039;,
                function (key, value) {
                    return key === &quot;&quot; ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;accessCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorizationCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorization_code&quot;
        ) &amp;&amp; !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;warning&quot;,
                    message: &quot;Authorization may be unsafe, passed state was changed in server. The passed state wasn&#039;t returned from auth server.&quot;
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = &quot;[&quot;+qp.error+&quot;]: &quot; +
                        (qp.error_description ? qp.error_description+ &quot;. &quot; : &quot;no accessCode received from the server. &quot;) +
                        (qp.error_uri ? &quot;More info: &quot;+qp.error_uri : &quot;&quot;);
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;error&quot;,
                    message: oauthErrorMsg || &quot;[Authorization failed]: no accessCode received from the server.&quot;
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    if (document.readyState !== &#039;loading&#039;) {
        run();
    } else {
        document.addEventListener(&#039;DOMContentLoaded&#039;, function () {
            run();
        });
    }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-auth-login">POST api/auth/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
</span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>validation.email. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-login"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-auth-register">POST api/auth/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\",
    \"phone\": \"aykcmyuwpwlvqwrs\",
    \"address\": \"i\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw",
    "phone": "aykcmyuwpwlvqwrs",
    "address": "i"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-register">
</span>
<span id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-register" data-method="POST"
      data-path="api/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-register"
                    onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-register"
                    onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-auth-register"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>validation.email validation.max. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-register"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>validation.min. Example: <code>-0pBNvYgxw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-auth-register"
               value="aykcmyuwpwlvqwrs"
               data-component="body">
    <br>
<p>validation.max. Example: <code>aykcmyuwpwlvqwrs</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-auth-register"
               value="i"
               data-component="body">
    <br>
<p>validation.max. Example: <code>i</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-auth-logout">POST api/auth/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
</span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-auth-profile">GET api/auth/profile</h2>

<p>
</p>



<span id="example-requests-GETapi-auth-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/auth/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-profile">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-profile" data-method="GET"
      data-path="api/auth/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-profile"
                    onclick="tryItOut('GETapi-auth-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-profile"
                    onclick="cancelTryOut('GETapi-auth-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-auth-profile">PUT api/auth/profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-auth-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/auth/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"phone\": \"ngzmiyvdljnikhwa\",
    \"address\": \"y\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "phone": "ngzmiyvdljnikhwa",
    "address": "y"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-auth-profile">
</span>
<span id="execution-results-PUTapi-auth-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-auth-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-auth-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-auth-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-auth-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-auth-profile" data-method="PUT"
      data-path="api/auth/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-auth-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-auth-profile"
                    onclick="tryItOut('PUTapi-auth-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-auth-profile"
                    onclick="cancelTryOut('PUTapi-auth-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-auth-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/auth/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-auth-profile"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-auth-profile"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-auth-profile"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>validation.max. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-auth-profile"
               value="y"
               data-component="body">
    <br>
<p>validation.max. Example: <code>y</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-auth-verify">GET api/auth/verify</h2>

<p>
</p>



<span id="example-requests-GETapi-auth-verify">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/auth/verify" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/verify"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-verify">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-verify" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-verify"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-verify"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-verify" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-verify">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-verify" data-method="GET"
      data-path="api/auth/verify"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-verify', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-verify"
                    onclick="tryItOut('GETapi-auth-verify');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-verify"
                    onclick="cancelTryOut('GETapi-auth-verify');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-verify"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/verify</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-verify"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-verify"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-auth-change-password">POST api/auth/change-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-change-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/change-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"architecto\",
    \"new_password\": \"ngzmiyvdljnikhwaykcmyuwpwl\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/change-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "architecto",
    "new_password": "ngzmiyvdljnikhwaykcmyuwpwl"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-change-password">
</span>
<span id="execution-results-POSTapi-auth-change-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-change-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-change-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-change-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-change-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-change-password" data-method="POST"
      data-path="api/auth/change-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-change-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-change-password"
                    onclick="tryItOut('POSTapi-auth-change-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-change-password"
                    onclick="cancelTryOut('POSTapi-auth-change-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-change-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/change-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="current_password"                data-endpoint="POSTapi-auth-change-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="new_password"                data-endpoint="POSTapi-auth-change-password"
               value="ngzmiyvdljnikhwaykcmyuwpwl"
               data-component="body">
    <br>
<p>validation.min. Example: <code>ngzmiyvdljnikhwaykcmyuwpwl</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-status">GET api/status</h2>

<p>
</p>



<span id="example-requests-GETapi-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-status">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;API funcionando correctamente 🚀&quot;,
    &quot;data&quot;: {
        &quot;timestamp&quot;: &quot;2025-06-03T05:17:37.716693Z&quot;,
        &quot;version&quot;: &quot;1.0.0&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-status" data-method="GET"
      data-path="api/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-status"
                    onclick="tryItOut('GETapi-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-status"
                    onclick="cancelTryOut('GETapi-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products">Display a listing of the products with pagination and filters.</h2>

<p>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;repellendus&quot;,
            &quot;description&quot;: &quot;Nostrum vero voluptatem quis nam.&quot;,
            &quot;price&quot;: &quot;43.19&quot;,
            &quot;unit&quot;: &quot;kg&quot;,
            &quot;category&quot;: &quot;Tub&eacute;rculos&quot;,
            &quot;stock&quot;: 368,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffdd?text=et&quot;,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:278,\&quot;protein\&quot;:1,\&quot;carbs\&quot;:56.6,\&quot;fat\&quot;:15.6}&quot;,
            &quot;origin&quot;: &quot;San Marino&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;eos&quot;,
            &quot;description&quot;: &quot;Omnis hic nesciunt illo blanditiis saepe magni.&quot;,
            &quot;price&quot;: &quot;42.12&quot;,
            &quot;unit&quot;: &quot;kg&quot;,
            &quot;category&quot;: &quot;Verduras&quot;,
            &quot;stock&quot;: 0,
            &quot;status&quot;: &quot;out_of_stock&quot;,
            &quot;image&quot;: null,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:422,\&quot;protein\&quot;:11.7,\&quot;carbs\&quot;:10.4,\&quot;fat\&quot;:2.4}&quot;,
            &quot;origin&quot;: &quot;Bermuda&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 3,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;ratione&quot;,
            &quot;description&quot;: &quot;Quidem iusto sunt ut praesentium.&quot;,
            &quot;price&quot;: &quot;89.16&quot;,
            &quot;unit&quot;: &quot;g&quot;,
            &quot;category&quot;: &quot;Otros&quot;,
            &quot;stock&quot;: 299,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: null,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:365,\&quot;protein\&quot;:22.2,\&quot;carbs\&quot;:85,\&quot;fat\&quot;:11.2}&quot;,
            &quot;origin&quot;: &quot;Macedonia&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 4,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;itaque&quot;,
            &quot;description&quot;: &quot;Amet iste quia laboriosam magnam.&quot;,
            &quot;price&quot;: &quot;52.85&quot;,
            &quot;unit&quot;: &quot;unidad&quot;,
            &quot;category&quot;: &quot;Otros&quot;,
            &quot;stock&quot;: 56,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: null,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:41,\&quot;protein\&quot;:2.3,\&quot;carbs\&quot;:29.2,\&quot;fat\&quot;:15.7}&quot;,
            &quot;origin&quot;: &quot;Mongolia&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 5,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;ipsa&quot;,
            &quot;description&quot;: &quot;Iure soluta dolorem incidunt sit occaecati.&quot;,
            &quot;price&quot;: &quot;30.43&quot;,
            &quot;unit&quot;: &quot;g&quot;,
            &quot;category&quot;: &quot;Frutas&quot;,
            &quot;stock&quot;: 852,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: null,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:20,\&quot;protein\&quot;:9.3,\&quot;carbs\&quot;:3.8,\&quot;fat\&quot;:14.2}&quot;,
            &quot;origin&quot;: &quot;Switzerland&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 6,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;quam&quot;,
            &quot;description&quot;: &quot;Voluptatum eos quaerat nihil magnam.&quot;,
            &quot;price&quot;: &quot;81.59&quot;,
            &quot;unit&quot;: &quot;lb&quot;,
            &quot;category&quot;: &quot;Frutas&quot;,
            &quot;stock&quot;: 804,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: null,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:443,\&quot;protein\&quot;:9.4,\&quot;carbs\&quot;:81.1,\&quot;fat\&quot;:10.3}&quot;,
            &quot;origin&quot;: &quot;Myanmar&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 7,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;ipsam&quot;,
            &quot;description&quot;: &quot;Mollitia in id laudantium suscipit magnam asperiores qui.&quot;,
            &quot;price&quot;: &quot;11.85&quot;,
            &quot;unit&quot;: &quot;kg&quot;,
            &quot;category&quot;: &quot;Frutas&quot;,
            &quot;stock&quot;: 861,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0077dd?text=sint&quot;,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:276,\&quot;protein\&quot;:21.3,\&quot;carbs\&quot;:11.9,\&quot;fat\&quot;:10.1}&quot;,
            &quot;origin&quot;: &quot;Iran&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 8,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;enim&quot;,
            &quot;description&quot;: &quot;Et vel maiores id assumenda molestiae placeat.&quot;,
            &quot;price&quot;: &quot;93.17&quot;,
            &quot;unit&quot;: &quot;unidad&quot;,
            &quot;category&quot;: &quot;Hortalizas&quot;,
            &quot;stock&quot;: 783,
            &quot;status&quot;: &quot;active&quot;,
            &quot;image&quot;: null,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:407,\&quot;protein\&quot;:12.7,\&quot;carbs\&quot;:53,\&quot;fat\&quot;:3.9}&quot;,
            &quot;origin&quot;: &quot;Namibia&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;sequi&quot;,
            &quot;description&quot;: &quot;Praesentium sed est et ratione.&quot;,
            &quot;price&quot;: &quot;38.54&quot;,
            &quot;unit&quot;: &quot;kg&quot;,
            &quot;category&quot;: &quot;Hortalizas&quot;,
            &quot;stock&quot;: 0,
            &quot;status&quot;: &quot;out_of_stock&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ee99?text=corporis&quot;,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:235,\&quot;protein\&quot;:18,\&quot;carbs\&quot;:24.6,\&quot;fat\&quot;:4.5}&quot;,
            &quot;origin&quot;: &quot;Antigua and Barbuda&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 10,
            &quot;supplier_id&quot;: 1,
            &quot;name&quot;: &quot;iste&quot;,
            &quot;description&quot;: &quot;Accusamus qui odio voluptatibus ipsum eligendi beatae magni.&quot;,
            &quot;price&quot;: &quot;37.78&quot;,
            &quot;unit&quot;: &quot;docena&quot;,
            &quot;category&quot;: &quot;Otros&quot;,
            &quot;stock&quot;: 0,
            &quot;status&quot;: &quot;out_of_stock&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/008833?text=omnis&quot;,
            &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:200,\&quot;protein\&quot;:24.2,\&quot;carbs\&quot;:51.1,\&quot;fat\&quot;:4.3}&quot;,
            &quot;origin&quot;: &quot;Mexico&quot;,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;supplier&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
                &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
                &quot;email&quot;: &quot;cary13@towne.net&quot;,
                &quot;phone&quot;: &quot;1-765-617-1582&quot;,
                &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
                &quot;tax_id&quot;: &quot;J-44882877&quot;,
                &quot;payment_terms&quot;: 76,
                &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
                &quot;status&quot;: true,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    ],
    &quot;pagination&quot;: {
        &quot;total&quot;: 118,
        &quot;per_page&quot;: 10,
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 12
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products--id-">Display the specified product.</h2>

<p>
</p>



<span id="example-requests-GETapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;supplier_id&quot;: 1,
        &quot;name&quot;: &quot;repellendus&quot;,
        &quot;description&quot;: &quot;Nostrum vero voluptatem quis nam.&quot;,
        &quot;price&quot;: &quot;43.19&quot;,
        &quot;unit&quot;: &quot;kg&quot;,
        &quot;category&quot;: &quot;Tub&eacute;rculos&quot;,
        &quot;stock&quot;: 368,
        &quot;status&quot;: &quot;active&quot;,
        &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffdd?text=et&quot;,
        &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:278,\&quot;protein\&quot;:1,\&quot;carbs\&quot;:56.6,\&quot;fat\&quot;:15.6}&quot;,
        &quot;origin&quot;: &quot;San Marino&quot;,
        &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;supplier&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
            &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
            &quot;email&quot;: &quot;cary13@towne.net&quot;,
            &quot;phone&quot;: &quot;1-765-617-1582&quot;,
            &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
            &quot;tax_id&quot;: &quot;J-44882877&quot;,
            &quot;payment_terms&quot;: 76,
            &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products--id-" data-method="GET"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--id-"
                    onclick="tryItOut('GETapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--id-"
                    onclick="cancelTryOut('GETapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-products">Store a newly created product in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"price\": 60,
    \"unit\": \"d\",
    \"category\": \"l\",
    \"stock\": 9,
    \"supplier_id\": \"architecto\",
    \"origin\": \"n\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "price": 60,
    "unit": "d",
    "category": "l",
    "stock": 9,
    "supplier_id": "architecto",
    "origin": "n"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products">
</span>
<span id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-products" data-method="POST"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products"
                    onclick="tryItOut('POSTapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products"
                    onclick="cancelTryOut('POSTapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-products"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-products"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-products"
               value="60"
               data-component="body">
    <br>
<p>validation.min. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unit</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="unit"                data-endpoint="POSTapi-products"
               value="d"
               data-component="body">
    <br>
<p>validation.max. Example: <code>d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-products"
               value="l"
               data-component="body">
    <br>
<p>validation.max. Example: <code>l</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="POSTapi-products"
               value="9"
               data-component="body">
    <br>
<p>validation.min. Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>supplier_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="supplier_id"                data-endpoint="POSTapi-products"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the suppliers table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nutritional_info</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nutritional_info"                data-endpoint="POSTapi-products"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="origin"                data-endpoint="POSTapi-products"
               value="n"
               data-component="body">
    <br>
<p>validation.max. Example: <code>n</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-products--id-">Update the specified product in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\",
    \"price\": 60,
    \"unit\": \"d\",
    \"category\": \"l\",
    \"stock\": 9,
    \"status\": \"active\",
    \"origin\": \"n\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "description": "Eius et animi quos velit et.",
    "price": 60,
    "unit": "d",
    "category": "l",
    "stock": 9,
    "status": "active",
    "origin": "n"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-products--id-">
</span>
<span id="execution-results-PUTapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-products--id-" data-method="PUT"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-products--id-"
                    onclick="tryItOut('PUTapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-products--id-"
                    onclick="cancelTryOut('PUTapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-products--id-"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-products--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="PUTapi-products--id-"
               value="60"
               data-component="body">
    <br>
<p>validation.min. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unit</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="unit"                data-endpoint="PUTapi-products--id-"
               value="d"
               data-component="body">
    <br>
<p>validation.max. Example: <code>d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PUTapi-products--id-"
               value="l"
               data-component="body">
    <br>
<p>validation.max. Example: <code>l</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="PUTapi-products--id-"
               value="9"
               data-component="body">
    <br>
<p>validation.min. Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-products--id-"
               value="active"
               data-component="body">
    <br>
<p>Example: <code>active</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>active</code></li> <li><code>inactive</code></li> <li><code>out_of_stock</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>supplier_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="supplier_id"                data-endpoint="PUTapi-products--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the suppliers table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nutritional_info</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="nutritional_info"                data-endpoint="PUTapi-products--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="origin"                data-endpoint="PUTapi-products--id-"
               value="n"
               data-component="body">
    <br>
<p>validation.max. Example: <code>n</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-products--id-">Remove the specified product from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--id-">
</span>
<span id="execution-results-DELETEapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-products--id-" data-method="DELETE"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--id-"
                    onclick="tryItOut('DELETEapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--id-"
                    onclick="cancelTryOut('DELETEapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-products--id--image">Upload product image.</h2>

<p>
</p>



<span id="example-requests-POSTapi-products--id--image">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/products/1/image" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@/tmp/phpdmg3pe9ge38q3monamP" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1/image"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products--id--image">
</span>
<span id="execution-results-POSTapi-products--id--image" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products--id--image"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products--id--image"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-products--id--image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products--id--image">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-products--id--image" data-method="POST"
      data-path="api/products/{id}/image"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products--id--image', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products--id--image"
                    onclick="tryItOut('POSTapi-products--id--image');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products--id--image"
                    onclick="cancelTryOut('POSTapi-products--id--image');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products--id--image"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/{id}/image</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-products--id--image"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-products--id--image"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-products--id--image"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-products--id--image"
               value=""
               data-component="body">
    <br>
<p>validation.image validation.max. Example: <code>/tmp/phpdmg3pe9ge38q3monamP</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-products-categories">Get all available product categories.</h2>

<p>
</p>



<span id="example-requests-GETapi-products-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-categories">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Producto no encontrado.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-categories" data-method="GET"
      data-path="api/products/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-categories"
                    onclick="tryItOut('GETapi-products-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-categories"
                    onclick="cancelTryOut('GETapi-products-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHapi-products--id--stock">Update product stock.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-products--id--stock">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/products/1/stock" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"stock\": 27
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1/stock"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "stock": 27
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-products--id--stock">
</span>
<span id="execution-results-PATCHapi-products--id--stock" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-products--id--stock"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-products--id--stock"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-products--id--stock" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-products--id--stock">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-products--id--stock" data-method="PATCH"
      data-path="api/products/{id}/stock"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-products--id--stock', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-products--id--stock"
                    onclick="tryItOut('PATCHapi-products--id--stock');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-products--id--stock"
                    onclick="cancelTryOut('PATCHapi-products--id--stock');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-products--id--stock"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/products/{id}/stock</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-products--id--stock"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-products--id--stock"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-products--id--stock"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="PATCHapi-products--id--stock"
               value="27"
               data-component="body">
    <br>
<p>validation.min. Example: <code>27</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-products-low-stock">Get products with low stock.</h2>

<p>
</p>



<span id="example-requests-GETapi-products-low-stock">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/low-stock" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/low-stock"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-low-stock">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Producto no encontrado.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-low-stock" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-low-stock"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-low-stock"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-low-stock" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-low-stock">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-low-stock" data-method="GET"
      data-path="api/products/low-stock"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-low-stock', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-low-stock"
                    onclick="tryItOut('GETapi-products-low-stock');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-low-stock"
                    onclick="cancelTryOut('GETapi-products-low-stock');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-low-stock"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/low-stock</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-low-stock"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-low-stock"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-suppliers">Display a listing of the suppliers with pagination and search.</h2>

<p>
</p>



<span id="example-requests-GETapi-suppliers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/suppliers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-suppliers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
            &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
            &quot;email&quot;: &quot;cary13@towne.net&quot;,
            &quot;phone&quot;: &quot;1-765-617-1582&quot;,
            &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
            &quot;tax_id&quot;: &quot;J-44882877&quot;,
            &quot;payment_terms&quot;: 76,
            &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Hyatt PLC&quot;,
            &quot;contact_person&quot;: &quot;Mrs. Marjorie Armstrong Sr.&quot;,
            &quot;email&quot;: &quot;mhodkiewicz@oconnell.com&quot;,
            &quot;phone&quot;: &quot;1-757-619-0199&quot;,
            &quot;address&quot;: &quot;198 Ford Mill\nHailiemouth, SC 08489-5273&quot;,
            &quot;tax_id&quot;: &quot;J-63218213&quot;,
            &quot;payment_terms&quot;: 55,
            &quot;notes&quot;: null,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Tromp, Emmerich and McDermott&quot;,
            &quot;contact_person&quot;: &quot;Virginia Jones DVM&quot;,
            &quot;email&quot;: &quot;nconn@schiller.biz&quot;,
            &quot;phone&quot;: &quot;+1 (805) 564-3920&quot;,
            &quot;address&quot;: &quot;22794 Rempel Pike\nEast Abe, SD 56228&quot;,
            &quot;tax_id&quot;: &quot;J-1668870&quot;,
            &quot;payment_terms&quot;: 72,
            &quot;notes&quot;: &quot;Ut eos eos non ut eum voluptatem quo unde. Eaque sunt tempore aut vel voluptatem qui velit. Atque facere et dolor nobis id. Qui repudiandae cupiditate optio eos maxime. Eaque est et numquam aut commodi.&quot;,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Ritchie, Hermann and Hodkiewicz&quot;,
            &quot;contact_person&quot;: &quot;Miss Kimberly Medhurst&quot;,
            &quot;email&quot;: &quot;ryan.elliott@keeling.info&quot;,
            &quot;phone&quot;: &quot;864.420.2407&quot;,
            &quot;address&quot;: &quot;9835 Larkin Coves\nElijahton, TN 13006-6143&quot;,
            &quot;tax_id&quot;: &quot;J-47665881&quot;,
            &quot;payment_terms&quot;: 50,
            &quot;notes&quot;: &quot;Consequuntur tenetur saepe ducimus aut. Voluptatibus in est nisi hic. Sunt ut voluptatum enim ipsam. Repellendus est sed quia magni nostrum facilis mollitia.&quot;,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Ebert, Beahan and Larkin&quot;,
            &quot;contact_person&quot;: &quot;Devan Nolan Jr.&quot;,
            &quot;email&quot;: &quot;jacklyn01@luettgen.biz&quot;,
            &quot;phone&quot;: &quot;+1-936-730-9272&quot;,
            &quot;address&quot;: &quot;969 Bret Place Suite 544\nSouth Hildegardhaven, WA 99608&quot;,
            &quot;tax_id&quot;: &quot;J-48163811&quot;,
            &quot;payment_terms&quot;: 40,
            &quot;notes&quot;: null,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Cummings-Herman&quot;,
            &quot;contact_person&quot;: &quot;Neha Frami&quot;,
            &quot;email&quot;: &quot;ursula.funk@sanford.com&quot;,
            &quot;phone&quot;: &quot;1-641-843-1898&quot;,
            &quot;address&quot;: &quot;3857 Franecki Corner Suite 878\nNew Krystinachester, CA 50812-2998&quot;,
            &quot;tax_id&quot;: &quot;J-17790708&quot;,
            &quot;payment_terms&quot;: 29,
            &quot;notes&quot;: &quot;Quas quaerat incidunt mollitia provident sed. Perferendis consequatur illum nihil rerum alias suscipit reprehenderit. Et maxime repellat ex nostrum id. Sit distinctio tenetur eius autem. Quo ducimus debitis eos nihil cumque.&quot;,
            &quot;status&quot;: false,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Wyman, Feest and Terry&quot;,
            &quot;contact_person&quot;: &quot;Kenna Kulas&quot;,
            &quot;email&quot;: &quot;gcruickshank@lindgren.biz&quot;,
            &quot;phone&quot;: &quot;+1.863.991.7839&quot;,
            &quot;address&quot;: &quot;304 Jermey Burg\nCadenfort, MN 03189-3691&quot;,
            &quot;tax_id&quot;: &quot;J-98443076&quot;,
            &quot;payment_terms&quot;: 45,
            &quot;notes&quot;: null,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Ernser, Koss and Hane&quot;,
            &quot;contact_person&quot;: &quot;Zena Wolf&quot;,
            &quot;email&quot;: &quot;conroy.elizabeth@marks.info&quot;,
            &quot;phone&quot;: &quot;559-318-6104&quot;,
            &quot;address&quot;: &quot;6106 Gutmann Brook\nJayneside, AR 87021&quot;,
            &quot;tax_id&quot;: &quot;J-52360217&quot;,
            &quot;payment_terms&quot;: 87,
            &quot;notes&quot;: &quot;Aut quia dolores deleniti. Error consectetur sint repellendus et deserunt. Excepturi error voluptatem fugit quam rerum cupiditate. Non officia ut voluptas cupiditate quam maxime dolores.&quot;,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;O&#039;Conner and Sons&quot;,
            &quot;contact_person&quot;: &quot;Mr. Edmond Baumbach MD&quot;,
            &quot;email&quot;: &quot;xaltenwerth@reinger.com&quot;,
            &quot;phone&quot;: &quot;+1.628.251.5901&quot;,
            &quot;address&quot;: &quot;831 Leuschke Coves\nPort Joaquinbury, OR 59818&quot;,
            &quot;tax_id&quot;: &quot;J-82741976&quot;,
            &quot;payment_terms&quot;: 15,
            &quot;notes&quot;: &quot;Dolorem nulla ut quo quis eius odio incidunt saepe. Officiis est excepturi facilis est. Quia repellat est libero nemo modi molestias corporis.&quot;,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Breitenberg-Torphy&quot;,
            &quot;contact_person&quot;: &quot;Rosella Wuckert&quot;,
            &quot;email&quot;: &quot;kacey55@aufderhar.net&quot;,
            &quot;phone&quot;: &quot;820-434-3445&quot;,
            &quot;address&quot;: &quot;78838 Allie Dam Suite 967\nVerniceview, TN 83270&quot;,
            &quot;tax_id&quot;: &quot;J-54614280&quot;,
            &quot;payment_terms&quot;: 59,
            &quot;notes&quot;: null,
            &quot;status&quot;: true,
            &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;pagination&quot;: {
        &quot;total&quot;: 10,
        &quot;per_page&quot;: 10,
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-suppliers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-suppliers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-suppliers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-suppliers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-suppliers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-suppliers" data-method="GET"
      data-path="api/suppliers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-suppliers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-suppliers"
                    onclick="tryItOut('GETapi-suppliers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-suppliers"
                    onclick="cancelTryOut('GETapi-suppliers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-suppliers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/suppliers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-suppliers--id-">Display the specified supplier.</h2>

<p>
</p>



<span id="example-requests-GETapi-suppliers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/suppliers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-suppliers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
        &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
        &quot;email&quot;: &quot;cary13@towne.net&quot;,
        &quot;phone&quot;: &quot;1-765-617-1582&quot;,
        &quot;address&quot;: &quot;864 Eulah Plain\nSouth Eliasview, IL 37733&quot;,
        &quot;tax_id&quot;: &quot;J-44882877&quot;,
        &quot;payment_terms&quot;: 76,
        &quot;notes&quot;: &quot;Qui laborum itaque eaque consequuntur consequatur nihil provident. Magnam rem nisi et ipsa laudantium dignissimos. Rem cum explicabo porro deleniti laborum.&quot;,
        &quot;status&quot;: true,
        &quot;created_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-03T03:55:07.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;products&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;repellendus&quot;,
                &quot;description&quot;: &quot;Nostrum vero voluptatem quis nam.&quot;,
                &quot;price&quot;: &quot;43.19&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Tub&eacute;rculos&quot;,
                &quot;stock&quot;: 368,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffdd?text=et&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:278,\&quot;protein\&quot;:1,\&quot;carbs\&quot;:56.6,\&quot;fat\&quot;:15.6}&quot;,
                &quot;origin&quot;: &quot;San Marino&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;eos&quot;,
                &quot;description&quot;: &quot;Omnis hic nesciunt illo blanditiis saepe magni.&quot;,
                &quot;price&quot;: &quot;42.12&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Verduras&quot;,
                &quot;stock&quot;: 0,
                &quot;status&quot;: &quot;out_of_stock&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:422,\&quot;protein\&quot;:11.7,\&quot;carbs\&quot;:10.4,\&quot;fat\&quot;:2.4}&quot;,
                &quot;origin&quot;: &quot;Bermuda&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ratione&quot;,
                &quot;description&quot;: &quot;Quidem iusto sunt ut praesentium.&quot;,
                &quot;price&quot;: &quot;89.16&quot;,
                &quot;unit&quot;: &quot;g&quot;,
                &quot;category&quot;: &quot;Otros&quot;,
                &quot;stock&quot;: 299,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:365,\&quot;protein\&quot;:22.2,\&quot;carbs\&quot;:85,\&quot;fat\&quot;:11.2}&quot;,
                &quot;origin&quot;: &quot;Macedonia&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 4,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;itaque&quot;,
                &quot;description&quot;: &quot;Amet iste quia laboriosam magnam.&quot;,
                &quot;price&quot;: &quot;52.85&quot;,
                &quot;unit&quot;: &quot;unidad&quot;,
                &quot;category&quot;: &quot;Otros&quot;,
                &quot;stock&quot;: 56,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:41,\&quot;protein\&quot;:2.3,\&quot;carbs\&quot;:29.2,\&quot;fat\&quot;:15.7}&quot;,
                &quot;origin&quot;: &quot;Mongolia&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 5,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ipsa&quot;,
                &quot;description&quot;: &quot;Iure soluta dolorem incidunt sit occaecati.&quot;,
                &quot;price&quot;: &quot;30.43&quot;,
                &quot;unit&quot;: &quot;g&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 852,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:20,\&quot;protein\&quot;:9.3,\&quot;carbs\&quot;:3.8,\&quot;fat\&quot;:14.2}&quot;,
                &quot;origin&quot;: &quot;Switzerland&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;quam&quot;,
                &quot;description&quot;: &quot;Voluptatum eos quaerat nihil magnam.&quot;,
                &quot;price&quot;: &quot;81.59&quot;,
                &quot;unit&quot;: &quot;lb&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 804,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:443,\&quot;protein\&quot;:9.4,\&quot;carbs\&quot;:81.1,\&quot;fat\&quot;:10.3}&quot;,
                &quot;origin&quot;: &quot;Myanmar&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 7,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ipsam&quot;,
                &quot;description&quot;: &quot;Mollitia in id laudantium suscipit magnam asperiores qui.&quot;,
                &quot;price&quot;: &quot;11.85&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 861,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0077dd?text=sint&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:276,\&quot;protein\&quot;:21.3,\&quot;carbs\&quot;:11.9,\&quot;fat\&quot;:10.1}&quot;,
                &quot;origin&quot;: &quot;Iran&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 8,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;enim&quot;,
                &quot;description&quot;: &quot;Et vel maiores id assumenda molestiae placeat.&quot;,
                &quot;price&quot;: &quot;93.17&quot;,
                &quot;unit&quot;: &quot;unidad&quot;,
                &quot;category&quot;: &quot;Hortalizas&quot;,
                &quot;stock&quot;: 783,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:407,\&quot;protein\&quot;:12.7,\&quot;carbs\&quot;:53,\&quot;fat\&quot;:3.9}&quot;,
                &quot;origin&quot;: &quot;Namibia&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 9,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;sequi&quot;,
                &quot;description&quot;: &quot;Praesentium sed est et ratione.&quot;,
                &quot;price&quot;: &quot;38.54&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Hortalizas&quot;,
                &quot;stock&quot;: 0,
                &quot;status&quot;: &quot;out_of_stock&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ee99?text=corporis&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:235,\&quot;protein\&quot;:18,\&quot;carbs\&quot;:24.6,\&quot;fat\&quot;:4.5}&quot;,
                &quot;origin&quot;: &quot;Antigua and Barbuda&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 10,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;iste&quot;,
                &quot;description&quot;: &quot;Accusamus qui odio voluptatibus ipsum eligendi beatae magni.&quot;,
                &quot;price&quot;: &quot;37.78&quot;,
                &quot;unit&quot;: &quot;docena&quot;,
                &quot;category&quot;: &quot;Otros&quot;,
                &quot;stock&quot;: 0,
                &quot;status&quot;: &quot;out_of_stock&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/008833?text=omnis&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:200,\&quot;protein\&quot;:24.2,\&quot;carbs\&quot;:51.1,\&quot;fat\&quot;:4.3}&quot;,
                &quot;origin&quot;: &quot;Mexico&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 11,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;nostrum&quot;,
                &quot;description&quot;: &quot;Ea quis illo odit ullam nulla aspernatur.&quot;,
                &quot;price&quot;: &quot;53.08&quot;,
                &quot;unit&quot;: &quot;docena&quot;,
                &quot;category&quot;: &quot;Verduras&quot;,
                &quot;stock&quot;: 946,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0000aa?text=quis&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:404,\&quot;protein\&quot;:3.2,\&quot;carbs\&quot;:22.1,\&quot;fat\&quot;:11.3}&quot;,
                &quot;origin&quot;: &quot;Cape Verde&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 12,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;vel&quot;,
                &quot;description&quot;: &quot;Autem odio provident molestiae necessitatibus qui vel.&quot;,
                &quot;price&quot;: &quot;30.11&quot;,
                &quot;unit&quot;: &quot;lb&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 1,
                &quot;status&quot;: &quot;low_stock&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:359,\&quot;protein\&quot;:22.3,\&quot;carbs\&quot;:65.5,\&quot;fat\&quot;:6.6}&quot;,
                &quot;origin&quot;: &quot;Falkland Islands (Malvinas)&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 13,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ut&quot;,
                &quot;description&quot;: &quot;Quod iste id ab est optio amet.&quot;,
                &quot;price&quot;: &quot;98.97&quot;,
                &quot;unit&quot;: &quot;docena&quot;,
                &quot;category&quot;: &quot;Hortalizas&quot;,
                &quot;stock&quot;: 1000,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:341,\&quot;protein\&quot;:7.6,\&quot;carbs\&quot;:89.6,\&quot;fat\&quot;:8.1}&quot;,
                &quot;origin&quot;: &quot;Morocco&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 14,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;quos&quot;,
                &quot;description&quot;: &quot;Est sed magni optio totam esse saepe fugit.&quot;,
                &quot;price&quot;: &quot;12.63&quot;,
                &quot;unit&quot;: &quot;unidad&quot;,
                &quot;category&quot;: &quot;Verduras&quot;,
                &quot;stock&quot;: 489,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:221,\&quot;protein\&quot;:19.9,\&quot;carbs\&quot;:59.6,\&quot;fat\&quot;:15}&quot;,
                &quot;origin&quot;: &quot;Mali&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 15,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;fuga&quot;,
                &quot;description&quot;: &quot;Cupiditate iusto aut et necessitatibus quis consequatur commodi.&quot;,
                &quot;price&quot;: &quot;88.02&quot;,
                &quot;unit&quot;: &quot;lb&quot;,
                &quot;category&quot;: &quot;Hortalizas&quot;,
                &quot;stock&quot;: 905,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ddaa?text=debitis&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:198,\&quot;protein\&quot;:14.3,\&quot;carbs\&quot;:5.9,\&quot;fat\&quot;:13.3}&quot;,
                &quot;origin&quot;: &quot;Cameroon&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 99,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;deleniti&quot;,
                &quot;description&quot;: &quot;Voluptas accusamus aliquam et vel sit error sunt.&quot;,
                &quot;price&quot;: &quot;93.62&quot;,
                &quot;unit&quot;: &quot;lb&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 670,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:382,\&quot;protein\&quot;:5.7,\&quot;carbs\&quot;:50.9,\&quot;fat\&quot;:18.2}&quot;,
                &quot;origin&quot;: &quot;Marshall Islands&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 103,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;esse&quot;,
                &quot;description&quot;: &quot;Aut maxime totam laboriosam delectus officiis est consequuntur.&quot;,
                &quot;price&quot;: &quot;37.12&quot;,
                &quot;unit&quot;: &quot;lb&quot;,
                &quot;category&quot;: &quot;Verduras&quot;,
                &quot;stock&quot;: 99,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0044bb?text=a&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:420,\&quot;protein\&quot;:26.5,\&quot;carbs\&quot;:25.9,\&quot;fat\&quot;:14}&quot;,
                &quot;origin&quot;: &quot;Dominica&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 117,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;dolore&quot;,
                &quot;description&quot;: &quot;Consectetur est harum quisquam sequi consequatur.&quot;,
                &quot;price&quot;: &quot;77.64&quot;,
                &quot;unit&quot;: &quot;g&quot;,
                &quot;category&quot;: &quot;Tub&eacute;rculos&quot;,
                &quot;stock&quot;: 181,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ee22?text=velit&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:152,\&quot;protein\&quot;:17.7,\&quot;carbs\&quot;:13.2,\&quot;fat\&quot;:13.8}&quot;,
                &quot;origin&quot;: &quot;Eritrea&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-suppliers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-suppliers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-suppliers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-suppliers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-suppliers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-suppliers--id-" data-method="GET"
      data-path="api/suppliers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-suppliers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-suppliers--id-"
                    onclick="tryItOut('GETapi-suppliers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-suppliers--id-"
                    onclick="cancelTryOut('GETapi-suppliers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-suppliers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-suppliers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-suppliers">Store a newly created supplier in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-suppliers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/suppliers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"contact_person\": \"n\",
    \"email\": \"ashly64@example.com\",
    \"phone\": \"vdljnikhwaykcmyu\",
    \"address\": \"w\",
    \"tax_id\": \"p\",
    \"payment_terms\": 61,
    \"notes\": \"architecto\",
    \"status\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "contact_person": "n",
    "email": "ashly64@example.com",
    "phone": "vdljnikhwaykcmyu",
    "address": "w",
    "tax_id": "p",
    "payment_terms": 61,
    "notes": "architecto",
    "status": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-suppliers">
</span>
<span id="execution-results-POSTapi-suppliers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-suppliers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-suppliers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-suppliers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-suppliers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-suppliers" data-method="POST"
      data-path="api/suppliers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-suppliers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-suppliers"
                    onclick="tryItOut('POSTapi-suppliers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-suppliers"
                    onclick="cancelTryOut('POSTapi-suppliers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-suppliers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/suppliers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-suppliers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-suppliers"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_person</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_person"                data-endpoint="POSTapi-suppliers"
               value="n"
               data-component="body">
    <br>
<p>validation.max. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-suppliers"
               value="ashly64@example.com"
               data-component="body">
    <br>
<p>validation.email. Example: <code>ashly64@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-suppliers"
               value="vdljnikhwaykcmyu"
               data-component="body">
    <br>
<p>validation.max. Example: <code>vdljnikhwaykcmyu</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-suppliers"
               value="w"
               data-component="body">
    <br>
<p>validation.max. Example: <code>w</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tax_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tax_id"                data-endpoint="POSTapi-suppliers"
               value="p"
               data-component="body">
    <br>
<p>validation.max. Example: <code>p</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_terms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_terms"                data-endpoint="POSTapi-suppliers"
               value="61"
               data-component="body">
    <br>
<p>validation.min. Example: <code>61</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-suppliers"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-suppliers" style="display: none">
            <input type="radio" name="status"
                   value="true"
                   data-endpoint="POSTapi-suppliers"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-suppliers" style="display: none">
            <input type="radio" name="status"
                   value="false"
                   data-endpoint="POSTapi-suppliers"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-suppliers--id-">Update the specified supplier in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-suppliers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/suppliers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"contact_person\": \"n\",
    \"phone\": \"gzmiyvdljnikhway\",
    \"address\": \"k\",
    \"tax_id\": \"c\",
    \"payment_terms\": 38,
    \"notes\": \"architecto\",
    \"status\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "contact_person": "n",
    "phone": "gzmiyvdljnikhway",
    "address": "k",
    "tax_id": "c",
    "payment_terms": 38,
    "notes": "architecto",
    "status": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-suppliers--id-">
</span>
<span id="execution-results-PUTapi-suppliers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-suppliers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-suppliers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-suppliers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-suppliers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-suppliers--id-" data-method="PUT"
      data-path="api/suppliers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-suppliers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-suppliers--id-"
                    onclick="tryItOut('PUTapi-suppliers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-suppliers--id-"
                    onclick="cancelTryOut('PUTapi-suppliers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-suppliers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-suppliers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-suppliers--id-"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_person</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_person"                data-endpoint="PUTapi-suppliers--id-"
               value="n"
               data-component="body">
    <br>
<p>validation.max. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-suppliers--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-suppliers--id-"
               value="gzmiyvdljnikhway"
               data-component="body">
    <br>
<p>validation.max. Example: <code>gzmiyvdljnikhway</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-suppliers--id-"
               value="k"
               data-component="body">
    <br>
<p>validation.max. Example: <code>k</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tax_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tax_id"                data-endpoint="PUTapi-suppliers--id-"
               value="c"
               data-component="body">
    <br>
<p>validation.max. Example: <code>c</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_terms</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_terms"                data-endpoint="PUTapi-suppliers--id-"
               value="38"
               data-component="body">
    <br>
<p>validation.min. Example: <code>38</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-suppliers--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-suppliers--id-" style="display: none">
            <input type="radio" name="status"
                   value="true"
                   data-endpoint="PUTapi-suppliers--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-suppliers--id-" style="display: none">
            <input type="radio" name="status"
                   value="false"
                   data-endpoint="PUTapi-suppliers--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-suppliers--id-">Remove the specified supplier from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-suppliers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/suppliers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-suppliers--id-">
</span>
<span id="execution-results-DELETEapi-suppliers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-suppliers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-suppliers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-suppliers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-suppliers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-suppliers--id-" data-method="DELETE"
      data-path="api/suppliers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-suppliers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-suppliers--id-"
                    onclick="tryItOut('DELETEapi-suppliers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-suppliers--id-"
                    onclick="cancelTryOut('DELETEapi-suppliers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-suppliers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/suppliers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-suppliers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-suppliers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-suppliers--id--products">Get products for a specific supplier.</h2>

<p>
</p>



<span id="example-requests-GETapi-suppliers--id--products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/suppliers/1/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-suppliers--id--products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;supplier&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Hettinger, Herzog and Harber&quot;,
            &quot;contact_person&quot;: &quot;Mrs. Lavonne Kub Sr.&quot;,
            &quot;email&quot;: &quot;cary13@towne.net&quot;,
            &quot;phone&quot;: &quot;1-765-617-1582&quot;
        },
        &quot;products&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;repellendus&quot;,
                &quot;description&quot;: &quot;Nostrum vero voluptatem quis nam.&quot;,
                &quot;price&quot;: &quot;43.19&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Tub&eacute;rculos&quot;,
                &quot;stock&quot;: 368,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffdd?text=et&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:278,\&quot;protein\&quot;:1,\&quot;carbs\&quot;:56.6,\&quot;fat\&quot;:15.6}&quot;,
                &quot;origin&quot;: &quot;San Marino&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;eos&quot;,
                &quot;description&quot;: &quot;Omnis hic nesciunt illo blanditiis saepe magni.&quot;,
                &quot;price&quot;: &quot;42.12&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Verduras&quot;,
                &quot;stock&quot;: 0,
                &quot;status&quot;: &quot;out_of_stock&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:422,\&quot;protein\&quot;:11.7,\&quot;carbs\&quot;:10.4,\&quot;fat\&quot;:2.4}&quot;,
                &quot;origin&quot;: &quot;Bermuda&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ratione&quot;,
                &quot;description&quot;: &quot;Quidem iusto sunt ut praesentium.&quot;,
                &quot;price&quot;: &quot;89.16&quot;,
                &quot;unit&quot;: &quot;g&quot;,
                &quot;category&quot;: &quot;Otros&quot;,
                &quot;stock&quot;: 299,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:365,\&quot;protein\&quot;:22.2,\&quot;carbs\&quot;:85,\&quot;fat\&quot;:11.2}&quot;,
                &quot;origin&quot;: &quot;Macedonia&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 4,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;itaque&quot;,
                &quot;description&quot;: &quot;Amet iste quia laboriosam magnam.&quot;,
                &quot;price&quot;: &quot;52.85&quot;,
                &quot;unit&quot;: &quot;unidad&quot;,
                &quot;category&quot;: &quot;Otros&quot;,
                &quot;stock&quot;: 56,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:41,\&quot;protein\&quot;:2.3,\&quot;carbs\&quot;:29.2,\&quot;fat\&quot;:15.7}&quot;,
                &quot;origin&quot;: &quot;Mongolia&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 5,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ipsa&quot;,
                &quot;description&quot;: &quot;Iure soluta dolorem incidunt sit occaecati.&quot;,
                &quot;price&quot;: &quot;30.43&quot;,
                &quot;unit&quot;: &quot;g&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 852,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:20,\&quot;protein\&quot;:9.3,\&quot;carbs\&quot;:3.8,\&quot;fat\&quot;:14.2}&quot;,
                &quot;origin&quot;: &quot;Switzerland&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;quam&quot;,
                &quot;description&quot;: &quot;Voluptatum eos quaerat nihil magnam.&quot;,
                &quot;price&quot;: &quot;81.59&quot;,
                &quot;unit&quot;: &quot;lb&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 804,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:443,\&quot;protein\&quot;:9.4,\&quot;carbs\&quot;:81.1,\&quot;fat\&quot;:10.3}&quot;,
                &quot;origin&quot;: &quot;Myanmar&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 7,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;ipsam&quot;,
                &quot;description&quot;: &quot;Mollitia in id laudantium suscipit magnam asperiores qui.&quot;,
                &quot;price&quot;: &quot;11.85&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Frutas&quot;,
                &quot;stock&quot;: 861,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0077dd?text=sint&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:276,\&quot;protein\&quot;:21.3,\&quot;carbs\&quot;:11.9,\&quot;fat\&quot;:10.1}&quot;,
                &quot;origin&quot;: &quot;Iran&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 8,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;enim&quot;,
                &quot;description&quot;: &quot;Et vel maiores id assumenda molestiae placeat.&quot;,
                &quot;price&quot;: &quot;93.17&quot;,
                &quot;unit&quot;: &quot;unidad&quot;,
                &quot;category&quot;: &quot;Hortalizas&quot;,
                &quot;stock&quot;: 783,
                &quot;status&quot;: &quot;active&quot;,
                &quot;image&quot;: null,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:407,\&quot;protein\&quot;:12.7,\&quot;carbs\&quot;:53,\&quot;fat\&quot;:3.9}&quot;,
                &quot;origin&quot;: &quot;Namibia&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 9,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;sequi&quot;,
                &quot;description&quot;: &quot;Praesentium sed est et ratione.&quot;,
                &quot;price&quot;: &quot;38.54&quot;,
                &quot;unit&quot;: &quot;kg&quot;,
                &quot;category&quot;: &quot;Hortalizas&quot;,
                &quot;stock&quot;: 0,
                &quot;status&quot;: &quot;out_of_stock&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ee99?text=corporis&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:235,\&quot;protein\&quot;:18,\&quot;carbs\&quot;:24.6,\&quot;fat\&quot;:4.5}&quot;,
                &quot;origin&quot;: &quot;Antigua and Barbuda&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 10,
                &quot;supplier_id&quot;: 1,
                &quot;name&quot;: &quot;iste&quot;,
                &quot;description&quot;: &quot;Accusamus qui odio voluptatibus ipsum eligendi beatae magni.&quot;,
                &quot;price&quot;: &quot;37.78&quot;,
                &quot;unit&quot;: &quot;docena&quot;,
                &quot;category&quot;: &quot;Otros&quot;,
                &quot;stock&quot;: 0,
                &quot;status&quot;: &quot;out_of_stock&quot;,
                &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/008833?text=omnis&quot;,
                &quot;nutritional_info&quot;: &quot;{\&quot;calories\&quot;:200,\&quot;protein\&quot;:24.2,\&quot;carbs\&quot;:51.1,\&quot;fat\&quot;:4.3}&quot;,
                &quot;origin&quot;: &quot;Mexico&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T03:55:08.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ]
    },
    &quot;pagination&quot;: {
        &quot;total&quot;: 18,
        &quot;per_page&quot;: 10,
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-suppliers--id--products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-suppliers--id--products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-suppliers--id--products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-suppliers--id--products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-suppliers--id--products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-suppliers--id--products" data-method="GET"
      data-path="api/suppliers/{id}/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-suppliers--id--products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-suppliers--id--products"
                    onclick="tryItOut('GETapi-suppliers--id--products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-suppliers--id--products"
                    onclick="cancelTryOut('GETapi-suppliers--id--products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-suppliers--id--products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/suppliers/{id}/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-suppliers--id--products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-suppliers--id--products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-suppliers--id--products"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-suppliers--id--toggle-status">Toggle the supplier&#039;s status.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-suppliers--id--toggle-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/suppliers/1/toggle-status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suppliers/1/toggle-status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-suppliers--id--toggle-status">
</span>
<span id="execution-results-PATCHapi-suppliers--id--toggle-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-suppliers--id--toggle-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-suppliers--id--toggle-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-suppliers--id--toggle-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-suppliers--id--toggle-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-suppliers--id--toggle-status" data-method="PATCH"
      data-path="api/suppliers/{id}/toggle-status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-suppliers--id--toggle-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-suppliers--id--toggle-status"
                    onclick="tryItOut('PATCHapi-suppliers--id--toggle-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-suppliers--id--toggle-status"
                    onclick="cancelTryOut('PATCHapi-suppliers--id--toggle-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-suppliers--id--toggle-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/suppliers/{id}/toggle-status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-suppliers--id--toggle-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-suppliers--id--toggle-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-suppliers--id--toggle-status"
               value="1"
               data-component="url">
    <br>
<p>The ID of the supplier. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-orders">Display a listing of the orders with pagination.</h2>

<p>
</p>



<span id="example-requests-GETapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders" data-method="GET"
      data-path="api/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders"
                    onclick="tryItOut('GETapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders"
                    onclick="cancelTryOut('GETapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-orders--id-">Display the specified order.</h2>

<p>
</p>



<span id="example-requests-GETapi-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders--id-" data-method="GET"
      data-path="api/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders--id-"
                    onclick="tryItOut('GETapi-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders--id-"
                    onclick="cancelTryOut('GETapi-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-orders--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-orders">Store a newly created order in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"items\": [
        {
            \"product_id\": \"architecto\",
            \"quantity\": 22
        }
    ],
    \"shipping_address\": \"b\",
    \"payment_method\": \"transfer\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [
        {
            "product_id": "architecto",
            "quantity": 22
        }
    ],
    "shipping_address": "b",
    "payment_method": "transfer"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-orders">
</span>
<span id="execution-results-POSTapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-orders" data-method="POST"
      data-path="api/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-orders"
                    onclick="tryItOut('POSTapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-orders"
                    onclick="cancelTryOut('POSTapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>items</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
<br>
<p>validation.min.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="items.0.product_id"                data-endpoint="POSTapi-orders"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the products table. Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="items.0.quantity"                data-endpoint="POSTapi-orders"
               value="22"
               data-component="body">
    <br>
<p>validation.min. Example: <code>22</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipping_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shipping_address"                data-endpoint="POSTapi-orders"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payment_method"                data-endpoint="POSTapi-orders"
               value="transfer"
               data-component="body">
    <br>
<p>Example: <code>transfer</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>credit_card</code></li> <li><code>debit_card</code></li> <li><code>cash</code></li> <li><code>transfer</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-orders--id--status">Update the specified order status.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-orders--id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/orders/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"pending\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "pending"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-orders--id--status">
</span>
<span id="execution-results-PATCHapi-orders--id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-orders--id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-orders--id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-orders--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-orders--id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-orders--id--status" data-method="PATCH"
      data-path="api/orders/{id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-orders--id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-orders--id--status"
                    onclick="tryItOut('PATCHapi-orders--id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-orders--id--status"
                    onclick="cancelTryOut('PATCHapi-orders--id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-orders--id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/orders/{id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-orders--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-orders--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PATCHapi-orders--id--status"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-orders--id--status"
               value="pending"
               data-component="body">
    <br>
<p>Example: <code>pending</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>processing</code></li> <li><code>shipped</code></li> <li><code>delivered</code></li> <li><code>cancelled</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-orders-my-orders">Get the authenticated user&#039;s orders.</h2>

<p>
</p>



<span id="example-requests-GETapi-orders-my-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/my-orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/my-orders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders-my-orders">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders-my-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders-my-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-my-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders-my-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-my-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders-my-orders" data-method="GET"
      data-path="api/orders/my-orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-my-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders-my-orders"
                    onclick="tryItOut('GETapi-orders-my-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders-my-orders"
                    onclick="cancelTryOut('GETapi-orders-my-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders-my-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/my-orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders-my-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders-my-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHapi-orders--id--cancel">Cancel the specified order.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-orders--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/orders/architecto/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/architecto/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-orders--id--cancel">
</span>
<span id="execution-results-PATCHapi-orders--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-orders--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-orders--id--cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-orders--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-orders--id--cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-orders--id--cancel" data-method="PATCH"
      data-path="api/orders/{id}/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-orders--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-orders--id--cancel"
                    onclick="tryItOut('PATCHapi-orders--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-orders--id--cancel"
                    onclick="cancelTryOut('PATCHapi-orders--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-orders--id--cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/orders/{id}/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-orders--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-orders--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PATCHapi-orders--id--cancel"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-orders-stats">Get order statistics.</h2>

<p>
</p>



<span id="example-requests-GETapi-orders-stats">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/stats" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/stats"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders-stats">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders-stats" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders-stats"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-stats"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders-stats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-stats">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders-stats" data-method="GET"
      data-path="api/orders/stats"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-stats', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders-stats"
                    onclick="tryItOut('GETapi-orders-stats');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders-stats"
                    onclick="cancelTryOut('GETapi-orders-stats');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders-stats"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/stats</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users">Display a listing of the users with pagination.</h2>

<p>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users--id-">Display the specified user.</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-users--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-users--id-">Update the specified user in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/users/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"phone\": \"ngzmiyvdljnikhwa\",
    \"address\": \"y\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "phone": "ngzmiyvdljnikhwa",
    "address": "y"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
</span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-users--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-users--id-"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-users--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-users--id-"
               value="ngzmiyvdljnikhwa"
               data-component="body">
    <br>
<p>validation.max. Example: <code>ngzmiyvdljnikhwa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-users--id-"
               value="y"
               data-component="body">
    <br>
<p>validation.max. Example: <code>y</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-users--id-">Remove the specified user from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/users/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-users--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-users--id--role">Change user role.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users--id--role">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/users/architecto/role" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"role\": \"admin\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/architecto/role"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role": "admin"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-users--id--role">
</span>
<span id="execution-results-PATCHapi-users--id--role" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users--id--role"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users--id--role"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-users--id--role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users--id--role">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-users--id--role" data-method="PATCH"
      data-path="api/users/{id}/role"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users--id--role', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-users--id--role"
                    onclick="tryItOut('PATCHapi-users--id--role');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-users--id--role"
                    onclick="cancelTryOut('PATCHapi-users--id--role');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-users--id--role"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}/role</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-users--id--role"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-users--id--role"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PATCHapi-users--id--role"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="PATCHapi-users--id--role"
               value="admin"
               data-component="body">
    <br>
<p>Example: <code>admin</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>admin</code></li> <li><code>cliente</code></li></ul>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
