<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            php cnhfybxrf
        </title>
    </head>
    <body>
        <?php
        echo 'hello world!';
        echo '<br>';
        echo date('d.m.y h:i');
        
        $a = 100; //integer число
        $b = 14.12; //float дробь
        $c = "строка"; //string строка 
        $d = array(1,2,3,4,5); //array
        
        $e = array(
            'name' => 'Abraham',
            'surname' => 'tugalev',
            'age' => 42,
            'byear' => 1689,
            'education' => array('school', 'collage', 'university')
        ); // массив асоциативный
        echo '<br>';
        echo $e['name'];
        echo '<br>';
        echo $e['education'][1]; // 'тексты' "текст с переменной"
        echo '<br>';
        echo $e['name'] . ' ' . $e['surname'];// КОНТАМИНА́ЦИЯ - обьединение нескольких переменных в одну строчку
        //if ($e['name'] or $e['surname']){
            
            for ($i=1; $i<=3; $i++)// повторит код заданно е количество раз
            {
                echo 'what shal we do with the drunken sailor?<br>';
            }
                echo 'early in the morning!<br>';
            
                $z = 10;
                while ($z <= 100) { // выполняется пока условие верно
                    echo 'tect' . $z . '</br>';
                    $z++;   
                }
                
                $names = array(
                    'walley',
                    'jonny',
                    'wiliam',
                    'abraham'
                );
                
                foreach ($names as $value) { // обработать все данные в массиве
                    echo $value . '</br>';
                }
                
        $connection = mysqli_connect('127.0.0.1', 'hohohoblog', 'blohoho', 'hohohoblog');
        
        if ($connection == false){
            echo 'не удалось подключится к базе данных!</br>';
            echo mysqli_connect_error();
            die();
        } 
        
        $result = mysqli_query($connection, "SELECT * FROM `articles_categories`");

        ?>
        <ul>
            <?php
                while (($cat = mysqli_fetch_assoc($result))) {
                    echo '<li>' . $cat['title'] . '</li>';
                }
            ?>
        </ul>

        <?php
        
        mysqli_close($connection);
        ?>
        <?php       
        echo date('Y-m-d H:i:s');
        echo '</br>';
        echo time(); // 1970-01-01
        echo '</br>';
        $start_date = '2016-12-10 14:00:00';
        $start_date_timestamp = strtotime($start_date);
        echo $start_date_timestamp; 
        $diff = time() - $start_date_timestamp;
        echo '</br>' . round((($diff / 60) /60) /24) . 'дней!'; 

         ?>

<table border="">
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
</tr>
</table>

<ol>
    <li>1</li><br>
    <li>2</li>
    <li>3</li>
</ol>
    </body>    
</html>
