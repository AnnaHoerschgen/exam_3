<?php

$rows = ordered($_SESSION['user_id']);

?>

<h1>Orders for <strong><?= htmlspecialchars($_SESSION['full_name']) ?></strong></h1>

<?php if (empty($rows)): ?>
    <p><strong>You have no orders.</strong></p>
<?php else: ?>
    <table>
        <tr>
            <th>Purchase Date</th>
            <th>Title</th>
        </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['purchase_date']) ?></td>
                <td><?= htmlspecialchars(record_get($row['record_id'])[0]['title']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>