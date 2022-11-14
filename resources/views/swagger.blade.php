<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API Specifications</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist@latest/swagger-ui.css">
        <script src="https://unpkg.com/swagger-ui-dist@latest/swagger-ui-bundle.js"></script>        
    </head>
    <body >

        <div id="swagger-ui"></div>

        <script>
            window.onload = function () {
                window.ui = SwaggerUIBundle({
                    url: '/api.yaml',
                    dom_id: '#swagger-ui',
                    deepLinking: true,
                    presets: [
                        SwaggerUIBundle.presets.apis,
                    ],
                    layout: 'BaseLayout',
                });
            };
        </script>

    </body>
</html>
