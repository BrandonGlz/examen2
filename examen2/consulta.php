<?php
include "../examen2/includes/headers.php";
require "../examen2/includes/config/conect.php";

$db = connectdb();

// Consultar vendedores
$sellersQuery = "SELECT * FROM SELLS";
$sellersResult = mysqli_query($db, $sellersQuery);

// Consultar propiedades
$propertiesQuery = "SELECT * FROM PROPERTIES";
$propertiesResult = mysqli_query($db, $propertiesQuery);
?>

<section>
    <h2>Sellers</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($sellersResult)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Properties</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Rooms</th>
            <th>WC</th>
            <th>Garage</th>
            <th>TimeStamp</th>
            <th>Id Seller</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($propertiesResult)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['rooms']; ?></td>
            <td><?php echo $row['wc']; ?></td>
            <td><?php echo $row['garage']; ?></td>
            <td><?php echo $row['timeStamp']; ?></td>
            <td><?php echo $row['id_Sells']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</section>

<?php
include "../examen2/includes/footer.php";
?>
