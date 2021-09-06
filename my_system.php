<?php
echo $_SERVER['HTTP_USER_AGENT'];
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
    {
        echo 'Вы используете IE.<br />';
    }
else
    {
        echo 'Вы используете другой браузер.<br />';
    }
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MISE') !== FALSE)
{
    ?>
    <h3>Возможно strpos вернул не FALSE</h3>
    <p>Вы используете IE</p>
    <?php
}
else
{
    ?>
    <h3>Возможно strpos вернул FALSE</h3>
    <p>Вы используете другой браузер</p>
    <?php
}
?>