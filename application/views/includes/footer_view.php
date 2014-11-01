	<script src="<?=base_url('public/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('public/js/jquery.plugin.js')?>"></script>
    <script src="<?=base_url('public/js/jquery.calendars.js')?>"></script>
    <script src="<?=base_url('public/js/jquery.calendars.plus.js')?>"></script>
    <script src="<?=base_url('public/js/jquery.calendars.picker.js')?>"></script>
    <script src="<?=base_url('public/js/jquery.calendars.nepali.js')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script>
$( document ).ready(function() {
  // Handler for .ready() called.
    $('#popupDatepicker1').calendarsPicker({calendar: $.calendars.instance('nepali')});
    $('#popupDatepicker').calendarsPicker({calendar: $.calendars.instance('nepali')});

});
//	$.calendars.picker.setDefaults({renderer: $.calendars.picker.themeRollerRenderer}); // Requires jquery.calendars.picker.ext.js
	//var calendar = $.calendars.instance('persian');
	//$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate})
</script>

  </body>
</html>