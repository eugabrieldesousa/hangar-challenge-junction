<?php
require_once './conexao.php';

$sql = "SELECT user_name, user_address, user_city, user_country, order_date, order_total FROM user INNER JOIN orders ON (user.user_id = orders.order_user_id)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $counter = 0;

    while ($row = $result->fetch_assoc()) {
        $class = $counter % 2 == 0 ? 'linha-branca' : 'linha-cinza';

        echo "<tr class='table-row $class'>";
        echo "<td>" . $row["user_name"] . "</td>";
        echo "<td>" . $row["user_address"] . "</td>";
        echo "<td>" . $row["user_city"] . "</td>";
        echo "<td>" . $row["user_country"] . "</td>";
        echo "<td>" . $row["order_date"] . "</td>";
        echo "<td> R$ " . $row["order_total"] . "</td>";
        echo "</tr>";
        $counter++;
    }
} else {
    echo "<tr><td colspan='6'>Nenhum resultado encontrado.</td></tr>";
}

$conn->close();
?>
