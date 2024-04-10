<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            max-width: 600px;
            width: 100%;
            padding: 20px;
        }

        h1 {
            color: black; 
        }

        h2 {
            color: gray; 
        }

        p {
            color: black; 
        }

        ul {
            color: black; 
        }

        li {
            color: black; 
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Sequência de Fibonacci</h1>

        <form method="post">
            <label for="num">Número de Termos:</label>
            <input type="number" id="num" name="num" min="1" required>
            <button type="submit">Gerar Sequência</button>
        </form>

        <?php
        function fibonacci($n) {
            $fib = [];
            $fib[0] = 0;
            $fib[1] = 1;

            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }

            return $fib;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];

            if ($num > 0) {
                $fibonacci_sequence = fibonacci($num);
                echo "<h2>Sequência de Fibonacci com $num termos:</h2>";
                echo "<ul>";
                foreach ($fibonacci_sequence as $term) {
                    echo "<li>$term</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Por favor, insira um número válido de termos.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
