    <?php
    include 'dbh.php';

    $conn = OpenCon();

    echo "Connected Successfully";

    CloseCon($conn);

    ?>