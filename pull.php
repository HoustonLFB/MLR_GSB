<?php `git pull`;
if ( $_POST['payload'] ) {
    shell_exec('cd /var/www/html/gsb/ && git reset –hard HEAD && git pull');
    }
?>hi