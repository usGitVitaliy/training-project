<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Учебный проект</title>
    <link rel="stylesheet" href="/css/main_style.css" />
    <style>
        nav {
            width: 105px;
        }

        a {
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Учебный проект</h1>
        <nav>
            <a class="a-box" href="less-3-request.html">Назад</a>
        </nav>
    </header>
    <main>
        <h2>Обработка запроса</h2>
        <div>
            Серрвер обработал запрос:<br /><br />
            <?php
            /*
             *Способ 1
             * htmlspecialchars - предодвращаем внедрение вредоносного кода,
             * введенного пользователем
            */

            //echo htmlspecialchars(strrev($_POST['str_user_input']));


            /*
             * способ 1 не подходит для решения задачи:
             * При вводе русских букв скрипт не работает -
             * - проблема с кодировкой символов.
             *
             * Поэтому я работал с введенными данными
             * как со строкой, а не как с массивом байт
             *
             * Результат:
             * Ввод: "Привет NIX Education" - реверсируется корректно.
            */

            /*
            $str_user = $_POST['str_user_input'];
            $length_str = iconv_strlen($str_user);

            for ($i = 1; $i < $length_str + 1; ++$i) {
                echo iconv_substr($str_user, -1 * $i, 1);
            }
            */

            //после рефакторинга
            $str_user = $_POST['str_user_input'];
            $stopOutput = iconv_strlen($str_user);
            ++$stopOutput;

            $resultOutput = '';

            for ($i = $stopOutput; $i > -1; --$i) {
                $resultOutput .= iconv_substr($str_user, $i, 1);
            }

            echo htmlspecialchars($resultOutput);
            ?>
        </div>
    </main>
    <footer>
        mailman&reg; Все права защищены
    </footer>
</body>
</html>
