function error_msg(err){
	toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": true,
			  "positionClass": "toast-bottom-full-width",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": 0,
			  "extendedTimeOut": 0,
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut",
			  "tapToDismiss": true
			}
	toastr.error(err);
}

function success_msg(msg){
	toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": true,
			  "positionClass": "toast-bottom-full-width",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": 0,
			  "extendedTimeOut": 0,
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut",
			  "tapToDismiss": true
			}
	toastr.success(msg);
}