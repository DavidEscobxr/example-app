<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Add user</h1>
        <form action = "/create_user" method = "post" class="form-group">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Surname</label>
                <input class="form-control" name="surname" placeholder="Surname">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Age</label>
                <input type="number" class="form-control" name="age" placeholder="Age">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Birth date</label>
                <input type="date" class="form-control" type="number" name="birth_date">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="example@email.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

</body>
</html>
