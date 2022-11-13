require ('../bootstrap');
import Swal from 'sweetalert2'

$(document).ready(function () {
    const uri = process.env.MIX_APP_URL || $("meta[name='webpage']").attr('content');
    const table = $('#responsive-datatable').DataTable();
    const tableBody= $('#responsive-datatable tbody');
    tableBody.on('click', '#bDel', function () {
        const id = $(this).parents('tr').attr('data-id');
        let message;
        let data = {};
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: "Are you sure you want to permanently remove this student?",
            showCancelButton: true,
            confirmButtonText: 'Yes, delete!',
            cancelButtonText: 'Cancel',
            showLoaderOnConfirm: true,
            background: '#212121',
            customClass: {
                title: 'dark__swal__title',
                icon: 'dark__swal__icon',
                htmlContainer: 'dark__swal__html__container',
                confirmButton: 'dark__swal__confirm__button',
            },
            preConfirm: () => {
                return axios.delete(`${uri}/admin/students/${id}`, {})
                    .then(response => {
                        /*if (!response.ok) {
                            throw new Error(response.statusText)
                        }*/
                        return response.data;
                    })
                    .then(response => {
                        //console.log(response);
                        message = response.message;
                        if(response.success) {
                            data.icon = 'success';
                            data.title = 'Deleted'
                            table
                                .row( $(this).parents('tr') )
                                .remove()
                                .draw();
                        } else {
                            data.title = 'Oops! an error';
                            data.icon = 'error';
                        }
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                            `Request failed: ${error}`
                        )
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: data.icon,
                    title: data.title,
                    text: message,
                    background: '#212121',
                    customClass: {
                        title: 'dark__swal__title',
                        icon: 'dark__swal__icon',
                        htmlContainer: 'dark__swal__html__container',
                        confirmButton: 'dark__swal__confirm__button',
                    },
                })
            }
        });
    });
});
