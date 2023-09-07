<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$parkingSelect = $_GET['parkingSelect'];
$voteSelect = $_GET['voteSelect'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container py-2">
        <h1 class="text-success py-2">Php Hotel</h1>

        <form class="py-4">
            <fieldset>
                <div class="mb-3">
                    <label for="parkingSelect" class="form-label">Parking</label>
                    <select name="parkingSelect" id="parkingSelect" class="form-select">
                        <option>yes</option>
                        <option>no</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="voteSelect" class="form-label">Vote</label>
                    <select name="voteSelect" id="voteSelect" class="form-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filtra</button>
            </fieldset>
        </form>

        <div class="row">
            <div class="col py-4">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($hotels as $hotel) { ?>
                            <tr>
                                <?php
                                foreach ($hotel as $singleHotel) {
                                ?>
                                    <td><?php echo $singleHotel ?></td>
                                <?php
                                } ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>