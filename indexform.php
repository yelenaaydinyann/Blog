<?php
session_start();

$err = $_SESSION['error'] ?? '';
$oldData = $_SESSION['old'] ?? [];

$old = function($key) use ($oldData) {
    return isset($oldData[$key]) ? htmlspecialchars($oldData[$key]) : '';
};

unset($_SESSION['error'], $_SESSION['old']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleforms.css">
</head>
<body>
<main class="container">

<h1>Գրանցման դաշտ</h1>
<input type="file" name="file.php">

<?php if ($err): ?>
    <div class="error"><?= $err ?></div>
<?php endif; ?>

<form action="form-submit.php" method="POST" class="form">

    <fieldset>
        <legend>Հիմնական տվյալներ</legend>

        <label>Անուն 
            <input type="text" name="firstname" required value="<?= $old('firstname') ?>">
        </label>

        <label>Ազգանուն 
            <input type="text" name="lastname" required value="<?= $old('lastname') ?>">
        </label>

        <label>Էլ. փոստ (Email)
            <input type="email" name="email" required value="<?= $old('email') ?>">
        </label>

        <label>Գաղտնաբառ (Password)
            <input type="password" name="password" required>
        </label>

        <label>Գաղտնաբառի հաստատում (Confirm Password)
            <input type="password" name="confirm_password" required>
        </label>
    </fieldset>

    <fieldset>
        <legend>Լրացուցիչ</legend>

        <label>Օգտանուն (Username)
            <input type="text" name="username" value="<?= $old('username') ?>">
        </label>

        <label>Հեռախոսահամար
            <input type="tel" name="phone" value="<?= $old('phone') ?>">
        </label>

        <label>Ծննդյան ամսաթիվ
            <input type="date" name="birthdate" value="<?= $old('birthdate') ?>">
        </label>

        <label>Սեռ
            <select name="gender">
                <option value="">-- Ընտրել --</option>
                <option value="female" <?= $old('gender')==='female' ? 'selected' : '' ?>>Իգական</option>
                <option value="male"   <?= $old('gender')==='male'   ? 'selected' : '' ?>>Արական</option>
                <option value="other"  <?= $old('gender')==='other'  ? 'selected' : '' ?>>Այլ</option>
            </select>
        </label>

        <label>Հասցե
            <textarea name="address" rows="3"><?= $old('address') ?></textarea>
        </label>
    </fieldset>

    <div class="actions">
        <button type="submit">Գրանցվել</button>
    </div>

</form>

</main>
</body>
</html>
