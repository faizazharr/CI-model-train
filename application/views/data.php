
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" >
    <thead>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach($isi as $result): ?>
            <tr>
                <td>
                    <?php echo $result->id ?>
                </td>
                <td>
                    <?php echo $result->nama ?>
                </td>
                <td>
                    <?php echo $result->nim ?>
                </td>
            </tr>
        <?php endforeach; ?>
        
    </tbody>
    </table>
    
</body>
</html>
