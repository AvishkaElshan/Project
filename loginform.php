<?php

$error = "";

if (isset($_POST["submit"])) {
    require_once "db_connect.php";  // Ensure this file has proper database connection setup

    $emp_id = $_POST["id"];  // Using the emp_id as string to match the database schema
    $password = $_POST["password"];
    $user_type = 'admin';  // Assuming user type is fixed as 'admin' for this scenario

    // Prepare SQL statement to prevent SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE emp_id = ?");
    if ($stmt) {
        $stmt->bind_param("s", $emp_id);  // 's' denotes 'string'
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user["password"])) {  // Use password_verify to check hashed password
                session_start();
                $_SESSION["user_id"] = $user["emp_id"];
                $_SESSION["user_type"] = $user["user_type"];
                $_SESSION["company_name"] = $user["company_name"];

                if ($user["user_type"] == $user_type) {
                    if ($user["company_name"] == "brandix") {
                        header("Location: admin_brandix.php");  // Redirect to Brandix admin page
                    } elseif ($user["company_name"] == "mas") {
                        header("Location: admin_mas.php");  // Redirect to MAS admin page
                    }elseif ($user["company_name"] == "noyonlanka") {
                        header("Location: admin_noyon.php");  // Redirect to MAS admin page
                    }elseif ($user["company_name"] == "lineaintimo") {
                        header("Location: admin_intimo.php");  // Redirect to MAS admin page
                    }  elseif ($user["company_name"] == "silueta") {
                        header("Location: admin_silueta.php");  // Redirect to MAS admin page
                    } elseif ($user["company_name"] == "unichela") {
                        header("Location: admin_uni.php");  // Redirect to MAS admin page
                    }elseif ($user["company_name"] == "rainwear") {
                        header("Location: admin_rain.php");  // Redirect to MAS admin page
                    }  elseif ($user["company_name"] == "northsails") {
                        header("Location: admin_north.php");  // Redirect to MAS admin page
                    } elseif ($user["company_name"] == "oceanlanka") {
                        header("Location: admin_ocian.php");  // Redirect to MAS admin page
                    }elseif ($user["company_name"] == "stretchline") {
                        header("Location: admin_stretch.php");  // Redirect to MAS admin page
                    } else {
                        $error = "Unknown company.";
                    }
                    exit();
                } else {
                    $error = "Incorrect user type selected.";
                }
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "User not found.";
        }

        $stmt->close();
    } else {
        $error = "Failed to prepare the SQL statement.";
    }
    $conn->close();
} else {
    $error = "Invalid request.";
}

if (!empty($error)) {
    echo "<p style='color: red;'>$error</p>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Result</title>
    <style>
.button {
  background-color: #0000FF	;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.alert{
    font-weight: bold;
    font-size: 30px;
}
</style>
</head>
<body>
    <br>
    <br>

    <?php if (!empty($error)): ?>
        <div class='alert'><?php echo $error; ?></div>
    <?php endif; ?>
    <a href="login.php" class="button">Go Back</a>
</body>
</html>