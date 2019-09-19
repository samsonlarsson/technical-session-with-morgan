<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App</title>

        <link rel="manifest" href="/manifest.json">

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        
        <script>
            const csrfToken = "{{csrf_token()}}";

            function checkLogin() {
                let username = $('#username').val();
                let password = $('#password').val();

                let postObject = {
                    username: username,
                    password: password,
                    _token: csrfToken
                };
            
                $.post('/api/checkLogin', postObject, function (data, status) {
                    console.log(data);
                    console.log(status);
                });
            }
        </script>
    </head>
    <body>
        <div class="container">
            <input id="username" type="text" />
            <input id="password" type="password" />

            <button type="button" onclick="checkLogin()">Login</button>
        </div>
    </body>
</html>
