
<?php
$array = [1, 2, 2, 3, 4, 4, 5];

$arraySemDuplicados = array_unique($array);
$arraySemDuplicados = array_values($arraySemDuplicados);

echo "Array sem duplicados: ";
print_r($arraySemDuplicados);
?>
```


//Array sem duplicados: [1, 2, 3, 4, 5]
Percorra um array de notas e informe se o aluno foi aprovado ou reprovado.

<?php
$notas = [5, 7, 8.5, 4, 6, 9];

foreach ($notas as $nota) {
    if ($nota > 6) {
        echo "Nota: $nota - Aprovado\n";
    } else {
        echo "Nota: $nota - Reprovado\n";
    }
}
?>

<?php
$conta = [
    "titular" => "Maria Silva",
    "saldo" => 1500.75
];

echo "Titular: " . $conta["titular"] . "\n";
echo "Saldo: R$ " . number_format($conta["saldo"], 2, ',', '.');
?>

<?php
$familiares = ["João", "Ana", "Carlos"];

$familiares[] = "Mariana";
$familiares[] = "Pedro";

echo "Lista de familiares:\n";
foreach ($familiares as $nome) {
    echo "- $nome\n";
}
?>
```
