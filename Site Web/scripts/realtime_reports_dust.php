<?php

require_once('config.php');

$sqlQuery = "SELECT * FROM dust ORDER BY date DESC LIMIT 7";

$result = $bdd->query($sqlQuery);

while ($dust = $result->fetch()) {
?>
    <tr>
        <th scope="row"><?php echo $dust['id']; ?></th>
        <td><?php
            $phpdate = strtotime($dust['date']);
            $dust['date'] = date('d/m/Y H:m:s', $phpdate);
            $dust_date = $dust['date'];
            echo $dust_date;
            ?></td>
        <td><?php echo $dust['lpo_time']; ?></td>
        <td><?php echo $dust['lpo_percentage']; ?></td>
        <td><?php echo $dust['pcs']; ?></td>
    </tr>
<?php
}
?>