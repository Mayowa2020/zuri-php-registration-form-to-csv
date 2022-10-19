<?php
if (isset($_POST['submit'])) 
{     
    // get the content of form and print it to this page when the form is submitted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $form_data = array($name, $email, $date_of_birth, $gender, $country);
    print_r($form_data);
}


// Open/Create the file and append data
$registration_form = fopen('userdata.csv', 'a');

if ($registration_form) {
    echo 'File Opened...';
    
    fputcsv($registration_form, $form_data);   
    echo 'File Updated...';
} else {
    echo 'File Not Opened...';
    
    exit();
}

// Close the file
fclose($registration_form);