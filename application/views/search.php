<div class="container" style="margin-top: 15%;margin-bottom: 5%">

     <table class="table">
         <thead class="thead-light">
         <tr>
             <th scope="col">Station</th>
             <th scope="col">Valid</th>
             <th scope="col">Metar data</th>
         </tr>
         </thead>
         <tbody>
         <?php
         if ($metar_data) {
             foreach ($metar_data as $row) {
                 echo '<tr >
             <td>' . $row[0] . '</td>
             <td>' . $row[1] . '</td>
             <td>' . $row[2] . '</td>
          </tr>';
             }
         }
         else echo '<tr class="table-warning">
             <td></td>     
             <td>No data</td>   
             <td></td>
          </tr>';
         ?>
         </tbody>
     </table>
 </div>


