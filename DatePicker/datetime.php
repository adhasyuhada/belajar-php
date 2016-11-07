<!DOCTYPE html>
<html>
<title></title>
<head>
	<link rel="stylesheet" type="text/css" href="./datetimepicker-master/jquery.datetimepicker.css"/ >
</head>
<body>
<form>
	<input id="date_timepicker_start" name="start_date" type="text">
	<input id="date_timepicker_end" name="end_date" type="text">
	<input type="submit" value="hitung">
</form>	
<?php
function kalkulasi(){
$cal_start = strtotime($_GET["start_date"]);
$cal_end = strtotime($_GET["end_date"]);
if (!empty($cal_start && $cal_end)) {
	$calculate = ($cal_end - $cal_start) / (60 * 60 * 24);
	echo "<script>alert('Selisih $calculate Hari')</script>";
}
}
kalkulasi();
?>
</body>
	<script src="./datetimepicker-master/jquery.js"></script>
	<script src="datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
	<script>
jQuery(function(){
 jQuery('#date_timepicker_start').datetimepicker({
  format:'Y-m-d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
   })
  },
  timepicker:false
 });
 jQuery('#date_timepicker_end').datetimepicker({
  format:'Y-m-d',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
   })
  },
  timepicker:false
 });
});
	</script>
</html>