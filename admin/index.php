<?php
session_start();

if (empty($_SESSION['username'])) {
    header("location: ../index.php");
    exit; // Explicitly terminate script execution
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Praktikum Web 2</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <style>
        body {
            margin-bottom: 6em;
        }

        * {
            font-size: 14px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #1fb359;
            padding: 10px 0;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1.5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h3 class="mt-4 mb-4">Aplikasi Data Mahasiswa</h3>

        <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
                <?php include 'nav.php'; ?>
            </div>
            <div class="col-md-9 col-sm-12">
                <?php include '../connection.php'; ?>

                <?php
                error_reporting(0); // Not recommended for production (use proper error handling)
                
                $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING); // Sanitize user input
                
                switch ($page) {
                    default:
                        include "dashboard.php";
                        break;

                    case 'dashboard';
                        include "dashboard.php";
                        break;

                    //mahasiswa
                
                    case 'mahasiswa-show';
                        include "../mahasiswa/mahasiswa_show.php";
                        break;

                    case 'mahasiswa-add';
                        include "../mahasiswa/mahasiswa_add.php";
                        break;

                    case 'mahasiswa-edit';
                        include "../mahasiswa/mahasiswa_edit.php";
                        break;

                    case 'mahasiswa-delete';
                        include "../mahasiswa/mahasiswa_delete.php";
                        break;

                    case 'mahasiswa-update';
                        include "../mahasiswa/mahasiswa_update.php";
                        break;

                    //matakuliah
                
                    case 'matakuliah-show';
                        include "../matakuliah/matakuliah_show.php";
                        break;

                    case 'matakuliah-add';
                        include "../matakuliah/matakuliah_add.php";
                        break;

                    case 'matakuliah-edit';
                        include "../matakuliah/matakuliah_edit.php";
                        break;

                    case 'matakuliah-delete';
                        include "../matakuliah/matakuliah_delete.php";
                        break;

                    case 'matakuliah-update';
                        include "../matakuliah/matakuliah_update.php";
                        break;

                    case 'user-add';
                        include "../user/user_add.php";
                        break;

                    case 'user-show';
                        include "../user/user_show.php";
                        break;

                    case 'user-edit';
                        include "../user/user_edit.php";
                        break;

                    case 'user-update';
                        include "../user/user_update.php";
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <span>&copy; <?php echo date('Y'); ?> - FTI UNISKA</span>
        </div>
    </footer>
</body>

</html>