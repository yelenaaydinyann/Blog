   <?php

function back_with_error($msg, $old = []) {

    $q = 'error=' . urlencode($msg);
    foreach ($old as $k => $v) {
        $q .= '&' . urlencode($k) . '=' . urlencode($v);
    }
    header("Location: indexform.php?$q");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    back_with_error('Ֆորմը ուղարկված չէ։');
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

$old = [
    'firstname' => $firstname,
    'lastname'  => $lastname,
    'email'     => $email,
    'username'  => $username,
    'phone'     => $phone,
    'birthdate' => $birthdate,
    'gender'    => $gender,
    'address'   => $address
];

if ($firstname === '' || $lastname === '' || $email === '' || $password === '' || $confirm === '') {
    back_with_error('Խնդրում ենք լրացնել բոլոր պարտադիր դաշտերը (First Name, Last Name, Email, Password).', $old);
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    back_with_error('Խնդրում ենք նշեք ճշգրիտ email։', $old);
}

if (strlen($password) < 6) {
    back_with_error('Գաղտնաբառը պետք է լինի առնվազն 6 նիշ/սիմվոլ։', $old);
}

if ($password !== $confirm) {
    back_with_error('Գաղտնաբառերը չեն համընկնում։', $old);
}

$pass_hash = password_hash($password, PASSWORD_DEFAULT);

?>
<!doctype html>
<html lang="hy">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Գրանցում հաջողվեց</title>
  <link rel="stylesheet" href="styleforms.css">
</head>
<body>
  <main class="container">
    <h1>Գրանցումը հաջողվեց</h1>

    <p class="success">Ձեր տվյալները ընդունվել են։</p>

    <section class="result">
      <h2>Ձեր տվյալները (ոչ գաղտնի)</h2>
      <p><strong>Անուն:</strong> <?= htmlspecialchars($firstname) ?></p>
      <p><strong>Ազգանուն:</strong> <?= htmlspecialchars($lastname) ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
      <p><strong>Օգտանուն:</strong> <?= htmlspecialchars($username) ?></p>
      <p><strong>Հեռախոս:</strong> <?= htmlspecialchars($phone) ?></p>
      <p><strong>Ծննդյան ամսաթիվ:</strong> <?= htmlspecialchars($birthdate) ?></p>
      <p><strong>Սեռ:</strong> <?= htmlspecialchars($gender) ?></p>
      <p><strong>Հասցե:</strong> <?= nl2br(htmlspecialchars($address)) ?></p>
    </section>


    <a class="back" href="indexform.php">Վերադառնալ ֆորմային</a>
  </main>
</body>
</html>