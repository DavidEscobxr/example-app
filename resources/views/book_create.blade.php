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
        <h1>Add book</h1>
        <form action = "/create" method = "post" class="form-group">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="form-group">
            <label for="exampleFormControlInput1">Book title</label>
            <input class="form-control" name="name" placeholder="Book title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Author's name</label>
                <input class="form-control" name="author" placeholder="Author's name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Date realease</label>
                <input type="date" class="form-control" name="release">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Edition number</label>
                <input class="form-control" type="number" name="edition" placeholder="Edition number">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Gender</label>
                <input class="form-control" name="gender" placeholder="Gender">
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Book synopsis</label>
            <textarea class="form-control" name="synopsis" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

</body>
</html>
