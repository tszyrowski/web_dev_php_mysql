<?php
$title = "Attendees";
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

$results = $crud->getAttendees();

?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>email</th>
            <th>specialty</th>
            <th>Actions</th>
            <!-- Add more columns headers as required -->
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['attendee_id']; ?></td>
                <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                <td><?php echo $row['dateofbirth']; ?></td>
                <td><?php echo $row['emailaddress']; ?></td>
                <td><?php echo $row['specialty_name']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $row['attendee_id']; ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $row['attendee_id']; ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $row['attendee_id']; ?>" class="btn btn-danger">Delete</a>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php require_once './includes/footer.php'; ?>