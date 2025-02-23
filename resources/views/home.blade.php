<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    @include('css.home')
    @include('css.style')


</head>

<body>
    <div class="home-page">
        <section class="home-banner content-center">
            <div class="shadow-bn"></div>
            <div class="container">
                <div class="title-bn p-relative">
                    <h1>Truck Tracking</h1>
                    <p>Monitor and manage the real-time status of your trucking, ensuring seamless
                        logistics and timely deliveries</p>
                    <form action="/track" method="get" id="truckForm">
                        @csrf
                        <div class="form-track">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="number"
                                        style="background-color: #F3F5F9 !important;padding: 15px 20px;
    border-radius: 10px;
    color: #65706B;font-family: 'Roboto';
    font-size: 18px;
    font-weight: 400;
    line-height: 32px;
    text-align: left;
    width: 100%;">
                                        No.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-select-track track-input">
                                        <input type="text" name="number" placeholder="Input Truck No. Here"
                                            id="number" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn-track" data-bs-toggle="modal"
                                        data-bs-target="#botValidateModal">
                                        Track Now
                                    </button>

                                </div>
                            </div>
                            @if (session('error'))
                                <div class="error-field">{{ session('error') }}</div>
                            @endif
                        </div>
                    </form>
                </div>

                <div class="modal fade" id="botValidateModal" tabindex="-1" role="dialog"
                    aria-labelledby="botValidateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h4>We want to make sure it is actually you we are dealing with and not a robot</h4>
                            <p>Please confirm below to access the site</p>

                            <div class="btn-captcha">
                                <button type="button" class="btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn-confirm" id="confirmTrack">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-maxlength/1.10.0/bootstrap-maxlength.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('confirmTrack').addEventListener('click', function() {
            document.getElementById('truckForm').submit();
        });
    </script>

</body>

</html>
