<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];       
        $manager = $_POST['manager'];
        $location = $_POST['location'];
        $laptop = $_POST['laptop'];
        $keyboard = $_POST['keyboard'];
        $mouse = $_POST['mouse'];
        $monitor = $_POST['monitor'];
        $dockingStation = $_POST['dockingStation'];
        $headset = $_POST['headset'];
        $deskphone = $_POST['deskphone'];
        $additionalRequirements = $_POST['additionalrequirements'];
                
        $items_requested_list = array();
        
        switch(true){
            case isset($laptop):
                array_push($items_requested_list, "Laptop");
                break;
            
            case isset($keyboard):
                array_push($items_requested_list, "Keyboard");
                break;
            
            case isset($mouse):
                array_push($items_requested_list, "Mouse");
                break;
            
            case isset($monitor):
                array_push(_list, "Monitor");
                break;
            
            case isset($dockingStation):
                array_push($items_requested_list, "Docking Station");
                break;
            
            case isset($headset):
                array_push($items_requested_list, "Headset");
                break;
            
            case isset($deskphone):
                array_push($items_requested_list, "Deskphone");
                break;
        }
       
        $itemsrequested = print_r($items_requested, true);
        
        $email_subject = "New Hardware Request";
        $email_body = 
                "Name: $fName $lName.\n
                Email: $email.\n
                Manager: $manager.\n
                Office: $location.\n
                Items requested: $itemsrequested.\n
                Additional requirements: $additionalRequirements ";
        
        $to = "mehulp12@gmail.com";
        $headers = "From: $email \r\n";
        
        $sendmail_from = "$email";
                
        mail($to, $email_subject, $email_body, $headers);
        
        header('Location: Submitted.html');
        ?>
    </body>
</html>
