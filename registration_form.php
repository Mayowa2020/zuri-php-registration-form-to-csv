<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>

<body>

    <form action=" user_data.php" method="post">
        <h1>Registration Form</h1>

        <label for="name">Name</label>
        <input type="text" id="name" name="name"> <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="date">Date Of Birth</label>
        <input type="date" name="date" id="date"><br><br>

        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br><br>

        <label for="country">Country</label>
        <select name="country" id=" country">
            <option value="">Select a Country</option>
            <option value="Benin">Benin</option>
            <option value="Mali">Ghana</option>
            <option value="Sierra-Loene">Mali</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Ivory Coast">Ivory Coast</option>
            <option value="Niger">Niger</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Gambia">Gambia</option>
            <option value="Senegal">Senegal</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Guinea">Guinea</option>
            <option value="Liberia">Liberia</option>
            <option value="Togo">Togo</option>
        </select>
        <br><br>

        <button type="submit" name="submit">Register</button>
    </form>

</body>

</html>