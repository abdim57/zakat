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
one = document.autoSumForm.hrg_beras.value;
two = document.autoSumForm.jiwa.value = (one*3.5);
three = document.autoSumForm.total_jiwa.value;
four = document.autoSumForm.total_zakat.value = (three * two);}

function stopCalc(){
clearInterval(interval);}
</script>

  <title>Sistem Informasi PYD</title>

</head>
<body class="sidebar-mini fixed">

          <h1> Kalulator Zakat Fitrah</h1>
          <!-- <p>Sample forms</p> -->

     <div class="row">
        <div class="col-md-6">
          <div class="card">
            <form name="autoSumForm">
          <table class="table table-hover">
            <thead>
              <tr>
                <td><h4>Harga beras saat ini (/Liter)</h4></td>
                  <td>
                    <div class="form-group">
                      <input class="form-control" type="text" name="hrg_beras" id="rupiah" style="color:black; font-size: 16px; text-align:right;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td><h4>Zakat Fitrah per Jiwa (3,5 Liter)</h4></td>
                    <td>                    
                    <div class="form-group">
                      <input class="form-control" type="text" name="jiwa" id="rupiah" readonly="readonly" style="color:black; font-size: 16px; text-align:right;" onFocus="startCalc();" onBlur="stopCalc();" >
                    </td>
                </div></td></tr>
                <tr>
                    <td bgcolor="#009933"><h4><b><font style="color:white">Total Jiwa yang membayar Zakat Fitrah</h4></td>
                    <td bgcolor="#009933">
                    <div class="form-group">
                      <input class="form-control" type="text" name="total_jiwa" id="rupiah" placeholder="0" style="color:black; font-size: 16px; text-align:right; onkeydown="return numbersonly(this, event);" onFocus="startCalc();" onBlur="stopCalc();"" /> 
                    </td>
                  </div></td>
              </tr>
                <tr>
                    <td bgcolor="#009933"><h4><b><font style="color:white">Zakat Fitrah yang dibayarkan</b></h4></td>
                    <td bgcolor="#009933">
                    <div class="form-group">
                      <input class="form-control" type="text" name="total_zakat" readonly="readonly" style="color:black; font-size: 16px; text-align:right; onkeydown="return numbersonly(this, event);" >
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

	
		<script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});

		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>
  </body>
</html>