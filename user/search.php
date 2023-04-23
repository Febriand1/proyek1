<?php require "../config.php";?>
<!DOCTYP HTML>
<html>
    <head>
        <title>Search | MENDELEY PROTOTIPE</title>
        <style>
            #form{
                margin:0px auto;
            width:450px;
        }

            #Judul{
                font-size: 25px;
                font-weight: bold;
                padding: 20px 0px 20px 0px;
                text-align: center;
            }

            #form #q {
                padding: 10px;
                border: 1px solid #dddddd;
            }

            #result{
                font-size: 25px;
               padding-left: 30px 10px;
                text-align: left;
            }

            #card {
                width:500px;
                margin:0px auto;
            }

        </style>

<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

    </head>
    <body>
    <nav class="navbar navbar-light bg-primary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="../img/mendeley.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            MENDELEY PROTOTIPE</a>
            <p> ‏‏‎  ‏‏‎  ‏‏‎ ‏‏‎</p>
            <button class="btn btn-light" type="button"><a href="login.php" style= "color: black;">Logout</a></button>
        </div>
    </nav>

        <div id='wrapper'>
        <div id='form'>
            <div id= 'Judul'>
                MENDELEY PRORORIPE
            </div>
            <div id='form-input'>
                    <form method='get' action='search.php'>
                        <input type="text" id='q' name='q' style="width:100%" placeholder='Cari Artikel...'/>
                    </form>
                </div>
        </div>



            <div id='result'>
                <?php 
                $q =$_GET['q'];
                $query = "SELECT * FROM dokumen WHERE dokumen_judul LIKE '%".$q."%' limit 10";
                $query = "SELECT * FROM dokumen WHERE dokumen_tahun LIKE '%".$q."%' limit 10";
                $query = "SELECT * FROM dokumen WHERE dokumen_penulis LIKE '%".$q."%' limit 20";
                $query = "SELECT * FROM dokumen WHERE dokumen_isi LIKE '%".$q."%' limit 20";

                $query_exec = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($query_exec)):
                ?>
                
                <div id='card'>
                <div class="card border-info">
                    <div class="card-body">
                            <h5><b><?php echo $row['dokumen_judul'] ?></b></h5>
                            <h5><?php echo $row['dokumen_tahun']; ?></h5>
                            <h5><?php echo $row['dokumen_penulis']; ?></h5>
                            <h5><?php echo $row['dokumen_isi']; ?></h5>
                    </div>
                </div>  
                </div>  
            

                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </body>
    </html>