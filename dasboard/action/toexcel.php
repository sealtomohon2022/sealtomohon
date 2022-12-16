<?php 


include "../../koneksi/koneksi.php";


$data = mysqli_query($koneksi, "SELECT *FROM pangan");





header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Daftar_harga_bahan_pangan.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<html>
    <head></head>
    <body>

        <p>

        <h3>Data Harga Bahan Pangan Kota Tomohon</h3>

        <h4>Data per : 
            <?php 
                $mydate=getdate(date("U"));
                echo "$mydate[mday] $mydate[month] $mydate[year]";
            ?>
        </h4>
        
        </p>

        <table border="1" style="text-align: center;">
            <thead>
                <tr>
                    <th width="100">No</th>
                    <th width="200">Nama Pangan</th>
                    <th width="100">Harga Sebelum</th>
                    <th width="100">Harga Terkini</th>
                    <th width="100">Tanggal Perbarui Harga</th>
                    <th width="100">Status Harga</th>
                </tr>
            </thead>
            <tbody>
                
            <?php 
            $no = 1;
            foreach ($data as $d){

                $hargalama =  $d['harga_lama'];
                $hargabaru =  $d['harga_baru'];
                $status = "";

                
                if($hargalama == 0){
                    $status = "";
                }else if($hargalama == $hargabaru){
                    $status = "stabil";
                }else if($hargalama <= $hargabaru){
                    $status = "naik";
                }else if($hargalama >= $hargabaru){
                    $status = "turun";
                }

                

                ?>
                <tr style="text-align: center;">
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['nama_pangan'];?></td>
                    <td><?php echo number_format($d['harga_lama']);?></td>
                    <td><?php echo number_format($d['harga_baru']);?></td>
                    <td><?php echo $d['tanggal'];?></td>
                    <td><?php echo $status;?></td>
                </tr>


                <?php
            }
            
            
            ?>

            </tbody>
        </table>
    </body>
</html>