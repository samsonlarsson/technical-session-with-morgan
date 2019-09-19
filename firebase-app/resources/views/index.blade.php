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
            };

            function pushMessage() {
                let message = $('#message').val();

                let postObject = {
                    _token: csrfToken,
                    message: message
                };

                $.post('/api/pushMessage', postObject, function (data, status) {
                    console.log(data);
                    console.log(status);
                });
            }
        </script>
    </head>
    <body>
        <div class="container">
            <input class="form-control" id="username" type="text" />
            <input class="form-control" id="password" type="password" />

            <button class="btn btn-primary" type="button" onclick="checkLogin()">Login</button>

            <br /> <br />

            <input class="form-control" id="message" type="text" />
            <button class="btn btn-primary" type="button" onclick="pushMessage()">Send Message</button>

        </div>
    </body>
</html>
