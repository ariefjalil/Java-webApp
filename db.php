<?php
           $connect = mysqli_connect("localhost", "root", "", "mx");
           $sql = "SELECT * FROM table_baru";
           $result = mysqli_query($connect, $sql);
           $json_array = array();
           while($row = mysqli_fetch_assoc($result))
           {
                $json_array[] = $row;
           }
           /*echo '<pre>';
           print_r(json_encode($json_array));
           echo '</pre>';
           echo json_encode($json_array);*/

           $fp = fopen('data1.json', 'w');
           fwrite($fp, json_encode($json_array));
           fclose($fp);

           ?>
