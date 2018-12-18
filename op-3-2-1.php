<?php
$getal1 = 1; $getal2 = 2;

if($getal1 == $getal2)
{
    echo "Waar";
}
else
{echo "Onwaar";}

?>
<html>

<head>
    <style>
        html
        {
            margin:0;
            padding:0;
        }
        table
        {
            border-collapse: separate;
            border: 4px solid black;
        }
        table thead td
        {
            border-collapse: collapse;
            border: 2px solid black;
        }
        td
        {
            border-collapse: separate;
            border: 1px solid black;
        }
        table tr:nth-child(even)
        {
            background-color: lightgrey;
        }
        table tr:nth-child(odd)
        {
            background-color: white;
        }
    </style>
</head>

<body>


    <table>
        <thead>
            <td>
                $getal1
            </td>
            <td>
                Operator
            </td>
            <td>
                $getal2
            </td>
            <td>
                uitkomst
            </td>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td>
                    ==
                </td>
                <td>
                    2
                </td>
                <td>
                    Onwaar
                </td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td>
                    ==
                </td>
                <td>
                    3
                </td>
                <td>
                    Waar
                </td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    <=
                </td>
                <td>
                    1
                </td>
                <td>
                    Waar
                </td>
            </tr>
            <tr>
                <td>
                    5
                </td>
                <td>
                    >
                </td>
                <td>
                    6
                </td>
                <td>
                    Onwaar
                </td>
            </tr>
            <tr>
                <td>
                    5
                </td>
                <td>
                    !=
                </td>
                <td>
                    6
                </td>
                <td>
                    Waar
                </td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td>
                    !=
                </td>
                <td>
                    3
                </td>
                <td>
                    Onwaar
                </td>
            </tr>
        </tbody>

    </table>

</body>

</html>