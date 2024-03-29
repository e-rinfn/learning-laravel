<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Buku | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .login-box {
        width: 500px;
        border: 1px solid;
        padding: 30px;
    }

    form div {
        margin-bottom: 15px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">

        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <h1 class="d-flex justify-content-center">Login</h1>
                <div>
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center">
                    Don't have account? <a href="register">Sign Up</a>
                </div>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
