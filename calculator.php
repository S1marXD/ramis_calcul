<!DOCTYPE html>
<html>
<head>
    <title>Простой калькулятор</title>
</head>
<body>
    <h1>Простой калькулятор</h1>
    <form method="post" action="calculator.php">
        <input type="text" name="num1" placeholder="Введите число 1">
        <input type="text" name="num2" placeholder="Введите число 2">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Посчитать">
    </form>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Ошибка: деление на ноль!";
                }
                break;
            default:
                $result = "Недопустимая операция";
                break;
        }

        echo "Результат: $num1 $operator $num2 = $result";
    }
    ?>

</body>
</html>
