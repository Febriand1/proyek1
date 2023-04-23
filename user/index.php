<!DOCTYP HTML>
<html>
    <head>
        <title>Index | MENDELEY PRORORIPE</title>
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
                padding-right: 30px 0px 30px 0px;
                text-align: left;
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
                <div id='Judul'>
                    MENDELEY PROTOTIPE
                </div>
                 <div id='form-input'>
                    <form method='get' action='search.php'>
                        <input type="text" id='q' name='q' style="width:100%" placeholder='Cari Artikel...'/>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>