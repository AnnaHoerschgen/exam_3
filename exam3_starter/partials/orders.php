<?php

$rows = ordered(1);

?>
<h1>Orders for <strong><?= htmlspecialchars($_SESSION['full_name']) ?></strong></h1>
<table>
    <tr>
        <th>Purchase Date</th>
        <th>Title</th>
    </tr>
</table>