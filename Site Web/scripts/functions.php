<?php 
    
    //********************************************************/
    //************************* Humidité *********************/
    //********************************************************/

    function results_humidity_function($day) {
        include('config.php');
        foreach($bdd->query('SELECT humidity,date,WEEKDAY(date), SUM(humidity) AS humiditym, COUNT(humidity) AS humidityc FROM humidity_temp  WHERE WEEKDAY(date)=' . $day . ' AND WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) ORDER BY date LIMIT 1') as $humitidyl) {
            if(isset($humitidyl['humidity'])) {
                $hresult = $humitidyl['humiditym']/$humitidyl['humidityc'];
                echo round($hresult,2);
            }   
        }
    }
    
    function results_humidity_time_function($day) {
        include('config.php');
        foreach($bdd->query('SELECT humidity,date,WEEKDAY(date), SUM(humidity) AS humiditym, COUNT(humidity) AS humidityc FROM humidity_temp  WHERE WEEKDAY(date)=' . $day . ' AND WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) ORDER BY date LIMIT 1') as $humitidyl) {
            if(isset($humitidyl['date'])) {
                $phpdate = strtotime($humitidyl['date']);
                $humitidyl['date'] = date( 'd/m/Y', $phpdate );
                $hdate = $humitidyl['date'];
                echo $hdate;
            }
        }
    }

    //********************************************************/
    //************************* Température *********************/
    //********************************************************/

    function results_temp_function($day) {
        include('config.php');
        foreach($bdd->query('SELECT temp,date,WEEKDAY(date), SUM(temp) AS tempm, COUNT(temp) AS tempc FROM humidity_temp  WHERE WEEKDAY(date)=' . $day . ' AND WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) ORDER BY date LIMIT 1') as $templ) {
            if(isset($templ['tempm'])) {
                $tresult = $templ['tempm']/$templ['tempc'];
                echo round($tresult,2);
            }        
        }
    }

    //********************************************************/
    //************************* Poussières *********************/
    //********************************************************/

    //************************** LPO% ***************************/

    function results_lpop_time_function($day) {
        include('config.php');
        foreach($bdd->query('SELECT lpo_percentage,date,WEEKDAY(date), SUM(lpo_percentage) AS lpopm, COUNT(lpo_percentage) AS lpopc FROM dust WHERE WEEKDAY(date)=' . $day . ' AND WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) ORDER BY date LIMIT 1') as $lpopl) {
            if(isset($lpopl['date'])) {
                $phpdate = strtotime($lpopl['date']);
                $lpopl['date'] = date( 'd/m/Y', $phpdate );
                $lpopdate = $lpopl['date'];
                echo $lpopdate;
            }
        }
    }

    function results_lpop_function($day) {
        include('config.php');
        foreach($bdd->query('SELECT lpo_percentage,date,WEEKDAY(date), SUM(lpo_percentage) AS lpopm, COUNT(lpo_percentage) AS lpopc FROM dust WHERE WEEKDAY(date)=' . $day . ' AND WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) ORDER BY date LIMIT 1') as $lpopl) {
            if(isset($lpopl['lpopm'])) {
                $lpopresult = $lpopl['lpopm']/$lpopl['lpopc'];
                echo round($lpopresult,2);
            }        
        }
    }

    //************************** PCS ***************************/
    function results_pcs_function($day) {
        include('config.php');
        foreach($bdd->query('SELECT pcs,date,WEEKDAY(date), SUM(pcs) AS pcsm, COUNT(pcs) AS pcsc FROM dust WHERE WEEKDAY(date)=' . $day . ' AND WEEKOFYEAR(date)=WEEKOFYEAR(NOW()) ORDER BY date LIMIT 1') as $pcsl) {
            if(isset($pcsl['pcsm'])) {
                $pcsresult = $pcsl['pcsm']/$pcsl['pcsc'];
                echo round($pcsresult,2);
            }        
        }
    }

?>