<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Бєлєв Мирослав Сергійович</h1>
    </header>
    <section class="photo-placeholder">
        <div class="question-mark">?</div>
    </section>
    <section class="info">
        <p>Вік: 25 років</p>
        <p>Місце народження: Київ</p>
        <p>Телефон: +380123456789</p>
    </section>
    
    <section class="students">
        <h2>Студенти групи</h2>
        <?php
        // Багатовимірний масив студентів
        $students = [
            ["прізвище" => "Іваненко", "ім'я" => "Іван", "вік" => 22, "місце" => "Львів", "телефон" => "+380501234567"],
            ["прізвище" => "Петренко", "ім'я" => "Петро", "вік" => 23, "місце" => "Одеса", "телефон" => "+380971234567"],
            ["прізвище" => "Сидоренко", "ім'я" => "Сидір", "вік" => 24, "місце" => "Харків", "телефон" => "+380631234567"],
            ["прізвище" => "Коваленко", "ім'я" => "Олена", "вік" => 21, "місце" => "Дніпро", "телефон" => "+380931234567"],
            ["прізвище" => "Гавриленко", "ім'я" => "Ганна", "вік" => 25, "місце" => "Полтава", "телефон" => "+380991234567"],
            ["прізвище" => "Мельник", "ім'я" => "Андрій", "вік" => 22, "місце" => "Черкаси", "телефон" => "+380671234567"]
        ];
        ?>
        <table>
            <tr>
                <th>Прізвище</th>
                <th>Ім'я</th>
                <th>Вік</th>
                <th>Місце народження</th>
                <th>Телефон</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student["прізвище"]; ?></td>
                    <td><?php echo $student["ім'я"]; ?></td>
                    <td><?php echo $student["вік"]; ?></td>
                    <td><?php echo $student["місце"]; ?></td>
                    <td><?php echo $student["телефон"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>
</html>
