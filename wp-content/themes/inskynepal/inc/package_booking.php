<?php

    require 'db_connect.php';

    date_default_timezone_set("Asia/Kathmandu");

    $flag = 0;

    //Booking person data
    $booked_by = $_POST['full_name'];
    $phone = $_POST['phone'];
    if(!isset($_POST['is_photo']))
    {
        $is_photo = 'No';
    } else {
        $is_photo = 'Yes';
    }
    $relatives_phone = $_POST['relatives_phone'];
    $jump_date = $_POST['jump_date'];
    $booked_on  = date("Y-m-d H:i:s");
    $no_of_travellers = $_POST['no_of_divers'];

    $qry = "INSERT INTO insky_bookings (booked_by, phone, is_photo, relatives_phone, jump_date, booked_on, no_of_travellers) VALUES 
    ('$booked_by', '$phone', '$is_photo', '$relatives_phone', '$jump_date', '$booked_on', $no_of_travellers)";

    if (mysqli_query($conn, $qry)) {
      $flag++;
      $last_id = mysqli_insert_id($conn);

        //Diver's Data
      $count = count($_POST['diver_name']);
      
      if($count > 0){
        for($i = 0; $i < $count; $i++){
          $sql = "";
              $diver_name =  $_POST['diver_name'][$i];
              $diver_age =  $_POST['diver_age'][$i];
              $diver_gender =  $_POST['diver-gender-1'][$i];
              $diver_package =  $_POST['diver-package-1'][$i];
              $diver_nationality =  $_POST['diver-nationality-1'][$i];
              $diver_weight = $_POST['diver_weight'][$i];

              $image_url = ""; 
              $img = null;
              $targetDir = 'uploads/';
              $oldName = $_FILES['air_ticket']['name'][$i];
              $extension = pathinfo($_FILES["air_ticket"]["name"][$i], PATHINFO_EXTENSION);
              $array = explode(".", $oldName);
              $length = count($array);
              $img = time().'.'.$array[$length - 1];
              $target = $targetDir.basename($img);                
              if (!move_uploaded_file($_FILES['air_ticket']['tmp_name'][$i], $target)) {
                  echo "File upload error!";
              } else{
                $image_url = 'https://www.inskynepal.com/wp-content/themes/inskynepal/inc/'.$target;
                $sql .= "INSERT INTO insky_divers (diver_name, diver_age, diver_gender, diver_weight, diver_package, diver_nationality, diver_air_ticket) VALUES 
                ('$diver_name', $diver_age, '$diver_gender', $diver_weight, '$diver_package', '$diver_nationality', '$image_url' );";
                $result = mysqli_query($conn, $sql);
                if($result){
                  $last_id_2 = mysqli_insert_id($conn);

                  $sql2 = "INSERT INTO insky_booking_divers (booking_id, diver_id) VALUES ($last_id, $last_id_2)";
                  $result2 = mysqli_query($conn, $sql2);
                  if($result2){
                    echo "New record created successfully";
                  }
                  else{
                    echo "error on insky_booking_divers";
                  }


                }
                else{
                  echo "error on insky_divers";
                }
              
              }
        }

      }
    }
    else{
      echo "error on insky_booking";
      echo "('$booked_by', '$phone', '$is_photo', '$relatives_phone', '$jump_date', '$booked_on', $no_of_travellers)";
    }
    
    $conn->close();

?>