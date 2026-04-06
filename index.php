<?php
// ===== DADOS =====

// Exercício 1
$array = [1, 2, 2, 3, 4, 4, 5];
$arraySemDuplicados = array_values(array_unique($array));

// Exercício 2
$notas = [5, 7, 8.5, 4, 6, 9];

// Exercício 3
$conta = [
    "titular" => "Maria Silva",
    "saldo" => 1500.75
];

// Exercício 4
$familiares = ["João", "Ana", "Carlos"];
array_push($familiares, "Mariana", "Pedro");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PHP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo personalizado -->
    <style>
        body {
            background: #eef1f5;
        }
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        .badge-aprovado {
            background-color: #198754;
        }
        .badge-reprovado {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand mb-0 h1">💻 Sistema de Exercícios PHP</span>
</nav>

<div class="container mt-4">

    <div class="row g-4">

        <!-- EXERCÍCIO 1 -->
        <div class="col-md-6">
            <div class="card p-3">
                <h5>📊 Array sem duplicados</h5>
                <p class="text-muted">Remoção de valores repetidos</p>
                <strong>
                    <?= implode(", ", $arraySemDuplicados); ?>
                </strong>
            </div>
        </div>

        <!-- EXERCÍCIO 2 -->
        <div class="col-md-6">
            <div class="card p-3">
                <h5>🎓 Notas dos alunos</h5>
                <ul class="list-group">
                    <?php foreach ($notas as $nota): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Nota: <?= $nota ?>
                            <?php if ($nota > 6): ?>
                                <span class="badge badge-aprovado text-white">Aprovado</span>
                            <?php else: ?>
                                <span class="badge badge-reprovado text-white">Reprovado</span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- EXERCÍCIO 3 -->
        <div class="col-md-6">
            <div class="card p-3">
                <h5>🏦 Conta Bancária</h5>
                <p><strong>Titular:</strong> <?= $conta["titular"] ?></p>
                <p>
                    <strong>Saldo:</strong> 
                    <span class="text-success fs-5">
                        R$ <?= number_format($conta["saldo"], 2, ',', '.') ?>
                    </span>
                </p>
            </div>
        </div>

        <!-- EXERCÍCIO 4 -->
        <div class="col-md-6">
            <div class="card p-3">
                <h5>👨‍👩‍👧 Familiares</h5>
                <ul class="list-group">
                    <?php foreach ($familiares as $nome): ?>
                        <li class="list-group-item"><?= $nome ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>

</div>

<!-- FOOTER -->
<footer class="text-center mt-5 mb-3 text-muted">
    <small>Desenvolvido em PHP • Projeto de estudos</small>
</footer>

</body>
</html>