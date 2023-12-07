<?php 
// ============== INFO ===============
// naming fields in mysql link wp ex: parent_name
// naming var in php link  ex: $count_students
// $connect name of var to connect db

    // statement
    $sql = 'SELECT `name`, `student_id` FROM `daily_product`';

    // Perform query against a database: --  أجراء الاستعلام على قواعد البيانات
    $res = mysqli_query($connect, $sql);

    // on failure `mysqli_query`
    if (! $res) {
        // print last error message
        echo "Connect failed: %s\n", mysqli_error($connect);
        exit();
    }
    // count of row of data 
    $count = mysqli_num_rows($res);
    // If Count > 0 This Mean The Database Contain Record
    if ($count > 0) {
        while($row = mysqli_fetch_array($res)) { 

            echo '=========================================';
            echo '<br>';
            echo $row['name'];
            echo "{$row['student_id']}";
            echo '<br>';
            echo $row[0];
            echo $row[1];
            echo '<br>';

        }
    }
  mysqli_free_result($res);

  mysqli_close($connect);


// insert into 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}