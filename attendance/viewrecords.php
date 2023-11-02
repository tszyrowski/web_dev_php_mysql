<?php 
    $title = "Attendees";
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getAttendees();

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>email</th>
            <!-- Add more columns headers as required -->
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['attendee_id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['emailaddress']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php require_once './includes/footer.php'; ?>