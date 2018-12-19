<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>
        Formulier
    </title>
</head>

<body>
    <form name="reactie_formulier" action="Verwerk.php" method="POST">
        <table width="300" border="0">
            <tbody>
                <tr>
                    <td>Naam:</td>
                    <td><input type="text" name="naam"></td>
                </tr>

                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td>Reactie:</td>
                    <td><textarea name="reactie" cols="43" rows="8"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="verstuur"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>