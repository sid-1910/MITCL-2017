
  <?php 
                          $price=$_POST["price"];
                          $tid=$_POST["tId"];
                          switch ($tid) {
                            case 1:
                            $tname = 'Hurricanes'; break;
                            case 2:
                            $tname = 'Ninjas'; break;
                            case 3:
                            $tname = 'Pirates'; break;
                            case 4:
                            $tname = 'Samurai'; break;
                            case 5:
                            $tname = 'Titans'; break;
                            case 6:
                            $tname = 'Wizards'; break;
                            default: break;
                          }
                          $teid = $tid;
                          $teamN =$tname;

                              if ($id!=0) {
                               $query1="INSERT INTO link (playerId, playerName,year,FITNESS,FIELDING,BATTING,Bowling,teamId,teamName,BASE,imagePath,price,role) VALUES ('$id1','$pName','$pYear','$fit','$fie','$bat','$bow','$teid','$teamN','$base1','$i','$price','$role1')";
                             }

                             $qrysel13="SELECT playerId, playerName, year FROM link ORDER BY ID DESC LIMIT 1";
                             $result1 = mysqli_query($con, $qrysel13);
                             if (mysqli_num_rows($result1) == 0) {
                              echo "";}
                              else
                              {
                                while($row = mysqli_fetch_assoc($result1)) {
                                  $pID1=$row['playerId'];
                                  $pName1=$row['playerName'];
                                  $pYear1 = $row['year'];
                                }
                              } 


                              if ($pID1!=0 && $teid!=0) {

                                $query99="INSERT INTO final (pId, pName, pYear, pPrice, pTeamId, pTeamName) VALUES ('$pID1','$pName1','$pYear1','$price', '$teid','$teamN')";
                                if(mysqli_query($con,$query99))
                                {
                                  
                                }
                                else
                                {

                                }
                              }
                       ?>