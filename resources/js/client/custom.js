//Sweet Alert
// import Swal from 'sweetalert2';
// window.swal = Swal;
// const toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000
// });

// const swalWithBootstrapButtons = Swal.mixin({
//     confirmButtonClass: 'btn btn-success',
//     cancelButtonClass: 'btn btn-danger',
//     buttonsStyling: false,
// })

// window.toast = toast;
// window.swalWithBootstrapButtons = swalWithBootstrapButtons;
import googleOneTap from 'google-one-tap';

const options = {
	client_id: '371297210976-v98ectkq5qpqoqerjb296rjm0gdg84bl.apps.googleusercontent.com', // required
	auto_select: false, // optional
	cancel_on_tap_outside: false, // optional
	context: 'signin', // optional
};

googleOneTap(options, (response) => {
	// Send response to server
	console.log(response);
});
