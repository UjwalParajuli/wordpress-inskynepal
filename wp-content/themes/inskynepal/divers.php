<html>
    <head>
        <title>Diver Details</title>
        <style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Lato', sans-serif;
  color: #202020;
}

p {
  display: none;
}

table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  overflow: hidden;
}
table td, table th {
  border-top: 1px solid #ECF0F1;
  padding: 10px;
}
table td {
  border-left: 1px solid #ECF0F1;
  border-right: 1px solid #ECF0F1;
}
table th {
  background-color: #4ECDC4;
}
table tr:nth-of-type(even) td {
  background-color: #d9f4f2;
}
table .total th {
  background-color: white;
}
table .total td {
  text-align: right;
  font-weight: 700;
}

.mobile-header {
  display: none;
}

@media only screen and (max-width: 760px) {
  p {
    display: block;
    font-weight: bold;
  }

  table tr td:not(:first-child), table tr th:not(:first-child), table tr td:not(.total-val) {
    display: none;
  }
  table tr:nth-of-type(even) td:first-child {
    background-color: #d9f4f2;
  }
  table tr:nth-of-type(odd) td:first-child {
    background-color: white;
  }
  table tr:nth-of-type(even) td:not(:first-child) {
    background-color: white;
  }
  table tr th:first-child {
    width: 100%;
    display: block;
  }
  table tr th:not(:first-child) {
    width: 40%;
    transition: transform 0.4s ease-out;
    transform: translateY(-9999px);
    position: relative;
    z-index: -1;
  }
  table tr td:not(:first-child) {
    transition: transform 0.4s ease-out;
    transform: translateY(-9999px);
    width: 60%;
    position: relative;
    z-index: -1;
  }
  table tr td:first-child {
    display: block;
    cursor: pointer;
  }
  table tr.total th {
    width: 25%;
    display: inline-block;
  }
  table tr td.total-val {
    display: inline-block;
    transform: translateY(0);
    width: 75%;
  }
}
@media only screen and (max-width: 300px) {
  table tr th:not(:first-child) {
    width: 50%;
    font-size: 14px;
  }
  table tr td:not(:first-child) {
    width: 50%;
    font-size: 14px;
  }
}

</style>

    </head>
    <body>
        <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        include 'inc/db_connect.php';

        $qry = "SELECT insky_divers.diver_name, insky_divers.diver_age, insky_divers.diver_gender, insky_divers.diver_weight,
        insky_divers.diver_package, insky_divers.diver_nationality, insky_divers.diver_air_ticket, insky_bookings.booked_by 
        FROM insky_booking_divers INNER JOIN insky_divers on insky_divers.diver_id = insky_booking_divers.diver_id INNER join 
        insky_bookings on insky_bookings.booking_id = insky_booking_divers.booking_id where insky_booking_divers.booking_id = $id ";

        $result = mysqli_query($conn, $qry);

        $row = mysqli_fetch_assoc($result);
        $booked_by = $row['booked_by'];

        $result2 = mysqli_query($conn, $qry); ?>

        <div class="wrap">
        <h1>Booked By: <?php echo $booked_by ?></h1>
        <table>
            <thead>
                <tr>
                    <th class="manage-column">Diver Name</th>
                    <th class="manage-column">Diver Age</th>
                    <th class="manage-column">Diver Gender</th>
                    <th class="manage-column">Diver Weight</th>
                    <th class="manage-column">Diver Package</th>
                    <th class="manage-column">Diver Nationality</th>
                    <th class="manage-column">Diver Air Ticket</th>
                </tr>
            </thead>
            <tbody>

       <?php  while ($rows = mysqli_fetch_assoc($result2)) { ?>
                    <tr>
                        <td><?php echo $rows['diver_name']; ?></td>
                        <!-- <td><a href="../wp-content/themes/inskynepal/divers.php?id=<?php echo $rows['booking_id']; ?>"><?php echo $rows['booked_by']; ?></a></td> -->
                        <td><?php echo $rows['diver_age']; ?></td>
                        <td><?php echo $rows['diver_gender']; ?></td>
                        <td><?php echo $rows['diver_weight']; ?></td>
                        <td><?php echo $rows['diver_package']; ?></td>
                        <td><?php echo $rows['diver_nationality']; ?></td>
                        <!-- <td><img src="<?php echo $rows['diver_air_ticket']; ?>" alt="Ticket"/></td> -->
                        <td><a href="<?php echo $rows['diver_air_ticket']; ?>" target="_blank">View Air Ticket</a></td>
                    </tr>
                 
        <?php
            
        }?>

            </tbody>
        </table>
        </div>

    <?php 
  
}
?>
    </body>
</html>

