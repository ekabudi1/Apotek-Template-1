<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</head>

<body class="bg-info">

    <center>

        <div class="card" style="width: 30rem; height: 20rem; margin-top: 10%; margin-bottom: 10%;">
            <h1>
                <b>
                    LOGIN PAGE
                </b>
            </h1>
            <div class="card-body">
                <form action="proses_login_dekripsi.php" method="POST">
                    <table class="" tyle="width: 18rem; height: 30rem;">
                        <tr>
                            <td style="font-size: 30px;">Username</td>
                            <td><input type="text" class="form-control" name="username"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 30px; ">Password</td>
                            <td><input type="password" class="form-control" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding-top: 15%;" class="d-grid gap-2">
                                <input class="btn btn-outline-success btn-lg" type="submit" value="Login">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <!-- <form action="proses_login_dekripsi.php" method="POST">
            <table class="card" tyle="width: 18rem;">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form> -->
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>