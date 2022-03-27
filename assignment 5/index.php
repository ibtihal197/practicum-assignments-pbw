<?php
//variabel bandara asal
$origin_airport = array(
    // nama bandara asal => pajak
    "Soekarno-Hatta (CGK)" => 65000,
    // nama bandara asal => pajak
    "Husein Sastranegara (BDO)" => 50000,
    // nama bandara asal => pajak
    "Abdul Rahman Saleh (MLG)" => 40000,
    // nama bandara asal => pajak
    "Juanda (SUB)" => 30000
);
// membuat array asosiatif bandara tujuan
$destination_airport = array(
    // nama bandara tujuan => pajak
    "Ngurah Rai (DPS)" => 85000,
    // nama bandara tujuan => pajak
    "Hasanuddin (UPG)" => 70000,
    // nama bandara tujuan => pajak
    "Inanwatan (INX)" => 90000,
    // nama bandara tujuan => pajak
    "Sultan Iskandar Muda (BTJ)" => 60000
);

//fungsi untuk mengambil value dari key bandara
// atau mengambil pajak sesuai bandara
function getOriginTax($origin_airport, $destination)
{
    $tax = $origin_airport[$destination];
    return $tax;
}
function getDestinationTax($destination_airport, $destination)
{
    $tax = $destination_airport[$destination];
    return $tax;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Assignment PBW</title>
</head>

<body>
<div class="container">
    <div class="container-img">
        <img src="assets/img/aircraft.svg" alt="">
    </div>
    <div class="container-form">
        <form action="" method="POST">
            <h2 class="heading">Flight Ticket Reservation</h2>
            
            <div class="form-field">
                <p>Airline</p>
                <input type="text" placeholder="Airline Name" id="airline" name="airline">
            </div>
            <div class="form-field">
                <p>Origin Airpot</p>
                <select name="origin" id="origin">
                    <option selected>Select Airport</option>
                    <?php foreach ($origin_airport as $airport => $tax) : ?>
                        <option value="<?= $airport ?>"><?= $airport; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-field">
                <p>Destination Airport</p>
                <select name="destination" id="destination">
                    <option selected>Select Airport</option>
                    <?php foreach ($destination_airport as $airport => $tax) : ?>
                        <option value="<?= $airport ?>"><?= $airport; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-field">
                <p>Ticket Price</p>
                <input type="text" placeholder="Ticket Price" name="price" id="price">
            </div>
            <button class="btn" name="submit">Save</button>
        </form>
    </div>               
</div>

<div class="container-data">
    <?php
        $file = 'data/airline.json';
        $data_airline = array();

        $file_json = file_get_contents($file);

        $data_airline = json_decode($file_json, true);

        if (isset($_POST['submit'])) {
            $tax = getOriginTax($origin_airport, $_POST['origin']) + getDestinationTax($destination_airport, $_POST['destination']);
            $total = $tax + $_POST['price'];
            $inputUser = array(
                "airline" => $_POST['airline'],
                "origin" => $_POST['origin'],
                "destination" => $_POST['destination'],
                "ticket_price" => $_POST['price'],
                "tax" => $tax,
                "total_price" => $total
            );

            array_push($data_airline, $inputUser);
            $data_json = json_encode($data_airline, JSON_PRETTY_PRINT);
            file_put_contents($file, $data_json);
        }

    ?>
    
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Airline</th>
                    <th scope="col">Origin of Flight</th>
                    <th scope="col">Flight Destination</th>
                    <th scope="col">Ticket Price</th>
                    <th scope="col">Tax</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_airline as $data => $value) : ?>
                <tr>
                    <td><?= $data_airline[$data]['airline']; ?></td>
                    <td><?= $data_airline[$data]['origin']; ?></td>
                    <td><?= $data_airline[$data]['destination']; ?></td>
                    <td><?= $data_airline[$data]['ticket_price']; ?></td>
                    <td><?= $data_airline[$data]['tax']; ?></td>
                    <td><?= $data_airline[$data]['total_price']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>