<style>
    body {
        margin: 0;
        background-color: #F3F5F9;
        padding-top: 50px;
    }

    .track-page {
        margin-bottom: 100px;
    }


    .content-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .back-track {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 8px 8px 15px 0px #00000026;
        padding: 10px;
        height: 100%;
    }

    .back-track a {
        background-color: #F3F5F9;
        padding: 10px;
        border-radius: 10px;
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;
    }

    .form-track {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 8px 8px 15px 0px #00000026;
        padding: 10px;
    }






    .form-value {
        background: #F3F5F9;
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

    .form-value p {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
    }


    .fa-angle-left:before {
        font-family: 'FontAwesome';
        content: '\f104';
        color: #000;
        font-weight: bold;
        font-size: 24px;
    }

    .fa-angle-up:before {
        font-family: 'FontAwesome';
        content: '\f107';
        color: #65706B;
        font-weight: bold;
        font-size: 20px;
    }

    #angle-down {
        display: none;
    }

    .fa-angle-down:before {
        font-family: 'FontAwesome';
        content: '\f106';
        color: #000;
        font-weight: bold;
        font-size: 24px;
    }

    .angle-up-dropdown {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .row {
        margin-right: 0 !important;
    }

    .row>* {
        padding-right: 0 !important;
    }


    /* Card Container */

    .card-container {
        background-color: #fff;
        border-radius: 10px;
        margin-top: 20px;
    }

    .head-card {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #E5E7E9;
    }

    .card-export {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 10px;

    }

    .card-export h4 {
        font-family: 'Roboto';
        font-size: 32px;
        font-weight: 600;
        line-height: 43px;
        text-align: left;
        margin: 0;
        padding: 25px 20px;
    }

    .head-card h4 {
        font-family: 'Roboto';
        font-size: 24px;
        font-weight: 600;
        line-height: 43px;
        text-align: left;
        color: #000;
        margin: 0;
    }

    .head-card .status-desc {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: left;
        color: #000;
        padding: 15px 40px;
        background-color: #F3F5F9;
        border-radius: 100px;
        width: auto;
    }

    .detail-card,
    .img-det-card {
        padding: 20px;
        margin-bottom: 20px;
    }

    .content-det p {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: left;
        color: #65706B;
        margin: 0;
    }

    .content-det h3 {
        font-family: 'Roboto';
        font-size: 32px;
        font-weight: 600;
        line-height: 43px;
        text-align: left;
        color: #000;
        margin: 0;
    }

    .content-det h6 {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 600;
        line-height: 32px;
        text-align: left;
        color: #1E1C28;
        margin: 0;
    }

    .img-port img {
        width: 100%;
    }

    .img-det-card .col-md-6 {
        display: flex;
        align-items: center;
    }

    .flex-end,
    .content-end {
        display: flex;
        justify-content: end;
    }

    .flex-end .content-det h3,
    .flex-end .content-det h6,
    .flex-end .content-det p {
        text-align: end;
    }

    /* End Card Container */





    .truck-detail {
        border-top: 2px solid #E5E7E9;
        padding: 20px;
    }

    .det-content-truck {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .det-content-truck p {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 600;
        line-height: 32px;
        text-align: left;
        color: #1E1C28;
        padding-right: 10px;
    }

    .det-content-truck .fa-angle-up:before {
        color: #1E1C28;
    }

    .location-track h4 {
        font-family: 'Roboto';
        font-size: 24px;
        font-weight: 600;
        line-height: 43px;
        text-align: right;
        color: #1E1C28;
    }

    .location-track p {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: right;
        color: #65706B;
    }

    .timeline-truck {
        display: none;
        /* margin: 40px auto 0 auto; */
        position: relative;
        transition: all 0.3s ease-in-out;
        padding-top: 30px;
    }

    .timeline-truck .br-btm {
        width: 100%;
        opacity: 1;
        border: 1.5px solid #E5E7E9;
        margin: 0;
        background-color: #E5E7E9;
        margin-top: -15px;
        margin-bottom: 20px;
    }

    .line-track {
        position: relative;
    }

    .right::before {
        content: '';
        position: absolute;
        width: 18px;
        height: 18px;
        left: -67px;
        background-color: #123C69;
        box-shadow: 0px 0px 6px 5px #123C6940;
        top: 11px;
        border-radius: 50%;
        z-index: 1;
    }

    .last-track::before {
        background: #fcbd18;
        box-shadow: 0px 0px 6px 5px #fcbd1866;
    }

    /* height line if 1 line */
    .dashed-line {
        position: absolute;
        width: 5px;
        left: -60.6px;
        height: 120px;
        top: 22px;
        bottom: 10px;
        background: repeating-linear-gradient(to bottom,
                #E5E7E9,
                #E5E7E9 12px,
                transparent 8px,
                transparent 20px);
    }

    /* height line if 3 line */
    .dashed-line3 {
        height: 180px;
    }

    /* height line if 4 line */
    .dashed-line4 {
        height: 205px;
    }

    /* height line if 5 line */
    .dashed-line5 {
        height: 240px;
    }

    /* height line if 6 line */
    .dashed-line6 {
        height: 270px;
    }

    .right p {
        text-align: left;
        margin-bottom: 5px;
    }

    .est-date {
        display: flex;
        align-items: center;
    }

    .est-date p {
        margin-bottom: 0;
    }

    .est-date .actual-date {
        color: #FFFFFF;
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: center;
        background-color: #fcbd18;
        padding: 2px 20px;
        border-radius: 100px;
        margin-right: 10px;
    }

    .est-date .estimate-date {
        color: #7C7C7C;
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: center;
        background-color: #E5E7E9;
        padding: 2px 20px;
        border-radius: 100px;
        margin-right: 10px;
    }

    .est-date .time {
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 600;
        line-height: 32px;
        text-align: left;
        color: #1E1C28;
    }

    .mb-cust-track {
        margin-bottom: 40px;
    }




    .relative-sect {
        position: relative;
    }

    .option-container {
        height: 270px;
        transition: height 0.3s ease;
        /* right: 160px; */
    }

    .text-danger {
        margin-top: 15px;
    }


    .option-container select {
        box-shadow: 0px 3px 27px 0px #123C6926;
        border: none;
        background: #fff;
        padding: 10px 24px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 400;
        line-height: 21px;
        letter-spacing: 0em;
        text-align: left;
        letter-spacing: 0em;
        color: #87888B;
        width: 100%;
    }

    .option-container select:focus-visible {
        outline: none;
    }

    .custom-select {
        height: 250px;
        width: 100%;
        position: relative;
    }

    .custom-select option {
        width: 30%;
    }

    .btn-close-menu {
        display: none;
    }

    #dropdownContainer.hidden {
        display: none;
    }

    .search-container input,
    .dropdown-container input {
        border: none;
        padding: 10px 24px;
        font-family: 'Roboto';
        font-size: 18px;
        font-weight: 400;
        line-height: 32px;
        text-align: left;
        color: #65706B;
        border-radius: 10px;
        position: relative;
        width: 100%;
        background-color: #F3F5F9;
    }

    .input-form-navbar:focus-visible,
    input:focus-visible {
        outline: none;
        border: none;
    }

    .angle-down-search,
    .angle-up-search {
        position: absolute;
        top: 18px;
        right: 18px;
    }
</style>
