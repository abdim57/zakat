<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  <!-- javascript -->
  <script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
satu = document.autoSumForm.gaji.value;
dua = document.autoSumForm.bonus.value;
tiga = document.autoSumForm.pokokhutang.value;
empat = document.autoSumForm.pendapatanperbulan.value = (satu * 1) + (dua * 1) - (tiga * 1);
lima = document.autoSumForm.hargaberas.value;
enam = document.autoSumForm.nishab.value = (lima * 1) * (520);

if (empat>=enam)
  ket="YA";
else 
  ket="TIDAK";
tujuh = document.autoSumForm.ketentuan.value=ket;

if (empat>=enam)
  hitungbulan=(empat*1) * (2.5) / (100);
else
  hitungbulan=(0);
delapan = document.autoSumForm.jumlahperbulan.value=hitungbulan;

if (empat>=enam)
  hitungtahun=(empat*1) * (2.5) / (100) * (12);
else
  hitungtahun=(0);
delapan = document.autoSumForm.jumlahpertahun.value=hitungtahun;
}


function stopCalc(){
clearInterval(interval);}
</script>

  <title>Sistem Informasi PYD</title>

</head>
<body class="sidebar-mini fixed">
  <div class="wrapper">
          <h1> Kalkulator Zakat Penghasilan</h1>
          <!-- <p>Sample forms</p> -->


      
     <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form name="autoSumForm">
          <table class="table table-hover">
            <thead>
              <tr>
                <td><h4>Penghasilan per Bulan</h4></td>
                  <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="gaji" style="color:black; font-size: 16px; text-align:right;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td><h4>Bonus Pendapatan dan Lain-lain  (per Bulan)</h4></td>
                    <td>                    
                    <div class="form-group">
                      <input class="form-control" type="text" name="bonus" placeholder="0" style="color:black; font-size: 16px; text-align:right;" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td><h4>Pengeluaran Kebutuhan Pokok (termasuk hutang jatuh tempo) per Bulan</h4></td>
                    <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="pokokhutang" placeholder="0" style="color:black; font-size: 16px; text-align:right;" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td><h4>Pemasukan/Pendapatan per Bulan</h4></td>
                    <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="pendapatanperbulan" readonly="readonly" placeholder="0" style="color:black; font-size: 16px; text-align:right; onFocus="startCalc();" onBlur="stopCalc();"> 
                    </td>
                  </div></td>
              </tr>
                <tr>
                    <td><h4>Harga Beras Saat Ini (per kg) *</h4></td>
                    <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="hargaberas" placeholder="0" style="color:black; font-size: 16px; text-align:right;" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                <tr>
                    <td><h4>NISHAB (520 kg beras)</h4></td>
                    <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nishab" readonly="readonly" placeholder="0" style="color:black; font-size: 16px; text-align:right; onFocus="startCalc();" onBlur="stopCalc();"> 
                    </td>
                  </div></td>
              </tr>
                <tr>
                    <td><h4>Apakah Wajib Membayar Zakat Penghasilan?</h4></td>
                    <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="ketentuan" placeholder="TIDAK" readonly="readonly" style="color:black; font-size: 16px; text-align:right;">
                    </td>
                  </div></td>
              </tr> 
                <tr>
                    <td bgcolor="#009933"><h4><b><font style="color:white">JUMLAH ZAKAT PER BULAN</b></h4></td>
                    <td bgcolor="#009933">
                    <div class="form-group">
                      <input class="form-control" type="text" name="jumlahperbulan" placeholder="0" readonly="readonly" style="color:black; font-size: 16px; text-align:right;">
                    </td>
                  </div></td>
              </tr> 
               <tr>
                    <td bgcolor="#009933"><h4><b><font style="color:white">JUMLAH ZAKAT PER TAHUN</b></h4></td>
                    <td bgcolor="#009933">
                    <div class="form-group">
                      <input class="form-control" type="text" name="jumlahpertahun" readonly="readonly" placeholder="0" style="color:black; font-size: 16px; text-align:right;">
                    </td>
                  </div></td>
              </tr> 
             </thead>
           </table>
         </form>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/my.js"></script>

  </body>
</html>