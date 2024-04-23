<?php
require_once './conexao.php';

$sql = "SELECT DATE(order_date) AS dia, AVG(order_total) AS media FROM orders GROUP BY DATE(order_date)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $media = $row["media"];
        $color_class = '';
        if ($media < 3000) {
            $color_class = 'table-danger';
        } elseif ($media > 3000) {
            $color_class = 'table-success';
        } else {
            $color_class = 'table-secondary';
        }
        echo "<tr class='$color_class'>";
        echo "<td>" . $row["dia"] . "</td>";
        echo "<td>" . number_format($row["media"], 2) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>Nenhum dado encontrado</td></tr>";
}

$conn->close();
?>
