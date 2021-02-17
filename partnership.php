<html lang = "en" >
    <head >
        <meta charset = "utf-8" />
        <meta http - equiv = "X-UA-Compatible" content = "IE=edge" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name = "description" content = "" />
        <meta name = "author" content = "" />
        <title> Closed Deals </title >
        <link href = "static/css/dashboard.css" rel = "stylesheet">

    </head >

    <body>
    <?php
        include "header.php";
    ?>
            <div id = "layoutSidenav_content" >
                <main >
                    <div class="container-fluid" >
                        <h1 class="mt-4" > Dashboard</h1 >

                    </div >
                        <div class="row" >
                            <div class="col-xl-6" >
                                <div class="card mb-4" >
                                    <div class="card-header" >
                                        <i class="fas fa-chart-area mr-1" ></i >
Histgram Chart <img src = "static/images/dashboard1.png", height = "500", width = "550">
                                    </div >
                                    <div class="card-body" ><canvas id = "myAreaChart" width = "100%" height = "40" ></canvas ></div >
                                </div >
                            </div >
                            <div class="col-xl-6" >
                                <div class="card mb-4" >
                                    <div class="card-header" >
                                        <i class="fas fa-chart-bar mr-1" ></i >
Map Chart
<img src = "static/images/dashboard2.png", height = "500", width = "550">
                                    </div >
                                    <div class="card-body" ><canvas id = "myBarChart" width = "100%" height = "40" ></canvas ></div >
                                </div >
                            </div >
                        </div >
                        <div class="card mb-4" >
                            <div class="card-header" >
                                <i class="fas fa-table mr-1" ></i >
                                Closed Deals
