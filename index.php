<?php
$rad = '<p>Detta är en rad</p>';
$rad_byte = '<p>En ny
rad</p>';
$text = 'Hello, World!';
$url = 'edvard.io';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Övning - inbyggda funktioner i PHP</title>
    </head>
    <body>
        <p><?php echo date('d/m/Y')?></p>
        <!-- Visar med HTML tags -->
        <p><?php echo htmlspecialchars($rad)?></p>
        <!-- Visar inte HTML tags -->
        <p><?php echo strip_tags($rad)?></p>
        <p><?php echo str_replace('rad', 'text', $rad)?></p>
        <p><?php echo strtoupper($rad)?></p>
        <!-- Tar bort radbytet -->
        <p><?php echo nl2br($rad)?></p>
        <!-- MD5 Hash för en string -->
        <!-- Andra linkande är b.la. sha1() och hash() -->
        <p><?php echo md5('text')?></p>
        <p>
            <?php
                if (strlen($text) > 2) {
                    echo 'Texten har över 2 tecken';
                }
            ?>
        </p>
        <?php
            if (strstr($url, 'https://') == '') {
                $url = 'https://' . $url;
            }
        ?>
        <a href="<?php echo $url?>"><?php echo $url?></a>
    </body>
</html>