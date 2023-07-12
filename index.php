<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css"/>
    <title>php forms</title>
</head>
<body>

<h1>php forms</h1>
    <div class="wrapper">
        
        <div>
            <form action="./server/validate.php" method="POST">
                <label for="Name">Name</label>
                <input type="text" name="name">
                <label for="Email">Email</label>
                <input type="email" name="email">
                <label for="password">Password</label>
                <input type="password" name="password">
                <label for="comfirm">Confirm password</label>
                <input type="password" name="confirm-password">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>