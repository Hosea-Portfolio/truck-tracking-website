<style>
    body {
        margin: 0;
    }



    /* captcha */
    .home-banner {
        background-image: url("truck.jpg");
        background-position: bottom;
        background-size: cover;
        width: 100%;
        position: relative;
        min-height: 100vh;
        padding: 100px 0;
    }



    .content-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .shadow-bn {
        background: linear-gradient(180deg, rgba(30, 30, 30, 0.8) 0%, rgba(132, 132, 132, 0) 100%);
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
    }

    .p-relative {
        position: relative;
    }

    .title-bn {
        margin-top: -60px;
    }


    .title-bn h1 {
        color: #FFFFFF;
        font-family: 'Roboto';
        font-size: 64px;
        font-weight: 700;
        line-height: 75px;
        text-align: center;
        margin: 0 auto;
    }

    .title-bn p {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        letter-spacing: 0em;
        text-align: center;
        color: #fff;
        max-width: 60%;
        margin: 20px auto 40px auto;
    }

    .form-track {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 8px 8px 15px 0px #00000026;
        padding: 10px;
    }




    .form-select-track {
        position: relative;
    }

    .track-input input {
        background-color: #F3F5F9 !important;
        border: none;
        padding: 15px 20px;
        border-radius: 10px;
        color: #65706B;
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: left;
        width: 100%;
    }


    input:focus-visible {
        outline: none;
    }

    .error-field {
        color: #D00909;
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: left;
        padding-top: 6px;
    }

    .btn-confirm {
        background-color: #fcbd18
    }

    .btn-cancel {
        border-color: #fcbd18
    }

    .btn-track {
        background-color: #fcbd18;
        padding: 15px;
        border-radius: 10px;
        width: 100%;
        height: auto;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        color: #000;
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 500;
        line-height: 32px;
        text-align: center;
    }


    .btn-track:hover {
        background-color: #d4c397;
    }

    .row {
        margin-right: 0 !important;
    }

    .row>* {
        padding-right: 0 !important;
    }

    /* Modal */

    .modal {
        /* top: 35% !important; */
        bottom: 0;
        height: max-content !important;
        width: auto !important;
        right: 0;
        margin: auto;
    }

    .modal-backdrop {
        background: #00000040 !important;
    }

    .modal-backdrop.show {
        opacity: 1 !important;
    }

    .modal-content {
        box-shadow: 8px 8px 15px 0px #00000026 !important;
        padding: 50px 40px !important;
        border-radius: 10px !important;
        border: none !important;
    }

    .modal-content h4 {
        font-family: 'Roboto';
        font-size: 24px;
        font-weight: 600;
        line-height: 34px;
        text-align: center;
        color: #000;
    }

    .modal-content p {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: center;
        color: #65706B;
        padding: 10px 0 20px 0;
    }

    /* end modal */
</style>
