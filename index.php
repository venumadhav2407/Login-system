<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        .reg {
            /* width: 500px; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>

    <fieldset>
        <legend>
            <h2>Registration</h2>
        </legend>
        <form action="" autocomplete="false">
            <div class="reg">

                <tr>
                    <td><label for="name">Your Name:</label></td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>

                <tr>
                    <td><label for="mobile">Mobile Number:</label></td>
                    <td><input type="text" name="mobile" id="mobile"></td>
                </tr>

                <tr>
                    <td><label for="email">Your Email:</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>

                <tr>
                    <td><label for="passwd">Password:</label></td>
                    <td><input type="password" name="passwd" id="passwd"></td>
                </tr>

                <tr>
                    <td><label for="cpasswd">Confirm Password:</label></td>
                    <td><input type="text" name="cpasswd" id="cpasswd"></td>
                </tr>




            </div>
        </form>
    </fieldset>


</body>

</html>