

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>

    <link href="cssCalc.css" rel="stylesheet">
</head>
<body>
    <div class="back"></div>
    <div class="main">
        <form action="phpCalc.php" method="POST">
              <input class="textviev">
        </form>
        <table>
            <tr>

                <td><input class="button" type="button" value="1"></td>
                <td><input class="button" type="button" value="2"></td>
                <td><input class="button" type="button" value="3"></td>
                <td><input class="button" type="button" value="+"></td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="4"></td>
                <td><input class="button" type="button" value="5"></td>
                <td><input class="button" type="button" value="6"></td>
                <td><input class="button" type="button" value="-"></td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="7"></td>
                <td><input class="button" type="button" value="8"></td>
                <td><input class="button" type="button" value="9"></td>
                <td><input class="button" type="button" value="*"></td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="С"></td>
                <td><input class="button" type="button" value="."></td>
                <td><input class="button" type="button" value="0"></td>

                <td><input class="button" type="button" value="/"></td>

            </tr>

        </table>
        <table>
        <tr>
            <td><input class="button" style="width: 218px" type="button" value="="></td>
        </tr>
        </table>
    </div>

</body>
</html>