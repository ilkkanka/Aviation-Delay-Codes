<?php

session_start();

if (!$_SESSION['dil']) {

    require("dil/en.php");

} else {

    require("dil/" . $_SESSION['dil'] . ".php");

}

include("sayfalar/header.php");


?>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1"><?php echo $dil['o']; ?></a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>00-05</b></td>

                        <td><?php echo $dil['05']; ?></td>

                    </tr>
                    <tr>

                        <td><b>06 (OA)</b></td>

                        <td><?php echo $dil['06 (OA)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>09 (SG)</b></td>

                        <td><?php echo $dil['09 (SG)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>



</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2"><?php echo $dil['p']; ?></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>11 (PD)</b></td>

                        <td><?php echo $dil['11 (PD)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>12 (PL)</b></td>

                        <td><?php echo $dil['12 (PL)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>13 (PE)</b></td>

                        <td><?php echo $dil['13 (PE)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>14 (PO)</b></td>

                        <td><?php echo $dil['14 (PO)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>15 (PH)</b></td>

                        <td><?php echo $dil['15 (PH)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>16 (PS)</b></td>

                        <td><?php echo $dil['16 (PS)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>17 (PC)</b></td>

                        <td><?php echo $dil['17 (PC)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>18 (PB)</b></td>

                        <td><?php echo $dil['18 (PB)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>19 (PW)</b></td>

                        <td><?php echo $dil['19 (PW)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3"><?php echo $dil['ca']; ?></a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>21 (CD)</b></td>

                        <td><?php echo $dil['21 (CD)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>22 (CP)</b></td>

                        <td><?php echo $dil['22 (CP)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>23 (CC)</b></td>

                        <td><?php echo $dil['23 (CC)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>24 (CI)</b></td>

                        <td><?php echo $dil['24 (CI)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>25 (CO)</b></td>

                        <td><?php echo $dil['25 (CO)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>26 (CU)</b></td>

                        <td><?php echo $dil['26 (CU)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>27 (CE)</b></td>

                        <td><?php echo $dil['27 (CE)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>28 (CL)</b></td>

                        <td><?php echo $dil['28 (CL)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>29 (CA)</b></td>

                        <td><?php echo $dil['29 (CA)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse4"><?php echo $dil['ah']; ?></a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>31 (GD)</b></td>

                        <td><?php echo $dil['31 (GD)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>32 (GL)</b></td>

                        <td><?php echo $dil['32 (GL)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>33 (GE)</b></td>

                        <td><?php echo $dil['33 (GE)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>34 (GS)</b></td>

                        <td><?php echo $dil['34 (GS)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>35 (GC)</b></td>

                        <td><?php echo $dil['35 (GC)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>36 (GF)</b></td>

                        <td><?php echo $dil['36 (GF)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>37 (GB)</b></td>

                        <td><?php echo $dil['37 (GB)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>38 (GU)</b></td>

                        <td><?php echo $dil['38 (GU)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>39 (GT)</b></td>

                        <td><?php echo $dil['39 (GT)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse5"><?php echo $dil['te']; ?></a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>41 (TD)</b></td>

                        <td><?php echo $dil['41 (TD)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>42 (TM)</b></td>

                        <td><?php echo $dil['42 (TM)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>43 (TN)</b></td>

                        <td><?php echo $dil['43 (TN)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>44 (TS)</b></td>

                        <td><?php echo $dil['44 (TS)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>45 (TA)</b></td>

                        <td><?php echo $dil['45 (TA)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>46 (TC)</b></td>

                        <td><?php echo $dil['46 (TC)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>47 (TL)</b></td>

                        <td><?php echo $dil['47 (TL)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>48 (TV)</b></td>

                        <td><?php echo $dil['48 (TV)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse6"><?php echo $dil['da']; ?></a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>51 (DF)</b></td>

                        <td><?php echo $dil['51 (DF)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>52 (DG)</b></td>

                        <td><?php echo $dil['52 (DG)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>55 (ED)</b></td>

                        <td><?php echo $dil['55 (ED)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>56 (EC)</b></td>

                        <td><?php echo $dil['56 (EC)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>57 (EF)</b></td>

                        <td><?php echo $dil['57 (EF)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>58 (EO)</b></td>

                        <td><?php echo $dil['58 (EO)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse7"><?php echo $dil['fl']; ?></a>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>61 (FP)</b></td>

                        <td><?php echo $dil['61 (FP)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>62 (FF)</b></td>

                        <td><?php echo $dil['62 (FF)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>63 (FT)</b></td>

                        <td><?php echo $dil['63 (FT)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>64 (FS)</b></td>

                        <td><?php echo $dil['64 (FS)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>65 (FR)</b></td>

                        <td><?php echo $dil['65 (FR)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>66 (FL)</b></td>

                        <td><?php echo $dil['66 (FL)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>67 (FC)</b></td>

                        <td><?php echo $dil['67 (FC)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>68 (FA)</b></td>

                        <td><?php echo $dil['68 (FA)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>69 (FB)</b></td>

                        <td><?php echo $dil['69 (FB)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse8"><?php echo $dil['we']; ?></a>
                </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>71 (WO)</b></td>

                        <td><?php echo $dil['71 (WO)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>72 (WT)</b></td>

                        <td><?php echo $dil['72 (WT)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>73 (WR)</b></td>

                        <td><?php echo $dil['73 (WR)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>75 (WI)</b></td>

                        <td><?php echo $dil['75 (WI)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>76 (WS)</b></td>

                        <td><?php echo $dil['76 (WS)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>77 (WG)</b></td>

                        <td><?php echo $dil['77 (WG)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse9"><?php echo $dil['ai']; ?></a>
                </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>81 (AT)</b></td>

                        <td><?php echo $dil['81 (AT)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>82 (AX)</b></td>

                        <td><?php echo $dil['82 (AX)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>83 (AE)</b></td>

                        <td><?php echo $dil['83 (AE)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>84 (AW)</b></td>

                        <td><?php echo $dil['84 (AW)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse10"><?php echo $dil['ar']; ?></a>
                </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>85 (AS)</b></td>

                        <td><?php echo $dil['85 (AS)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>86 (AG)</b></td>

                        <td><?php echo $dil['86 (AG)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>87 (AF)</b></td>

                        <td><?php echo $dil['87 (AF)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>88 (AD)</b></td>

                        <td><?php echo $dil['88 (AD)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>89 (AM)</b></td>

                        <td><?php echo $dil['89 (AM)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse11"><?php echo $dil['re']; ?></a>
                </h4>
            </div>
            <div id="collapse11" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>91 (RL)</b></td>

                        <td><?php echo $dil['91 (RL)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>92 (RT)</b></td>

                        <td><?php echo $dil['92 (RT)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>93 (RA)</b></td>

                        <td><?php echo $dil['93 (RA)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>94 (RS)</b></td>

                        <td><?php echo $dil['94 (RS)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>95 (RC)</b></td>

                        <td><?php echo $dil['95 (RC)']; ?></td>

                    </tr>

                    <tr>

                        <td><b>96 (RO)</b></td>

                        <td><?php echo $dil['96 (RO)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="container">

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse12"><?php echo $dil['mi']; ?></a>
                </h4>
            </div>
            <div id="collapse12" class="panel-collapse collapse">
                <table class="table table-striped">

                    <thead>

                    <tr>

                        <th><?php echo $dil['c']; ?></th>

                        <th><?php echo $dil['s']; ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td><b>91 (RL)</b></td>

                        <td><?php echo $dil['97 (MI)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>92 (RT)</b></td>

                        <td><?php echo $dil['98 (MO)']; ?></td>

                    </tr>
                    <tr>

                        <td><b>93 (RA)</b></td>

                        <td><?php echo $dil['99 (MX)']; ?></td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
<?php

include("sayfalar/footer.php");

?>



