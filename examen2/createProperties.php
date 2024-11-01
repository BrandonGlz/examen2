<?php
    INCLUDE "../examen2/includes/headers.php";

    REQUIRE "../examen2/includes/config/conect.php";
    $db = connectdb(); 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        

    $id = $_POST["id"];
    $title = $_POST["title"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $rooms = $_POST["rooms"];
    $wc = $_POST["wc"];
    $garage = $_POST["garage"];
    $timeStamp = $_POST["timeStamp"];
    $id_Sells = $_POST["id_Sells"];

    $query = "insert into PROPERTIES (title,price,image,description,rooms,wc,garage,timeStamp,id_Sells) values('$title','$price','$image','$description','$rooms','$wc','$garage','$timeStamp','$id_Sells');";
    
    $response = mysqli_query($db,$query);

    if ($response) {
        echo "Propiedad creada con exito";
    }else{
        echo "Erro al crear la propiedad";    
    }
}

?>
<section>
    <h2>Propierties Form</h2>
    <div>
        <form action="createProperties.php" method="post">
            <fieldset>
                <legend>Fill all fields form fields to create a new propierty</legend>
                <div>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Title of propierty">
                </div>

                <div>
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" placeholder="$11111111111">
                </div>

                <div>
                    <label for="image">Image</label>
                    <input type="image" src="" alt="" id="title" name="title">
                </div>

                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Propierty description"?> </textarea>
                </div>

                <div>
                    <label for="rooms">Rooms</label>
                    <input type="number" id="rooms" name="rooms">
                </div>

                <div>
                    <label for="wc">WC</label>
                    <input type="number" id="wc" name="wc">
                </div>

                <div>
                    <label for="garage">Garage</label>
                    <input type="number" id="garage" name="garage">
                </div>

                <div>
                    <label for="timeStamp">Timestamp</label>
                    <input type="date" name="timeStamp" id="timeStamp">
                </div>

                <div>
                    <label for="id_Sells">Seller</label>
                    <input type="number" id="id_Sells" name="id_Sells">
                </div>

                <div>
                    <button type="submit">Create a new propierty</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>
<?php
    INCLUDE "../examen2/includes/footer.php";
?>