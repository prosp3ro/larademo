<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users</title>
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

    <style>
        #form {
            position: absolute;
            top: 30%;
            left: 15%;
            transform: translate(-50%, -50%);
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="/users" method="post" id="form">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="inputGroupPrepend"
                required>
        </div>
        <div>
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
