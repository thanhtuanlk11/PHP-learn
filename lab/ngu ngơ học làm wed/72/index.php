<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Helvetica, Arial, sans-serif;
        font-weight: 100;
        font-size: 12px;
        line-height: 30px;
        color: #777;
        background: #4CAF50;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
    }

    #contact {
        margin: 150px 0;
        padding: 25px;
        background: #F9F9F9;
        box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact input[type="text"],
    #contact input[type="password"] {
        font: 400 12px/16px Helvetica, Arial, sans-serif;
    }

    #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    #contact h4 {
        display: block;
        font-size: 13px;
        font-weight: 400;
        margin: 5px 0 15px;
    }

    fieldset {
        border: none;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="password"] {
        width: 100%;
        border: 1px solid #ccc;
        background: #fff;
        margin: 0 0 5px;
        padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="password"]:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    }

    #contact input[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        background: #4CAF50;
        color: #fff;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
    }

    #contact input[type="submit"]:hover {
        background: #43A047;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
    }

    .error {
        color: red;
        font-style: italic;
    }
</style>

<body>
    <?php
    $email = '';
    $username = '';
    $password = '';
    $website = '';
    $errors = array();
    if (!empty($_POST)) {
        $email = $_POST['email'];
        if (checkInput($email, 'email') == false) {
            $errors['email'] = '<p class="error">Địa chỉ email chưa hợp lệ</p>';
        }
        $username = $_POST['username'];
        if (checkInput($username, 'username') == false) {
            $errors['username'] = '<p class="error">Username chưa hợp lệ</p>';
        }
        $password = $_POST['password'];
        if (checkInput($password, 'password') == false) {
            $errors['password'] = '<p class="error">Password chưa hợp lệ</p>';
        }
        $website = $_POST['website'];
        if (checkInput($website, 'website') == false) {
            $errors['website'] = '<p class="error">Địa chỉ website chưa hợp lệ</p>';
        }
    }
    // Hàm kiểm tra cho bốn kiểu dữ liệu nhập vào:
    function checkInput($value, $type = 'email')
    {
        switch ($type) {
            case 'email':
                $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i';
                break;
            case 'password':
                $pattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
                break;
            case 'username':
                $pattern = '/^[a-z\d_]{2,20}$/i';
                break;
            case 'website':
                $pattern = '/^(https?:\/\/)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)$/';
                break;
        }
        $flag = preg_match($pattern, $value);
        return $flag;
    }
    ?>
    <div class="container">
        <form id="contact" action="#" method="post">
            <h3>Liên hệ</h3>
            <h4>Thông tin để liên hệ với chúng tôi</h4>
            <fieldset>
                <input type="text" name="email" placeholder="Nhập địa chỉ email..." value="<?php echo $email; ?>">
                <?php if (isset($errors['email'])) {
                    echo $errors['email'];
                } ?>
            </fieldset>
            <fieldset>
                <input type="text" name="username" placeholder="Nhập username..." value="<?php echo $username; ?>">
                <?php if (isset($errors['username'])) {
                    echo $errors['username'];
                } ?>
            </fieldset>
            <fieldset>
                <input type="password" name="password" placeholder="Nhập mật khẩu..." value="<?php echo $password; ?>">
                <?php if (isset($errors['password'])) {
                    echo $errors['password'];
                } ?>
            </fieldset>
            <fieldset>
                <input type="text" name="website" placeholder="Nhập website..." value="<?php echo $website; ?>">
                <?php if (isset($errors['website'])) {
                    echo $errors['website'];
                } ?>
            </fieldset>
            <input type="submit" value="Gửi">
        </form>
    </div>
</body>

</html>