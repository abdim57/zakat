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
one = document.autoSumForm.hrg_makan.value;
two = document.autoSumForm.pengganti.value;
three = document.autoSumForm.total_fidyah.value = (one * two);}

function stopCalc(){
clearInterval(interval);}
</script>

  <title>Sistem Informasi PYD</title>

</head>
<body class="sidebar-mini fixed">

        <div>
          <h1> Kalkulator Zakat Fidyah</h1>

      
     <div class="row">
        <div class="col-md-6">
          <div class="card">
            <form name="autoSumForm">
          <table class="table table-hover">
            <thead>
              <tr>
                <td><h4>Harga Makan Minimal perhari</h4></td>
                  <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="hrg_makan" style="color:black; font-size: 16px; text-align:right;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td><h4>Jumlah Hari tidak puasa (pengganti puasa)</h4></td>
                    <td>                    
                    <div class="form-group">
                      <input class="form-control" type="text" name="pengganti" style="color:black; font-size: 16px; text-align:right;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td bgcolor="#009933"><h4><b><font style="color:white">Zakat Fidyah yang dibayarkan</h4></td>
                    <td bgcolor="#009933">
                    <div class="form-group">
                      <input class="form-control" type="text" name="total_fidyah" readonly="readonly" placeholder="0" style="color:black; font-size: 16px; text-align:right; onkeydown="return numbersonly(this, event);" onFocus="startCalc();" onBlur="stopCalc();"> 
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