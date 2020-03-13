<?php
// Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>	

<script>
	// Mensagem
window.onload = function() {
	toastr.options = {
		"closeButton": false,
		"debug": false,
		"newestOnTop": false,
		"progressBar": false,
		"positionClass": "toast-top-right",
		"preventDuplicates": true,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
	var flag=false;
	setInterval(function() {
		if(!flag){
			flag=true;//store this to compare later
			toastr.info("<?php echo $_SESSION['mensagem']; ?>", "Atenção!");
 	
		} },1000);
}
</script>

<?php
endif;
session_unset();
?>
