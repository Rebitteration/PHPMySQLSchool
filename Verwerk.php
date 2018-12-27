<html>

<head>
    <title>Formulier verwerken</title>
</head>

<body>
    Je vulde in:
    <table>
        <?php
            if(isset($_POST['naam']) && $_POST['naam'] != '')
            {
                $naam = filter_var($_POST['naam'], FILTER_SANITIZE_STRING);
                echo "<tr><td>Naam: </td><td>" . $naam . "</td></tr>\n";
            }else
            {
                echo "<tr><td>Naam: </td><td><em>Vul een naam in!</em></td></tr>\n";
            }
            
            if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) 
            {
                echo "<tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>\n";
            }else
            {
                echo "<tr><td>Email: </td><td><em>Vul een e-mail adres in!</em></td></tr>\n";
            }
            
            
            if(isset($_POST['reactie']) && $_POST['reactie'] != '')
            {
                echo "<tr><td>Reactie: </td><td>" . $_POST['reactie'] . "</td></tr>\n";
            }else
            {
                echo "<tr><td>Reactie: </td><td><em>Vul een reactie in!</em></td></tr>\n";
            }
            

        ?>
    </table>
</body>

</html>