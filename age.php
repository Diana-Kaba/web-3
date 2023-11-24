<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студенти</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Студенти</h1>
    <h2>Завдання 2.3 Вік</h2>
    <table>
        <thead>
            <tr>
                <th>Ім'я та прізвище</th>
                <th>Дата народження</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once("students-age.php");
                foreach ($students as $name => $date) {
                    $months = ['Січня', 'Лютого', 'Березня', 'Квітня', 'Травня', 'Червня', 'Липня', 'Серпня', 'Вересня', 'Жовтня', 'Листопада', 'Грудня'];
                    $hb = getdate(strtotime($date));
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>{$hb['mday']} {$months[$hb['mon']-1]} {$hb['year']} року</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>