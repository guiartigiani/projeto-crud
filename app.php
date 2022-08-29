<?php

include('connect.php');

class App
{

    private $name;
    private $address;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function create($name, $address)
    {
        include('connect.php');
        mysqli_query($conn, "INSERT INTO address(NAME, ADDRESS) VALUES('$name','$address')");
    }

    public function read()
    {
        include('connect.php');
        $select = mysqli_query($conn, "SELECT * FROM `address` ORDER BY ID");
        while ($col = mysqli_fetch_array($select)) { ?>
            <tbody>
                <tr>
                    <td><?= $col['ID'] ?></td>
                    <td><?= $col['NAME'] ?></td>
                    <td><?= $col['ADDRESS'] ?></td>
                    <td align="center"><a href="update.php?id=<?= $col['ID'] ?>">Update</a></td>
                    <script type="text/jscript" src="delete.js"></script>
                    <td align=" center"><a href="#" onclick="checkDelete(<?= $col['ID'] ?>)">Delete</a></td>
                </tr>
            </tbody>
        <?php }
    }


    public function delete($id)
    {
        include('connect.php');

        $select = mysqli_query($conn, "DELETE FROM address WHERE ID = '$id'");
    }
}
