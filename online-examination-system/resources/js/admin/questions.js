require ('../bootstrap');
import Swal from 'sweetalert2'

$(document).ready(function () {
    const Uri = window.location.href;
    $('#save-question').click(function () {
        const question = $('#exam-question').val();
        Swal.fire({
            icon: 'warning',
            title: 'Save a question. Are you sure?',
            text: "To save a question, click Yes",
            showCancelButton: true,
            confirmButtonText: 'Yes, save!',
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
                return axios.put(`${Uri}`, {
                    question: question,
                })
                    .then(response => {
                        if(response.data.success) {
                            return {
                                icon: 'success',
                                title: 'Question saved',
                                text: response.data.message,
                                confirmButtonText: 'Done!',
                            };
                        } else {
                            return {
                                icon: 'error',
                                title: 'Oops! an error',
                                text: response.data.message,
                                confirmButtonText: 'Done!',
                            };
                        }
                    })
                    .catch(error => {
                        const errorMessages = error.response.data.errors;
                        let html = ``;
                        for(let x in errorMessages) {
                            html += `<li class="text-start px-4">${errorMessages[x]}</li>`;
                        }
                        html = `<ul>${html}</ul>`;
                        return {
                            icon: 'warning',
                            title: 'Validation error!',
                            confirmButtonText: 'Done!',
                            html: html,
                        };
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            let props = {
                background: '#212121',
                customClass: {
                    title: 'dark__swal__title',
                    icon: 'dark__swal__icon',
                    htmlContainer: 'dark__swal__html__container',
                    confirmButton: 'dark__swal__confirm__button',
                },
            };
            if (result.isConfirmed) {
                props = Object.assign(props, result.value)
                Swal.fire(props);
            }
        });
    });

    $('#delete-question').click(function () {
        Swal.fire({
            icon: 'warning',
            title: 'Delete question. Are you sure?',
            text: "To delete the question, click Yes",
            showCancelButton: true,
            confirmButtonText: `Yes, delete!`,
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
                return axios.delete(`${Uri}`)
                    .then(response => {
                        if(response.data.success) {
                            return {
                                icon: 'success',
                                title: 'Question deleted',
                                text: response.data.message,
                                allowOutsideClick: false,
                                allowScapeKey: false,
                                confirmButtonText: `<a onclick="window.location.href='${response.data.redirect}'">Done!</a>`,
                            };
                        } else {
                            return {
                                icon: 'error',
                                title: 'Oops! an error',
                                text: response.data.message,
                                confirmButtonText: 'Cancel!',
                                confirmButtonColor: '#6e7881',
                            };
                        }
                    })
                    .catch(error => {
                        const errorMessages = error.response.data.errors;
                        let html = ``;
                        for(let x in errorMessages) {
                            html += `<li class="text-start px-4">${errorMessages[x]}</li>`;
                        }
                        html = `<ul>${html}</ul>`;
                        return {
                            icon: 'warning',
                            title: 'Validation error!',
                            confirmButtonText: 'Done!',
                            html: html,
                        };
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            let props = {
                background: '#212121',
                customClass: {
                    title: 'dark__swal__title',
                    icon: 'dark__swal__icon',
                    htmlContainer: 'dark__swal__html__container',
                    confirmButton: 'dark__swal__confirm__button',
                },
            };
            if (result.isConfirmed) {
                props = Object.assign(props, result.value)
                Swal.fire(props);
            }
        });
    });
});
