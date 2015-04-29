<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5">
            <h1>Alamat Kami</h1>
			<div id="gmap" align="center" width="100%" border="1">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5580068245804!2d112.80146290000002!3d-7.291022299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa71af45bd3f%3A0x51b658daf60fa472!2sJl.+Keputih+Tegal+No.25%2C+Sukolilo%2C+Kota+SBY%2C+Jawa+Tim.+60111!5e0!3m2!1sid!2sid!4v1429710433806" width="100%" height="400" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
		<div class="col-lg-5 col-md-5">
			<div style="margin-top:60px">
				<table width="100%">
					<tr>
						<td valign="middle" align="center" width="20%">
							<img width="70%" src="<?php echo base_url('assets/images/location.png'); ?>" />
						</td>
						<td valign="middle" align="left" width="80%">
							Jln. Keputih Tegal No.25<br>Surabaya<br>60111
						</td>
					</tr>
					<tr>
						<td valign="middle" align="center">
							<img width="90%" src="<?php echo base_url('assets/images/phone.png'); ?>" />
						</td>
						<td valign="middle" align="left">
							031 595 0250<br>
							085 731 111 14
						</td>
					</tr>
					<tr>
						<td valign="middle" align="center">
							<img width="100%" src="<?php echo base_url('assets/images/mail.png'); ?>" />
						</td>
						<td valign="middle" align="left">
							septa.karya.pratama@gmail.com
						</td>
					</tr>
				</table>
			</div>
		</div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize()
    {
        var mapProp =
                {
                    center: new google.maps.LatLng(-7.2633194, 112.7692121),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>