<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table de Multiplication</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Table de Multiplication de 1 à 12</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <th><?php echo $i; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <?php for ($j = 1; $j <= 12; $j++): ?>
                        <td><?php echo $i * $j; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>