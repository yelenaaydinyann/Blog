<<<<<<< HEAD
<?php 
   // var_dump($_REQUEST);
    //var_dump($_GET);
   // var_dump($_POST);
echo "<p>($_POST['name'])</p>";
?>
=======
<?php

function redirectWithError($message) {
    $params = $_POST;
    $params['error'] = $message;

    $query = http_build_query($params);
    header("Location:indexform.php?$query");
    exit;
}


$firstname = trim($_POST['firstname'] ?? '');
$lastname  = trim($_POST['lastname'] ?? '');
$email     = trim($_POST['email'] ?? '');
$password  = $_POST['password'] ?? '';
$confirm   = $_POST['confirm_password'] ?? '';
$username  = trim($_POST['username'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$birthdate = trim($_POST['birthdate'] ?? '');
$gender    = trim($_POST['gender'] ?? '');
$address   = trim($_POST['address'] ?? '');


if ($firstname === '' || $lastname === '' || $email === '' || $password === '' || $confirm === '') {
    redirectWithError("Խնդրում ենք լրացնել բոլոր պարտադիր դաշտերը։");
}



if (!preg_match('/^\p{L}+$/u', $firstname)) {
    redirectWithError("Անուն դաշտը պետք է պարունակի միայն տառեր։");
}

if (!preg_match('/^\p{L}+$/u', $lastname)) {
    redirectWithError("Ազգանուն դաշտը պետք է պարունակի միայն տառեր։");
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithError("Խնդրում ենք մուտքագրել վավեր էլ. փոստ։");
}


if ($password !== $confirm) {
    redirectWithError("Գաղտնաբառերը չեն համընկնում։");
}


if ($phone !== "") {
    if (!preg_match('/^\+374 \d{2} \d{3} \d{3}$/', $phone)) {
        redirectWithError("Հեռախոսահամարը պետք է լինի +374 00 000 000 ձևաչափով։");
    }
}


if ($birthdate !== "") {
    $bdate = new DateTime($birthdate);
    $today = new DateTime();
    $age = $today->diff($bdate)->y;

    if ($age < 18) {
        redirectWithError("Գրանցվելու համար պետք է լինել առնվազն 18 տարեկան։");
    }
}


// Եթե ամեն ինչ OK է
echo "<h1>Շնորհակալություն, գրանցումը հաջողված է!</h1>";

>>>>>>> 13e423e5d32935221997c7ce6287c18f523cf4ae
