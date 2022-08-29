<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Create</title>
</head>

<body>
    <div class="container-sm">
        <?php
        include('connect.php');
        $id = $_GET['id'];
        $select = mysqli_query($conn, "SELECT * FROM ADDRESS WHERE ID='$id'");
        $column=mysqli_fetch_array($select);
        ?>
        <form method="post" action="updateId.php" class="formulario">
            <div class="col-md-6">
                <input type="hidden" name="id" value="<?=$column['ID'] ?>" />
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputEmail4" value="<?= $column['NAME'] ?>" required>
            </div>
            <div class=" col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" value="<?= $column['ADDRESS'] ?>" placeholder="1234 Main St" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>