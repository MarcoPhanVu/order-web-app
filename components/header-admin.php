<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu admin text-right">
                <ul>
                    <li>
                        <a href="../admin/manage-admin.php">Edit Admins</a>
                    </li>
                    <li>
                        <a href="../admin/manage-category.php">Edit Category</a>
                    </li>
                    <li>
                        <a href="../admin/manage-.php">Edit Foods</a>
                    </li>
                    <li>
                        <a href="../admin/manage-.php">Edit Orders</a>
                    </li>
                    <li>
                        <a href="../index.php">
                            <button class="change-authority">User Mode</button>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <?php include "../admin/connection.php"; ?>