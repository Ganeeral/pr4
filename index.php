<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов и кружков</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <main class="main-content">
        <section class="task num1">
            <h2>Задание 1</h2>

            <div class="block">
                <?php
                $students = ["Иванов", "Федоров", "Кузнецов", "Васильев",  "Петров", "Сидоров",  "Попов", "Смирнов", "Морозов", "Михайлов"];
                echo "<p>Список студентов:</p> <p class='highlight'>" . implode(", ", $students) . "</p>";
                ?>
            </div>

            <div class="block">
                <?php
                $student_count = count($students);
                echo "<p>Количество студентов: <span class='highlight'>$student_count</span></p>";
                ?>
            </div>

            <div class="block">
                <?php
                if (in_array("Сидоров", $students)) {
                    echo "<p class='highlight'>Студент 'Сидоров' присутствует в списке.</p>";
                } else {
                    echo "<p class='highlight'>Студента 'Сидоров' нет в списке.</p>";
                }
                ?>
            </div>

            <div class="block">
                <?php
                $expelled = array_pop($students);
                echo "<p>Отчисленный студент: <span class='highlight'>$expelled</span></p>";
                ?>
            </div>

            <div class="block">
                <?php
                echo "<p>Новый список студентов: <p class='highlight'>" . implode(", ", $students) . "</p>";
                ?>
            </div>
        </section>

        <section class="task num2">
            <h2>Задание 2</h2>

            <?php
            $clubs = [
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванова",
                "Литературный" => "Петров",
                "Биологический" => "Антонова"
            ];

            asort($clubs);

            echo "<p>Список кружков и фамилий:</p>";
            echo "<ul class='highlight'>";
            foreach ($clubs as $club => $surname) {
                echo "<li>$club - $surname</li>";
            }
            echo "</ul>";
            ?>
        </section>

        <section class="task num3">
            <h2>Задание 3</h2>

            <?php
            $student = [
                'name' => 'Роман',
                'surname' => 'Пестов',
                'group' => '425ВЕБ',
                'hobbies' => ['мотокросс', 'next js разработка'],
                'socials' => ['Tg' => '@Ganeeral']
            ];
            ?>

            <div class="block">
                <h3>Мои данные</h3>
                <p>Мое имя: <span class='highlight'><?php echo $student['name'] ?></span></p>
                <p>Моя фамилия: <span class='highlight'><?php echo $student['surname'] ?></span></p>
                <p>Моя группа: <span class='highlight'><?php echo $student['group'] ?></span></p>
                <p>Мои хобби: <span class='highlight'><?php echo implode("<br>", $student['hobbies']) ?></span></p>
                <p>Мои соцсети: <span class='highlight'><?php echo implode("<br>", $student['socials']) ?></span></p>
            </div>
        </section>
    </main>
</body>

</html>
