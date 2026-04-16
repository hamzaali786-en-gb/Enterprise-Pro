<?php
session_start();
require('../../../../db/db.php');

$output = '';

if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $records_per_page;

$query = mysqli_query($db, "SELECT * FROM users ORDER BY id DESC LIMIT $start_from, $records_per_page");

$output .= '
<div class="tab-pane fade table-responsive show active" id="Deposit">
    <table id="TradeHistory" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>UID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>';
while ($row = mysqli_fetch_assoc($query)) {

    $output .= '
            <tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['uid'] . '</td>
                <td>' . $row['fname'] . '</td>
                <td>' . $row['lname'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['role'] . '</td>
                <td>' . buttons("href='javascript:void(0)' id='$row[uid]'", "DELETE", 'fa fa-edit', "")
        . buttons("href='javascript:void(0)' id='$row[uid]'", "DELETE", 'fa fa-trash-alt text-danger', "") . '</td>';


    $output .= '</tr>';
}
$output .= '
        </tbody>
    </table>
</div>';

$navigation = navigation('users', "", $page, $records_per_page);
$output .= $navigation;

echo $output;
