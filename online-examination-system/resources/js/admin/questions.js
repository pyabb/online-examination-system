require ('../bootstrap');
import Swal from 'sweetalert2'

$(document).ready(function () {
    const uri = process.env.MIX_APP_URL || $("meta[name='webpage']").attr('content');
    //const answersContainer = $('#answers-container');
    $('#save-question').click(function () {
        const examId = $('#exam-id').attr('data-exam-id');
        const question = $('#exam-question').val();
        let message;
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
                //inputquestion = question;
                //return question;
                return axios.post(`${uri}/admin/exams/questions`, {
                    question: question,
                    examId: examId,
                })
                    .then(response => {
                        /*if (!response.ok) {
                            throw new Error(response.statusText)
                        }*/
                        console.log('llegamos pape');
                        console.log(response.data);
                        console.log(response.status);
                        return response.data;
                    })/*
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
                    })*/
                    .catch(error => {
                        /*Swal.showValidationMessage(
                            `Request failed: ${error}`
                        )*/
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
                        /*Swal.fire({
                            title: 'Validation error!',
                            icon: 'warning',
                            html: `<ul>${html}</ul>`,
                            confirmButtonText: 'Done!',
                        });*/
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            //console.log(result.value);
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

                /*Swal.fire({
                    icon: data.icon,
                    title: data.title,
                    text: message,
                    background: '#212121',

                })*/
            }
        });
    });
});
