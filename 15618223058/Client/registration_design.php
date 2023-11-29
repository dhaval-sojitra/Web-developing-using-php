<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">User Registration Form</h2>
        <form action="registration_code.php" method="get">
            <table class="table">
                <tbody>
                    <tr>
                        <th>First Name:</th>
                        <td><input type="text" class="form-control" name="first_name" required></td>
                    </tr>
                    <tr>
                        <th>Middle Name:</th>
                        <td><input type="text" class="form-control" name="middle_name"></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><input type="text" class="form-control" name="last_name" required></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input type="email" class="form-control" name="email" required></td>
                    </tr>
                    <tr>
                        <th>Mobile No:</th>
                        <td><input type="tel" class="form-control" name="mobile_number" required></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" class="form-control" name="password" required></td>
                    </tr>
                    <tr>
                        <th>City:</th>
                        <td><input type="text" class="form-control" name="city" required></td>
                    </tr>
                    <tr>
                        <th>State:</th>
                        <td><input type="text" class="form-control" name="state" required></td>
                    </tr>
                    <tr>
                        <th>Country:</th>
                        <td><input type="text" class="form-control" name="country" required></td>
                    </tr>
                    <tr>
                        <th>Education Qualification:</th>
                        <td><input type="text" class="form-control" name="education" required></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gender" value="male" required>
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gender" value="female" required>
                                <label class="form-check-label">Female</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
