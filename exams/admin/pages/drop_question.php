<?php
include '../../../db.php';
$qsid = mysqli_real_escape_string($conn, $_GET['id']);
$exid = mysqli_real_escape_string($conn, $_GET['eid']);

$sql = "DELETE FROM questions WHERE question_id='$qsid'";

if ($conn->query($sql) === TRUE) {
    header("location:../examinations.php?rp=7823&eid=$exid");
} else {
    header("location:../view-questions.php?rp=1298&eid=$exid");
}

$conn->close();
?>
