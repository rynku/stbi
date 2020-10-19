<html>
<body>
    <div>

            <table>
                    <tr>
                          <th class="font-weight-bold">Nama File</th>
                          <th class="font-weight-bold">Tokenisasi</th>
                          <th class="font-weight-bold">TokenStem</th>
                    </tr>
<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);

$servername = "localhost";
$username = "id14973667_root2";
$password = "c1J?Tlq{Q~OxkZ*i";
$dbname = "id14973667_stbi2";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
// $sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";


echo $sql;
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<tbody>
                                  <tr>
                                    <td> '.$row['nama_file'].'</td>
                                    <td> '.$row['token'].'</td>
                                    <td> '.$row['tokenstem'].'</td>
                                  </tr>
                                </tbody';
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>
</table>
</div>
</body>
</html>