</div >
                            <div class="card-body" >
                                <div class="table-responsive" >
                                    <table class="table table-bordered" id = "dataTable" width = "100%" cellspacing = "0" >
                                        <thead >
                                            <tr >
                                                <th > Owner</th >
                                                <th > Address</th >
                                                <th > Zipcode</th >
                                                <th > Total Units </th >
                                                <th > Sale Date </th >
                                                <th > Sale Price </th >
                                            </tr >
                                        </thead >
                                        <tbody >
                                        <tr >
                                            <td > Tiger Nixon </td >
                                            <td > 153 AVENUE B </td >
                                            <td > 10009</td >
                                            <td > 5</td >
                                            <td > 7 / 19 / 17</td >
                                            <td > $6,625,000 </td >
                                        </tr >


                                        <tr >
                                            <td > Ashton Cox </td >
                                            <td > 1 5 AVENUE </td >
                                            <td > 10003</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 16</td >
                                            <td > $4,925,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Cedric Kelly </td >
                                            <td > 1 ASCAN AVE, 35 </td >
                                            <td > 11375</td >
                                            <td > 1</td >
                                            <td > 2019 / 03 / 29</td >
                                            <td > $649,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Airi Satou </td >
                                            <td > 1 ASCAN AVENUE, 26 </td >
                                            <td > 11375 </td >
                                            <td > 2 </td >
                                            <td > 2018 / 11 / 28</td >
                                            <td > $315,000 </td >
                                        </tr >

                                        <tr >
                                            <td > Brielle Williamson </td >
                                            <td > 1 ASCAN AVENUE, 31 </td >
                                            <td > 11375</td >
                                            <td > 1</td >
                                            <td > 2019 / 12 / 02</td >
                                            <td > $585,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Herrod Chandler </td >
                                            <td > 1 BAY CLUB DRIVE </td >
                                            <td > 11360</td >
                                            <td > 1</td >
                                            <td > 2017 / 08 / 06</td >
                                            <td > $435,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Rhona Davidson </td >
                                            <td > 1 BOND STREET </td >
                                            <td > 10023</td >
                                            <td > 1</td >
                                            <td > 2018 / 10 / 14</td >
                                            <td > $5,640,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Colleen Hurst </td >
                                            <td > 1 BUTTONWOOD ROAD </td >
                                            <td > 10304</td >
                                            <td > 1</td >
                                            <td > 2019 / 09 / 15</td >
                                            <td > $1,735,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Sonya Frost </td >
                                            <td > 1 CENTRAL PARK SOUTH </td >
                                            <td > 10019</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 13</td >
                                            <td > $10,150,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Jena Gaines </td >
                                            <td > 1 COENTIES SLIP </td >
                                            <td > 10004</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 19</td >
                                            <td > $26,750,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Quinn Flynn </td >
                                            <td > 1 EAST 66TH STREET, 15H </td >
                                            <td > 10065</td >
                                            <td > 1</td >
                                            <td > 2018 / 03 / 03</td >
                                            <td > $350,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Charde Marshall </td >
                                            <td > 1 DEWHURST STREET </td >
                                            <td > 10314</td >
                                            <td > 1</td >
                                            <td > 2018 / 10 / 16</td >
                                            <td > $725,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Haley Kennedy </td >
                                            <td > 1 EAST 88TH   STREET </td >
                                            <td > 11236</td >
                                            <td > 2</td >
                                            <td > 2017 / 12 / 18</td >
                                            <td > $420,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Tatyana Fitzpatrick </td >
                                            <td > 1 FIRST PLACE, 5 </td >
                                            <td > 11231</td >
                                            <td > 1</td >
                                            <td > 2019 / 03 / 17</td >
                                            <td > $356,250 </td >
                                        </tr >
                                        <tr >
                                            <td > Michael Silva </td >
                                            <td > 1 FORDHAM HILL OVAL, 9A </td >
                                            <td > 10468</td >
                                            <td > 1</td >
                                            <td > 2017 / 11 / 27</td >
                                            <td > $95,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Paul Byrd </td >
                                            <td > 1 FRANKLIN AVENUE </td >
                                            <td > 11249</td >
                                            <td > 1</td >
                                            <td > 2018 / 06 / 09</td >
                                            <td > $800,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Gloria Little </td >
                                            <td > 1 GRACIE TERRACE, 3C </td >
                                            <td > 10028</td >
                                            <td > 1</td >
                                            <td > 2019 / 04 / 10</td >
                                            <td > $899,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Bradley Greer </td >
                                            <td > 1 GRAND ARMY PLAZA </td >
                                            <td > 11238</td >
                                            <td > 1</td >
                                            <td > 2019 / 10 / 13</td >
                                            <td > $3,550,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Dai Rios </td >
                                            <td > 1 HANSON PLACE </td >
                                            <td > 11217</td >
                                            <td > 1</td >
                                            <td > 2018 / 09 / 26</td >
                                            <td > $1,525,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Jenette Caldwell </td >
                                            <td > 1 IRVING PLACE </td >
                                            <td > 10003</td >
                                            <td > 1</td >
                                            <td > 2018 / 09 / 03</td >
                                            <td > $2,500,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Yuri Berry </td >
                                            <td > 1 JOHN STREET </td >
                                            <td > 11201</td >
                                            <td > 1</td >
                                            <td > 2019 / 06 / 25</td >
                                            <td > $2,571,113 </td >
                                        </tr >
                                        <tr >
                                            <td > Caesar Vance </td >
                                            <td > Pre - Sales Support </td >
                                            <td > new York</td >
                                            <td > 21</td >
                                            <td > 2011 / 12 / 12</td >
                                            <td > $848,500 </td >
                                        </tr >
                                        <tr >
                                            <td > Doris Wilder </td >
                                            <td > 1 KLEUPFEL COURT </td >
                                            <td > 11385</td >
                                            <td > 1</td >
                                            <td > 2017 / 09 / 20</td >
                                            <td > $85,600 </td >
                                        </tr >
                                        <tr >
                                            <td > Angelica Ramos </td >
                                            <td > 1 LAUREL AVENUE </td >
                                            <td > 10304</td >
                                            <td > 1</td >
                                            <td > 2019 / 10 / 09</td >
                                            <td > $154,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Gavin Joyce </td >
                                            <td > 1 LEXINGTON AVENUE, 3 / 4D </td >
                                            <td > 10010</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 22</td >
                                            <td > $2,862,500 </td >
                                        </tr >
                                        <tr >
                                            <td > Jennifer Chang </td >
                                            <td > 1 LEXINGTON AVENUE, 8 / 9CD </td >
                                            <td > 10010</td >
                                            <td > 1</td >
                                            <td > 2018 / 11 / 14</td >
                                            <td > $6,608,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Brenden Wagner </td >
                                            <td > 1 MAIN STREET </td >
                                            <td > 11201</td >
                                            <td > 1</td >
                                            <td > 2017 / 06 / 07</td >
                                            <td > $2,950,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Fiona Green </td >
                                            <td > 1 METROPOLITAN OVAL </td >
                                            <td > 10462</td >
                                            <td > 1</td >
                                            <td > 2019 / 03 / 11</td >
                                            <td > $125,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Shou Itou </td >
                                            <td > 1 MORTON SQUARE </td >
                                            <td > 10014</td >
                                            <td > 1</td >
                                            <td > 2018 / 08 / 14</td >
                                            <td > $3,600,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Michelle House </td >
                                            <td > 1 NOEL AVENUE </td >
                                            <td > 11229</td >
                                            <td > 2</td >
                                            <td > 2019 / 06 / 02</td >
                                            <td > $530,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Suki Burks </td >
                                            <td > 1 NORTH PIER </td >
                                            <td > 11211</td >
                                            <td > 1</td >
                                            <td > 2019 / 10 / 22</td >
                                            <td > $699,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Prescott Bartlett </td >
                                            <td > 1 PATRICIA LANE </td >
                                            <td > 10456</td >
                                            <td > 1</td >
                                            <td > 2018 / 05 / 07</td >
                                            <td > $5,000,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Gavin Cortez </td >
                                            <td > 1 PLAZA STREET WEST, 11D </td >
                                            <td > 11217</td >
                                            <td > 1</td >
                                            <td > 2018 / 10 / 26</td >
                                            <td > $1,050,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Martena Mccray </td >
                                            <td > 1 PLAZA STREET WEST, 5D </td >
                                            <td > 11217</td >
                                            <td > 1</td >
                                            <td > 2018 / 03 / 09</td >
                                            <td > $999,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Unity Butler </td >
                                            <td > 1 PLAZA STREET, 1B </td >
                                            <td > 11217</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 09</td >
                                            <td > $807,500 </td >
                                        </tr >
                                        <tr >
                                            <td > Howard Hatfield </td >
                                            <td > 1 POWERS STREET </td >
                                            <td > 11211</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 16</td >
                                            <td > $730,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Hope Fuentes </td >
                                            <td > 1 QUINCY STREET </td >
                                            <td > 11238</td >
                                            <td > 1</td >
                                            <td > 2017 / 02 / 12</td >
                                            <td > $700,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Vivian Harrell </td >
                                            <td > 1 RIVER TERRACE </td >
                                            <td > 11236</td >
                                            <td > 1</td >
                                            <td > 2019 / 02 / 14</td >
                                            <td > $2,775,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Timothy Mooney </td >
                                            <td > 1 STATION SQUARE, 206 </td >
                                            <td > 11375</td >
                                            <td > 1</td >
                                            <td > 2018 / 12 / 11</td >
                                            <td > $180,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Jackson Bradshaw </td >
                                            <td > 1 STATION SQUARE, 304 </td >
                                            <td > 11375</td >
                                            <td > 1</td >
                                            <td > 2018 / 09 / 26</td >
                                            <td > $135,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Olivia Liang </td >
                                            <td > 1 STATION SQUARE, 315 </td >
                                            <td > 11375</td >
                                            <td > 1</td >
                                            <td > 2019 / 02 / 03</td >
                                            <td > $442,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Bruno Nash </td >
                                            <td > 1 STATION SQUARE, 502 </td >
                                            <td > 11375</td >
                                            <td > 1</td >
                                            <td > 2019 / 05 / 03</td >
                                            <td > $135,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Sakura Yamamoto </td >
                                            <td > 1 SUTTON PLACE SOUTH, 7A </td >
                                            <td > 10022</td >
                                            <td > 1</td >
                                            <td > 2019 / 08 / 19</td >
                                            <td > $16,500,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Thor Walton </td >
                                            <td > 1 TIFFANY PLACE </td >
                                            <td > 11231</td >
                                            <td > 1</td >
                                            <td > 2017 / 08 / 11</td >
                                            <td > $1,200,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Finn Camacho </td >
                                            <td > 1 TUDOR CITY PLACE, 1510 </td >
                                            <td > 10017</td >
                                            <td > 1</td >
                                            <td > 2019 / 07 / 07</td >
                                            <td > $283,500 </td >
                                        </tr >
                                        <tr >
                                            <td > Serge Baldwin </td >
                                            <td > 1 VERONA PLACE </td >
                                            <td > 11216</td >
                                            <td > 2</td >
                                            <td > 2018 / 04 / 09</td >
                                            <td > $3,300,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Zenaida Frank </td >
                                            <td > 1 WALL STREET COURT </td >
                                            <td > 10005</td >
                                            <td > 1</td >
                                            <td > 2019 / 01 / 04</td >
                                            <td > $575,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Zorita Serrano </td >
                                            <td > 1 WEST 126TH STREET, 5C </td >
                                            <td > 10035</td >
                                            <td > 1</td >
                                            <td > 2018 / 06 / 01</td >
                                            <td > $315,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Jennifer Acosta </td >
                                            <td > 1 WEST 126TH STREET, 6F </td >
                                            <td > 10035</td >
                                            <td > 1</td >
                                            <td > 2018 / 02 / 01</td >
                                            <td > $302,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Cara Stevens </td >
                                            <td > 1 WEST 126TH STREET, 6H </td >
                                            <td > 10035</td >
                                            <td > 1</td >
                                            <td > 2017 / 12 / 06</td >
                                            <td > $305,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Hermione Butler </td >
                                            <td > 249 - 19 37TH AVENUE </td >
                                            <td > 11363</td >
                                            <td > 2</td >
                                            <td > 2018 / 03 / 21</td >
                                            <td > $999,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Lael Greer </td >
                                            <td > 249 - 22 63RD AVENUE, 1268 </td >
                                            <td > 11362</td >
                                            <td > 1</td >
                                            <td > 2019 / 02 / 27</td >
                                            <td > $255,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Jonas Alexander </td >
                                            <td > 249 - 23 60TH AVENUE, 337 </td >
                                            <td > 11362</td >
                                            <td > 1</td >
                                            <td > 2018 / 07 / 14</td >
                                            <td > $285,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Shad Decker </td >
                                            <td > 249 - 50 147TH   AVENUE </td >
                                            <td > 11422</td >
                                            <td > 2</td >
                                            <td > 2018 / 11 / 13</td >
                                            <td > $750,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Michael Bruce </td >
                                            <td > 24905 64TH AVENUE, 1264 </td >
                                            <td > 11362</td >
                                            <td > 1</td >
                                            <td > 2019 / 06 / 27</td >
                                            <td > $280,000 </td >
                                        </tr >
                                        <tr >
                                            <td > Donna Snider </td >
                                            <td > 2493 OCEAN AVE </td >
                                            <td > 11229</td >
                                            <td > 1</td >
                                            <td > 2018 / 01 / 25</td >
                                            <td > $799,326 </td >
                                        </tr >
                                        </tbody >
                                    </table >
                                </div >
                            </div >
                        </div >
                    </div >
                </main >
            </div >
        </div >
    </body >
</html >
