<?php
// Check if the request is an AJAX request
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["waypoints"])) {
    // Extract the waypoints array from the POST data
    $waypoints = json_decode($_POST["waypoints"], true);

    // Initialize the SQL update statement
    $updateSql = "UPDATE your_table_name SET";

    // Initialize an array to store the field-value pairs
    $fieldValuePairs = array();

    // Loop through each waypoint and add it to the update statement if it's not empty
    for ($i = 0; $i < 49; $i++) {
        $fieldName = "waypoint_" . $i;
        $waypoint = $waypoints[$i] ?? '';

        // Add the field to the field-value pairs array
        $fieldValuePairs[] = "$fieldName = :$fieldName";
    }

    // Combine the field-value pairs into the update statement
    $updateSql .= " " . implode(", ", $fieldValuePairs);

    // Prepare the SQL statement
    $stmt = $pdo->prepare($updateSql);

    // Bind parameter values for waypoints
    for ($i = 0; $i < 49; $i++) {
        $fieldName = "waypoint_" . $i;
        $waypoint = $waypoints[$i] ?? '';

        // Bind the parameter value
        $stmt->bindParam(":$fieldName", $waypoint);
    }

    // Execute the update statement
    if ($stmt->execute()) {
        // Update successful
        echo json_encode(array("success" => true));
    } else {
        // Update failed
        echo json_encode(array("success" => false));
    }
} else {
    // Handle invalid request
    echo json_encode(array("error" => "Invalid request"));
}
?>
