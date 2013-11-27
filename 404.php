<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Page Not Found :(</title>
        <style>
            ::-moz-selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            ::selection {
                background: #b3d4fc;
                text-shadow: none;
            }

            html {
                padding: 30px 10px;
                font-size: 20px;
                line-height: 1.4;
                color: #737373;
                background: #f0f0f0;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            html,
            input {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }

            body {
                max-width: 500px;
                _width: 500px;
                padding: 30px 20px 50px;
                border: 1px solid #b3b3b3;
                border-radius: 4px;
                margin: 0 auto;
                box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
                background: #fcfcfc;
            }

            h1 {
                margin: 0 10px;
                font-size: 50px;
                text-align: center;
            }

            h1 span {
                color: #bbb;
            }

            h3 {
                margin: 1.5em 0 0.5em;
            }

            p {
                margin: 1em 0;
            }

            p span {
                color: #f66;
            }

            ul {
                padding: 0 0 0 40px;
                margin: 1em 0;
            }

            .container {
                max-width: 600px;
                _width: 600px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>404 - Not found <span>:(</span></h1>
            <p>Sorry,<br>but the page you were trying to view does not exist.</p>
            <p>It looks like this was the result of either:</p>
            <ul>
                <li>a mistyped address</li>
                <li>an out-of-date link</li>
            </ul>
            <p>You tried to get:<br><span><?php echo $_SERVER["REQUEST_URI"] ?></span></p>
            <!--
            <script>
                var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
            </script>
            <script src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
            -->
        </div>
    </body>
</html>
