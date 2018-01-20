
/**
 * Created by PhpStorm.
 * User: Sunil PC
 * Date: 1/20/2018
 * Time: 10:17 AM
 */
<?php

include('pdo_library.php');

    $msg = new Message();

    //WHEN the form is submitted
    if(isset($_POST['message_id']))
    {
        $message_id = $_POST['message_id'];
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];

        //when there is no college id provided, consider it a new record and insert, update otherwise
        if($message_id=='-1')
            $success = $msg->create($message_id, $full_name, $email, $telephone, $message);
        else
            $success = $msg->update($message_id, $full_name, $email, $telephone, $message);

        if($success)
            echo "<h4>Record with id $message_id is saved/updated<br/></h4>";
    }
a minute ago - Reply









 ?>