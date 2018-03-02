<?php  
error_reporting(0);
$server="localhost";
$unm="root";
$pwd="";
$db="mitcl";

$con=new mysqli($server,$unm,$pwd,$db);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
  $id=0;


} 
?>

<html>
  <head>
      <title>MITCL 2017</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <meta charset="UTF-8">
      <script type="text/javascript" src="progressbar.min.js"></script>   
      <script type="text/javascript" src="progress.js"></script>
      <img src="img/mitlogo1.jpg" style="height:140px;width:200px;position: absolute;top:30px;">
      <img src="img/MITCL.png" style="height:170px;width:160px;position:absolute; right:50px;top:30px;">
      <!--img src="img/download.jpg" style="height:20%;width:20%;position:absolute;top:30px;left:58%">
      <img src="img/reebok.png" style="height:20%;width:20%;position:absolute;top:30px;left:17%"-->
    <strong><p style="color:white;position:absolute;left:530px;font-size:44px;">MITCL 2017</p></strong>
  </head>
  <body>
    <section class="crazy">
      <form id="team1" method="POST">
      <input type="text" autocomplete="off" name="id" class="ID" placeholder="Enter ID">
      <input type="submit" class="gobtn" value="Go">
      </form>
       
           <?php
              error_reporting(0);
              $id = $_POST["id"];
              $qrysel="SELECT name,year,role,FITNESS,FIELDING,BATTING,Bowling,BASE,imagePath FROM player WHERE playerId = '$id'"; 
              $result = mysqli_query($con, $qrysel);
               
               while($row = mysqli_fetch_assoc($result)) 
               {
                        $i = $row['imagePath']; 
                        $pName = $row['name']; 
                        $role1 = $row['role'];
                        $pYear = $row['year'];
                        setlocale(LC_MONETARY,"en_US");
                        $base1 = $row['BASE'];
                        $fit = $row['FITNESS'];
                        $fie = $row['FIELDING'];
                        $bat = $row['BATTING'];
                        $bow = $row['Bowling'];
                        $idd1 = $id; 

               }       
    ?>           
           <?php
              $qryse="SELECT * from budget";
              $result1 = mysqli_query($con, $qryse);
               
               while($row = mysqli_fetch_assoc($result1)) 
               {
                        $bud1 = $row['budget1']; 
                        $bud2 = $row['budget2']; 
                        $bud3 = $row['budget3'];
                        $bud4 = $row['budget4'];
                        $bud5 = $row['budget5'];
                        $bud6 = $row['budget6'];
                        
               }       
    ?>     
    
          <img class="pphoto" src="<?php echo $i ?>" style="height:170px;width:180px;background:white;position: absolute;top:190px;left:20%"/>
                     
                <div id="batting-1" style="width: 120px;position: absolute;left:630px;top:220px">
                            <!--  Item  -->
                                <li class="progress"  data-percent="<?php echo ($bat*10)."%" ?>"> <svg viewBox="-10 -10 220 220">
                                  <g fill="none" stroke-width="19" transform="translate(100,100)">
                                    <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
                                    <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
                                    <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
                                    <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
                                    <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
                                    <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
                                  </g>
                                  </svg></li> </div>
                <div id="bowling-2" style="width: 120px;position: absolute;left:840px;top:220px">
                               <!--  Item  -->
                                <li class="progress"  data-percent="<?php echo ($bow*10)."%" ?>"> <svg viewBox="-10 -10 220 220">
                                  <g fill="none" stroke-width="19" transform="translate(100,100)">
                                    <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
                                    <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
                                    <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
                                    <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
                                    <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
                                    <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
                                  </g>
                                  </svg></li> </div>
                <div id="fielding-3" style="width: 120px;position: absolute;left:630px;top:390px">
                               <!--  Item  -->
                             <li class="progress"  data-percent="<?php echo ($fie*10)."%" ?>"> <svg viewBox="-10 -10 220 220">
                              <g fill="none" stroke-width="19" transform="translate(100,100)">
                                 <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
                                 <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
                                 <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
                                 <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
                                 <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
                                 <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
                                </g>
                               </svg></li> </div>
                <div id="fitness-4" style="width: 120px;position: absolute;left:840px;top:390px">
                               <!--  Item  -->
                              <li class="progress"  data-percent="<?php echo ($fit*10)."%" ?>"> <svg viewBox="-10 -10 220 220">
                                <g fill="none" stroke-width="19" transform="translate(100,100)">
                                  <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
                                  <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
                                  <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
                                  <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
                                  <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
                                  <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
                                </g>
                                </svg>  </li></div>
          
                                      <!--  Defining Angle Gradient Colors  --> 
                                  <svg width="0" height="0">
                                  <defs>
                                    <linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
                                      <stop stop-color="#618099"/>
                                      <stop offset="100%" stop-color="#8e6677"/>
                                    </linearGradient>
                                    <linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
                                      <stop stop-color="#8e6677"/>
                                      <stop offset="100%" stop-color="#9b5e67"/>
                                    </linearGradient>
                                    <linearGradient id="cl3" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
                                      <stop stop-color="#9b5e67"/>
                                      <stop offset="100%" stop-color="#9c787a"/>
                                    </linearGradient>
                                    <linearGradient id="cl4" gradientUnits="objectBoundingBox" x1="1" y1="1" x2="0" y2="0">
                                      <stop stop-color="#9c787a"/>
                                      <stop offset="100%" stop-color="#817a94"/>
                                    </linearGradient>
                                    <linearGradient id="cl5" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="0" y2="0">
                                      <stop stop-color="#817a94"/>
                                      <stop offset="100%" stop-color="#498a98"/>
                                    </linearGradient>
                                    <linearGradient id="cl6" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="1" y2="0">
                                      <stop stop-color="#498a98"/>
                                      <stop offset="100%" stop-color="#618099"/>
                                    </linearGradient>
                                  </defs>
                                  </svg>

            
                        <div>
                          <p style="font-size:20px;color:white;position:absolute;top:380px;left:18%"><strong>Name:<?php echo  " ".$pName; ?></strong></p>
                          <p style="font-size:20px;color:white;position:absolute;top:420px;left:18%"><strong>Year:<?php echo  " ".$pYear; ?></strong></p>
                          <p style="font-size:20px;color:white;position:absolute;top:460px;left:18%"><strong>Role:<?php echo  " ".$role1; ?></strong></p>
                           <p style="font-size:20px;color:white;position:absolute;top:500px;left:18%"><strong>Base Price:<?php echo  " ".$base1." K"; ?></strong></p>
                        </div>
                       <div>
                          <p style="font-size:20px;color:white;position:absolute;top:340px;left:49%">BATTING</p>
                          <p style="font-size:20px;color:white;position:absolute;top:340px;left:64%">BOWLING</p>
                          <p style="font-size:20px;color:white;position:absolute;top:510px;left:49%">FIELDING</p>
                          <p style="font-size:20px;color:white;position:absolute;top:510px;left:64%">FITNESS</p>
                        </div>
    </section>
    
                     <div class="budget-left" style="position: absolute;top:80px; ">
                          <strong><p style="color: white">BUDGET</p></strong>
                          <img src="img/Hurricanes.png" style="position: absolute;top: 200px;">
                          <p name="1" style="position: absolute;top:310px;left:40px;color: white;font-size: 20px"><?php echo $bud1; ?></p>
                          <img src="img/ninjas.png" style="position: absolute;top: 350px;">
                          <p name="2" style="position: absolute;top:460px;left:40px;color: white;font-size: 20px"> <?php echo $bud2; ?></p>
                          <img src="img/pirates.png" style="position: absolute;top: 500px;">
                          <p name="3" style="position: absolute;top:610px;left:40px;color: white;font-size: 20px"> <?php echo $bud3; ?></p>
                  </div>
                  <div class="budget-right" style="position:absolute;top:80px;right:20px;">
                      <strong><p style="color: white">BUDGET</p></strong>
                      <img src="img/samurai.png"  style="position: absolute;top: 200px;">
                      <p name="4" style="position: absolute;top:310px;right:40px;color: white;font-size: 20px"> <?php echo $bud4; ?></p>
                      <img src="img/titans.png"  style="position: absolute;top: 350px;">
                      <p name="5" style="position: absolute;top:460px;right:40px;color: white;font-size: 20px"> <?php echo $bud5; ?></p>
                      <img src="img/wizards.png" style="position: absolute;top: 500px;">
                      <p name="6" style="position: absolute;top:610px;right:40px;color: white;font-size: 20px"> <?php echo $bud6; ?></p>
                  </div>
                    <div class="bech">
                            <form  method="POST">
                            <input type="submit" onclick="bidincrease(); return false;" style="position: absolute;top:650px;left:350px" value="Bid">                            
                            <label id="price" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;"> <?php echo $base1."000"; ?> </label>
                            <!--for the player id,name,year -->
                            <input type="hidden" id="price" name="idd1" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $idd1; ?> </input>
                            <input type="hidden"  name="pName" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $pName; ?> </input>
                            <input type="hidden"  name="pYear" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $pYear; ?> </input>                          
                            <input type="hidden"  name="1" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $bud1; ?> </input>                          
                            <input type="hidden"  name="2" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $bud2; ?> </input>                          
                            <input type="hidden"  name="3" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $bud3; ?> </input>                          
                            <input type="hidden"  name="4" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $bud4; ?> </input>                          
                            <input type="hidden"  name="5" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $bud5; ?> </input>                          
                            <input type="hidden"  name="6" style="position: absolute;left:460px;top:655px;color:white;font-size:26px;" value=<?php echo $bud6; ?> </input>                          
                            <input type="text" style="height:50px;position: absolute;left:610px" name="tId" id="tId" placeholder="ID">
                            <input id="button8" type="submit" style="position: absolute;top:650px;left:650px" value="Sold!">
                            <input type="hidden" name="playprice" id="soldPrice">
                               </form>
                               <?php
                               $pName1=$_POST["pName"];
                               $pYear1=$_POST["pYear"]; 
                               $idd2=$_POST["idd1"];
                               $tid=$_POST["tId"];  
                               $pprice=$_POST["playprice"];
                               $bud11=$_POST["1"];
                               $bud22=$_POST["2"];
                               $bud33=$_POST["3"];
                               $bud44=$_POST["4"];
                               $bud55=$_POST["5"];
                               $bud66=$_POST["6"];
                          
                          switch ($tid) {
                            case 1:
                            $tname = 'Hurricanes';
                            $bud11 = $bud11 - $pprice;
                            //echo $bud11; 
                             break;
                            case 2:                           
                            $tname = 'Ninjas';
                            $bud22 = $bud22 - $pprice;
                             break;
                            case 3:
                            $tname = 'Pirates'; 
                            $bud33 = $bud33 - $pprice;
                            break;
                            case 4:
                            $tname = 'Samurai';
                            $bud44 = $bud44 - $pprice;
                             break;
                            case 5:
                            $tname = 'Titans';
                            $bud55 = $bud55 - $pprice;
                             break;
                            case 6:
                            $tname = 'Wizards'; 
                            $bud66 = $bud66 - $pprice;
                            break;
                            default: break;
                          }
                          $teid = $tid;
                          $teamN =$tname;

                          $quer = "UPDATE budget set budget1 = '$bud11', budget2='$bud22',budget3='$bud33',budget4='$bud44',budget5='$bud55',budget6='$bud66' where ID = 1";
                          mysqli_query($con,$quer);

                      $query1="INSERT INTO link (playerId,playerName,year,teamId,teamName,soldPrice) VALUES ('$idd2','$pName1','$pYear1','$teid','$teamN','$pprice')";
                      mysqli_query($con, $query1);

                             $qrysel13="SELECT playerId, playerName, year FROM link ORDER BY ID DESC LIMIT 1";
                             $result1 = mysqli_query($con, $qrysel13);
                             if (mysqli_num_rows($result1) == 0) {
                              echo "";}
                              else
                              {
                                while($row = mysqli_fetch_assoc($result1)) {
                                  $pID1=$row['playerId'];
                                  $pName2=$row['playerName'];
                                  $pYear2 = $row['year'];
                                }
                              } 

                              if ($pID1!=0 && $teid!=0) {

                                $query99="INSERT INTO final (pId, pName, pYear, pPrice, pTeamId, pTeamName) VALUES ('$pID1','$pName2','$pYear2','$pprice', '$teid','$teamN')";
                                if(mysqli_query($con,$query99))
                                {}
                                else
                                {}
                             }
                       
                       ?>           
                            
                  <form action="teamdisplay.php">
                            <input type="submit" style="position: absolute;top:650px;left:770px" value="Teams">
                            </form>                 
                    </div>

                    <script type="text/javascript">
                      var i=0;
                    var arr=[0,10000,10000,10000,20000,20000,20000,30000,30000,30000,40000,50000,60000,70000,80000,90000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000];
                    var soldPrice = 0;
                      function bidincrease(){
                    var arr=[0,10000,10000,10000,20000,20000,20000,30000,30000,30000,40000,50000,60000,70000,80000,90000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000,100000];
                         var x=document.getElementById("price");
                         x.innerHTML= +x.innerHTML+ +arr[i];
                         i=i+1;
                        soldPrice = x.innerHTML;
                        document.getElementById('soldPrice').value = soldPrice;
                      }

                    </script>
</body>
</html>