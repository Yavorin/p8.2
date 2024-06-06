<?php
// Перевіряємо, чи введені значення є цілими числами
if (isset($_GET['a']) && isset($_GET['b'])) {

// Отримуємо значення змінних $a і $b з адресного рядка
    $a = (int) $_GET['a'];
    $b = (int) $_GET['b'];
    // Виконуємо математичні операції
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $a / $b;
    // Виводимо результати
    echo "Сума: $sum<br>";
    echo "Добуток: $product<br>";
    echo "Різниця: $difference<br>";
    echo "Частка: $quotient<br>";
} else {
    echo "Будь ласка, введіть цілі числа в адресний рядок браузера.";
}
?>