<?php
require_once './conexao.php';

$filter_country = isset($_GET['country']) ? $_GET['country'] : '';

$sql = "SELECT user_country, SUM(order_total) AS total_sales FROM user INNER JOIN orders ON (user.user_id = orders.order_user_id)";

if (!empty($filter_country)) {
    $sql .= " WHERE user_country = '$filter_country'";
}

$sql .= " GROUP BY user_country";

$result = $conn->query($sql);

if (!$result) {
    echo "Erro na consulta: " . $conn->error;
} else {
    $counter = 0;

    if ($result->num_rows > 0) {
        echo "<thead class='thead-dark'><tr><th>País</th><th>Total de Vendas</th></tr></thead>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            $class = $counter % 2 == 0 ? 'linha-branca' : 'linha-cinza';

            echo "<tr class='table-row $class'>";
            echo "<td>" . $row["user_country"] . "</td>";
            echo "<td> R$ " . $row["total_sales"] . "</td>";
            echo "</tr>";
            $counter++;
        }

        echo "</tbody>";
    } else {
        echo "<tr><td colspan='2'>Nenhum resultado encontrado.</td></tr>";
    }
}
?>