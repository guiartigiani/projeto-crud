<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>READ</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">UPDATE</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>
        <?php include('app.php');
        $read = new app();
        $read->read(); ?>
    </table>
    <div class="d-grid gap-2">
        <input type="button" value="Back to Home" onclick="location.href='lista.php'">
    </div>
</body>

</html>