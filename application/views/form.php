<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
    echo form_open('form/formCheck');
    ?>
        Nama : <?form_input('nama');?>    
        <input type="text" name="nama" value="<?php echo set_value('nama'); ?>"><div><?php echo form_error('nama') ?></div>
        <br>
        NIM :
        <input type="text" name="nim" value="<?php echo set_value('nim'); ?>"><div style="bgcolor = red;"><?php echo form_error('nim') ?></div>
        <br>
        <input type="submit" name="submit" value="submit">
    <?php
    form_close();
    ?>
</body>
</html>
