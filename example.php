<?php
    include('example-client.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TBOHolidays Webservice Example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">TBOHolidays - Country List</div>
                    <div class="panel-body">
                        <ul class="list-inline">
                        <?php
                            $client = createClient();
                            $result = getCountryList($client);

                            foreach($result->CountryList->Country as $country){
                                echo "<li><kbd class='bg-primary'>".$country->CountryName." - ".$country->CountryCode."</kbd></li>";
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">TBOHolidays - City List</div>
                    <div class="panel-body">
                        <ul class="list-inline">
                        <?php
                        $client = createClient();
                        $result = getCityList($client);

                        foreach($result->CityList->City as $city){
                            echo "<li><kbd class='bg-primary'>".$city->CityName." - ".$city->CityCode."</kbd></li>";
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">TBOHolidays - Dubai Hotel List</div>
                    <div class="panel-body">
                        <ul class="list-inline">
                            <?php
                            $client = createClient();
                            $result = getHotels($client);

                            foreach($result->HotelResultList->HotelResult as $HotelResult){
                                echo "<li><kbd class='bg-primary'>".$HotelResult->HotelInfo->HotelName." - ".$HotelResult->HotelInfo->HotelCode."</kbd></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>