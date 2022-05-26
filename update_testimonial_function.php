<?php
include('db_connection.php');
// $post_id = $_POST['post_id'];
$trigger = $_POST['trigger'];
if($trigger == 'edit_testimonial')
{
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $quote = $_POST['quote'];
    $testimonial_id = $_POST['testimonial_id'];
    $sql = "UPDATE `testimonial` SET `name` = '$name',`designation`='$designation',`quote`='$quote' WHERE `id` = '$testimonial_id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('The testimonial has been updated successfully');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}elseif($trigger == 'delete_testimonial')
{
    $testimonial_id = $_POST['testimonial_id'];
    $sql = "DELETE FROM `testimonial` WHERE `id` = '$testimonial_id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('The testimonial has been deleted successfully');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}elseif($trigger == 'create_testimonial')
{
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $quote = $_POST['quote'];
    $sql = "INSERT INTO `testimonial`(`name`, `designation`, `quote`) VALUES ('$name','$designation','$quote')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Testimonial has been created successfully');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>