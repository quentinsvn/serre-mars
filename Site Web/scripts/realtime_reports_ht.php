<?php

require_once('config.php');

$sqlQuery = "SELECT * FROM humidity_temp ORDER BY date DESC LIMIT 7";

$result = $bdd->query($sqlQuery);

while ($th = $result->fetch()) {
?>
    <tr>
        <th scope="row"><?php echo $th['id']; ?></th>
        <td><?php
            $phpdate = strtotime($th['date']);
            $th['date'] = date('d/m/Y H:m:s', $phpdate);
            $thdate = $th['date'];
            echo $thdate;
            ?></td>
        <td><?php echo $th['temp']; ?></td>
        <td><?php echo $th['humidity']; ?></td>
    </tr>
<?php
}
?>