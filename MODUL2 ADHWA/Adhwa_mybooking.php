    <!DOCTYPE html>
    <html lang="eng">
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <section id="nav">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" style="margin-left: auto; margin-right:auto;">
                            <li class="nav-item">
                                <a class="nav-link" href="Adhwa_home.php"><b>Home</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Adhwa_booking.php"><b>Booking</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section><br>
        <center>
            <h3><b>Thank You Adhwaa_1202204172 for Reserving</b></h3>
            <p>Find your best deal, here!<p>
        </center>
        <table class="table">
        <thead>
            <tr>
                <th>Booking Number</th>
                <th>Name</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Car Type</th>
                <th>Phone Number</th>
                <th>Service(s)</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_POST['name'])){
                    if($_POST['name']!=null){
                        echo '<tr>';
                        echo '<td>'.rand(100,999999).'</td>';
                        echo '<td>'.$_POST['name'].'</td>';
                        echo '<td>'.$_POST['date'].' '.$_POST['time'].'</td>';
                        echo '<td>'.date('Y-m-d',strtotime($_POST['date'].'+'.$_POST['duration'].'days')).' '.$_POST['time'].'</td>';
                        echo '<td>'.$_POST['car_type'].'</td>';
                        echo '<td>'.$_POST['duration'].'</td>';
                        echo '<td><ul>';
                        foreach ($_POST['service'] ?? '1' as $AS){
                            switch ($AS){
                                case '25000':
                                    echo '<li>Health Protocol</li>';
                                    break;
                                case '100000':
                                    echo '<li>Driver</li>';
                                    break;
                                case '250000':
                                    echo '<li>Full filled</li>';        
                                    break;                
                                default:
                                    echo '';
                                }
                        }
                    }
                    echo '</td></ul>';
                    echo '<td>';
                    switch ($_POST['car_type']){
                        case "Rush":
                            $price=200000;
                            $price=$price*$_POST['duration'];
                            foreach ($_POST['service'] as $AS){
                                $price+=(int)$AS;
                            }
                            echo 'Rp.'.$price;
                            echo '</td>';
                            break;
                        case "Yaris":
                            $price=100000;
                            $price=$price*$_POST['duration'];
                            foreach (($_POST['service']) as $AS){
                                $price+=(int)$AS;
                            }
                            echo 'Rp.'.$price;
                            echo '</td>';
                            break;
                        case "Jazz":
                            $price=250000;
                            $price=$price*$_POST['duration'];
                            foreach ($_POST['service'] as $AS){
                                $price+=(int)$AS;
                            }
                            echo 'Rp.'.$price;
                            echo '</td>';
                            break;
                    }
                }
                else{
                    echo '<td colspan="8"><center>No service</center></td>';
                }
            ?>
        </tbody>
        </table>
    </body>
    <footer>
        <center>
            <p>Created by Adhwaa_1202204172
        </center>
    </footer>
    </html>