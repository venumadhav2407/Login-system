<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./js/registration.js"></script>

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
        <form>
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
                    <td><input type="password" name="cpasswd" id="cpasswd"></td>
                </tr>


                <tr>
                    <td><input type="button" value="Submit" name="submit" id="submitbtn"></td>
                </tr>




            </div>
        </form>
    </fieldset>


</body>

</html>