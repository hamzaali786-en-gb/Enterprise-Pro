<?php
$host = "localhost";
$user = "root";    // change if needed
$password = "";    // change if needed
$database   = "enterprise";

$db = mysqli_connect($host, $user, $password, $database);

if ($db->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}



//A FUNCTION FOR TABLE ACTION BUTTONS WITH CUSTOM STYLE
function buttons($data, $class, $icon, $icon_type)
{
    return '
        <div class="btn-group" style="padding-right:8px;">
            <a ' . $data . ' class="btn' . $class . '">' . ($icon_type == "" ? '<i class="' . $icon . '">' : $icon) . '</i></a>
        </div>';
}


//DYNAMIC PAGINATION AND NAVIGATION CODE
function navigation($table, $where, $page, $records_per_page)
{
    global $db;
    $output = "";

    $pagination_query = mysqli_query($db, "SELECT * FROM $table $where ORDER BY id DESC");

    $num_rows = mysqli_num_rows($pagination_query);
    $total_pages = ceil($num_rows / $records_per_page);
    
    $output .= '
    <div class="border-top mt-5 pt-3">
    <div class="card mb-3">
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0">';
    if ($page > 1) {
        $output .= '<li class="page-item"><a class="page-link page_navigation" href="javascript:void(0)" id="' . ($page - 1) . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    } else {
        $output .= '<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        $output .= '<li class="page-item"><a class="page-link page_navigation" href="javascript:void(0)" id="' . $i . '">' . $i . '</a></li>';
    }

    if ($page < $total_pages) {
        $output .= '<li class="page-item"><a class="page-link page_navigation" href="javascript:void(0)" id="' . ($page + 1) . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
    } else {
        $output .= '<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
    }
    $output .= '
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>';

    return $output;
}


//FUNCTION TO FILTER AND REMOVE ANY SPECIAL CHARACTERS FROM INPUT FIELDS
function e($string)
{
    global $db;
    $escaped = mysqli_real_escape_string($db, trim($string));

    $string = str_replace(' ', '-', $escaped); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9@.\+-]/', '', $string); // Removes special chars.
}

//HOW MANY RECORDS SHOULD APPEAR PER PAGE --- PAGINATION
$records_per_page = 1;
