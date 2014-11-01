<div class="container">
	<div class="col-md-6">a</div>
<div class="col-md-6">
<form class="form-horizontal" role="form" action="<?=site_url('book/test')?>" method="POST" id="fr1">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div> <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label"></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="From" id="popupDatepicker" name="dt1">
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="popupDatepicker1" name="dt2" placeholder="To">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" id="sbt">Sign in</button>
    </div>
  </div>
</form>
</div>
</div>
<script>
$( document ).ready(function() {
   $("#fr1").on("submit",function(evt){
   		evt.preventDefault();
   		//alert("testing");
   		var str = $( "form" ).serialize();
   		var url=$("form").attr('action');

   		$.post(url,str,function(data){
        alert('success');
      });
   		//console.log(str);
   		//console.log( $( this ).serialize() );

   });
});

</script>