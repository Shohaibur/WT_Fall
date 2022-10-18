<?php

include ("mngval1.php") ;
?>

<html>

<head>
    <title>Labtask-1 Registration form</title>
</head>

<body>
    <form action ="" method="post">

    <table>
        <tr>
            <td></td>
            <td>
                <h1>Manager Registration Form</h1>
            </td>
        </tr>

        <form>
            <tr>
                <td>Name</td>
                <td><select name="annot">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                    </select>
                    <input type="text" name="sname" placeholder="Enter your name">
                    <?php
                echo"$nameError";
                ?>
                </td>
              
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
                    <!-- <?php
                echo"<br>.$genderError";
                ?> -->
            </tr>

            <tr>
                <td>
                    Email ID
                </td>
                <td>
                    <input type="email" name="mail">
                    <?php
                echo"$emailError";
                ?>
                </td>
                
            </tr>

            <tr>
                <td>
                    Mobile No.
                </td>
                <td>
                    <input type="number" name="number">
                    <?php
                echo"$numberError";
                ?>
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
                <td> <input type="submit" name="submit"></td>
            </tr>

    </table>

    </form>
   

</body>

</html>