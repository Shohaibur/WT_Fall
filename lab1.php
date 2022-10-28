<html>

<head>
    <title>Labtask-1 Registration form</title>
</head>

<body>
<!-- <?php include 'mytest1.php';?> -->
<!-- <form action="mytest1.php" method="post"> -->
    <table>
        <tr>
            <td></td>
            <td>
                <h1>Registration Form</h1>
            </td>
        </tr>

        <form>
            <tr>
                <td>Student Name</td>
                <td><select name="name">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                    </select>
                    <input type="text" name="sname" placeholder="Enter your name">
                </td>
            </tr>

            <tr>
                <td> Father's Name</td>
                <td> <input type="text" name="fname" placeholder="Enter your father's name">
                </td>
            </tr>

            <tr>
                <td> Mother's Name</td>
                <td> <input type="text" name="mname" placeholder="Enter your mother's name"></td>
            </tr>


            <tr>
                <td> Date of birth</td>
                <td> <input type="date" name="birthday"></td>
            </tr>

            <tr>
                <td>
                    Gender
                </td>
                <td>
                    Male<Input type="radio" name="gender">
                    Female<input type="radio" name="gender"> </td>

            </tr>

            <tr>
                <td>
                    Email ID
                </td>
                <td>
                    <input type="email" name="mail">
                </td>
            </tr>

            <tr>
                <td>
                    Mobile No.
                </td>
                <td>
                    <input type="number" name="number">
                </td>
            </tr>


            <tr>
                <td>Address
                </td>
                <td><textarea type="address" name="address"></textarea>
                </td>
            </tr>
            <tr>
                <td> State
                </td>
                <td><input type="text" name="state">
                </td>
            </tr>
            <tr>
                <td>City
                </td>
                <td><input type="text" name="city">
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="enter"></td>
            </tr>

    </table>

    </form>
   

</body>

</html>