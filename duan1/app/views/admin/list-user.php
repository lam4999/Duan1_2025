<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
        <tr border="1"> 
            <th>ID</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <?foreach($dataUsers as $value): ?>
            <tr>
                <td><?=$value->id; ?></td>
                <td><?=$value->ten; ?></td>
            </tr>
    </tbody>
    </table>
</body>
</html>
>