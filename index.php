<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function getFirstNumericValue(array $arr): int|null {
    foreach ($arr as $value) {
        if (is_numeric($value)) {
            return $value;
        }
    }
    return null;
}
$example = ['abc', false, '25a', 12, 5.7, '42'];
$result = getFirstNumericValue($example);

if ($result !== null) {
    echo "Առաջին թվային արժեքը՝ $result";
} else {
    echo "Թվային արժեք չի գտնվել։";
}

//
function f1($str1, $str2) {
    $lastChar = substr($str1, -1);
    if (strpos($str2, $lastChar) !== false) {
        return true;
    } else {
        return false;
    }
}
echo f1("Barev", "vay")   ? "true<br>" : "false<br>";
echo f1("Barev", "abc")   ? "true<br>" : "false<br>";
echo f1("Hello", "World") ? "true<br>" : "false<br>";
echo f1("Cat", "dog")     ? "true<br>" : "false<br>";   


//
function f3 ($needle, $haystack) {
    return substr_count($haystack, $needle);
}

echo f3 ("a", "banana") . "<br>";     // 3
echo f3("na", "banana") . "<br>";    // 2
echo f3("b", "banana") . "<br>";     // 1
echo f3("x", "banana") . "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $phone    = htmlspecialchars($_POST['phone']);
    $email    = htmlspecialchars($_POST['email']);
    $age      = (int)$_POST['age'];
    $gender   = htmlspecialchars($_POST['gender']);
    $message  = htmlspecialchars($_POST['message']);

    echo "<h2>Ձեր տվյալները</h2>";
    echo "Անուն և ազգանուն: $fullname<br>";
    echo "Հեռախոս: $phone<br>";
    echo "Էլ.փոստ: $email<br>";
    echo "Տարիք: $age<br>";
    echo "Սեռ: $gender<br>";
    echo "Նամակ: $message<br>";
} else {
    echo "<p>Խնդրում ենք լրացնել ֆորմը:</p>";
}
    ?>
</body>
</html>