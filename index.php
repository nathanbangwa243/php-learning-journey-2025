<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ma page web</title>
</head>
<body>
<h1>Ma page web</h1>
<p>
    <?php
    $username = "nathan";
    $isAllowToEnter = 4;

    switch ($isAllowToEnter){
        case 2:
            echo "Welcome {$username}";
        break;

        case 3:
            echo "Access denied for user '{$username}'";
        break;
        default:
            echo "You're amazing";
    }

    # check user majority
    $user_age = 17;

    $is_major = ($user_age >= 18) ? true:false;

    echo $is_major ? "{$username} is major" : "{$username} is minor";

    ?>
</p>
</body>
</html>