<?php

    if(empty($_POST['firstName'])){
        print "den är tom!";

    }else{
        print $_POST['ticketType'];
        print $_POST['firstName'];
        print $_POST['lname'];
        print $_POST['email'];
        print $_POST['numberOfTickets'];
    }

?>