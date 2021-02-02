<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Учебный проект</title>
    <link rel="stylesheet" href="/css/main_style.css">
</head>
<body>
    <header>
        <h1>Учебный проект</h1>
        <nav>
            <ul>
                <li><a class="a-box disabled" href="#">Урок 1</a></li>
                <li><a class="a-box" href="lesson-2.php">Урок 2</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Таблица умножения</h2>
        <table>
            <?php

            //применил такой подход чтобы не проверять каждый раз после выхода из второго for переход на
            //следующую строку в таблице. В результате принесено в жертву два вызова функции.
            function printRow()
            {
                //строка таблицы начинается с множителя
                static $beginRow_multiplier1 = 1;

                //строка таблицы заканчивается множителем
                static $endRow_multiplier1 = 6;

                echo "<tr>\n";

                //$multiplier1 - множимое
                for ($multiplier1 = $beginRow_multiplier1; $multiplier1 < $endRow_multiplier1; ++$multiplier1) {
                    echo "<td>";

                    //$multiplier2 - множитель
                    for ($multiplier2 = 1; $multiplier2 < 11; ++$multiplier2) {
                        echo "{$multiplier1} x {$multiplier2} = " . ($multiplier1 * $multiplier2) . "<br />";
                    }

                    echo "</td>\n";
                }

                echo "</tr>\n";

                $beginRow_multiplier1 = 6;
                $endRow_multiplier1 = 11;
            }

            printRow(); //распечатать строку с множимым от 1 до 5
            printRow(); //распечатать строку с множимым от 6 до 10
            ?>
        </table>
    </main>
    <footer>
        mailman&reg; Все права защищены
    </footer>
</body>
</html>
