<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    @include('css.track')
    @include('css.style')
</head>

<body>
    <div class="track-page">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <div class="back-track">
                        <a href="/">
                            <div class="angle-left-dropdown" id="angle-left">
                                <i class="fa fa-angle-left"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="form-track">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-value">
                                    No.
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-value">{{ old('number', $request->number) }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="head-card">
                    <h4>Truck No. {{ $truck_detail->number }}</h4>
                    <div class="status-desc">{{ $getlaststatus->description }}</div>
                </div>

                <div class="detail-card">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="content-det">
                                <p>Truck Model</p>
                                <h6>{{ $truck_detail->TruckDes->truck_name }}</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="content-det">
                                <p>Size of Load</p>
                                <h6>{{ $truck_detail->TruckLoad->size }} / {{ $truck_detail->TruckDes->capacity }}</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="content-det">
                                <p>Estimated Time of Departure</p>
                                <h6>{{ optional($truck_detail->Routes->get(0))->date ?? 'N/A' }}</h6>
                            </div>
                        </div>
                        <div class="col-md-3 content-end">
                            <div class="content-det">
                                <p>Estimated Time of Arrival</p>
                                <h6>{{ optional($truck_detail->Routes->get(1))->date ?? 'N/A' }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-det-card">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="content-det">
                                <p>Location Departure</p>
                                <h3>{{ optional($truck_detail->Routes->get(0))->location_name ?? 'N/A' }}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-port">
                                <img src="12m.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 flex-end">
                            <div class="content-det">
                                <p>Location Arrival</p>
                                <h3>{{ optional($truck_detail->Routes->get(1))->location_name ?? 'N/A' }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="truck-detail">
                    <div class="det-content-truck" onclick="toggleTimeline()">
                        <p>Truck Details</p>
                        <div class="angle-up-dropdown" id="angle-up">
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="angle-up-dropdown" id="angle-down">
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="timeline-truck">

                        @foreach ($truck_detail->TruckEvents as $detail)
                            <div class="row">
                                <hr class="br-btm">
                                <div class="col-md-5">
                                    <div class="line-track">
                                        <div class="location-track">
                                            <h4>{{ $detail->location_name }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="part-right">
                                        <div class="line-track mb-cust-track">
                                            <div class="dashed-line">
                                            </div>
                                            <div
                                                class="location-track
                                                right  last-track ">
                                                <p>
                                                    {{ $detail->description }}
                                                </p>
                                                <div class="est-date">
                                                    @if ($detail->status_truck_event == '1')
                                                        <p class="actual-date">Actual Date</p>
                                                        <p class="time">
                                                            {{ \Carbon\Carbon::parse($detail->date)->format('Y-m-d') }}
                                                        </p>
                                                    @else
                                                        <p class="estimate-date">Estimate Date</p>
                                                        <p class="time">
                                                            {{ \Carbon\Carbon::parse($detail->date)->format('Y-m-d ') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
        function toggleTimeline(event) {
            var allTimelines = document.querySelectorAll('.timeline-truck');
            var allAnglesUp = document.querySelectorAll('#angle-up');
            var allAnglesDown = document.querySelectorAll('#angle-down');

            var card = event.target.closest('.card-container');
            var timelineShip = card.querySelector('.timeline-truck');
            var angleUp = card.querySelector('#angle-up');
            var angleDown = card.querySelector('#angle-down');

            allTimelines.forEach(function(timeline) {
                if (timeline !== timelineShip) {
                    timeline.style.display = 'none';
                }
            });

            allAnglesUp.forEach(function(angle) {
                if (angle !== angleUp) {
                    angle.style.display = 'block';
                }
            });
            allAnglesDown.forEach(function(angle) {
                if (angle !== angleDown) {
                    angle.style.display = 'none';
                }
            });

            if (timelineShip.style.display === 'none' || timelineShip.style.display === '') {
                timelineShip.style.display = 'block';
                angleUp.style.display = 'none';
                angleDown.style.display = 'block';
            } else {
                timelineShip.style.display = 'none';
                angleUp.style.display = 'block';
                angleDown.style.display = 'none';
            }
        }

        document.querySelectorAll('.det-content-truck').forEach(function(button) {
            button.addEventListener('click', toggleTimeline);
        });

        document.addEventListener('click', function(event) {
            var isClickInside = event.target.closest('.card-container');
            if (!isClickInside) {
                document.querySelectorAll('.timeline-truck').forEach(function(timeline) {
                    timeline.style.display = 'none';
                });

                document.querySelectorAll('#angle-up').forEach(function(angleUp) {
                    angleUp.style.display = 'block';
                });
                document.querySelectorAll('#angle-down').forEach(function(angleDown) {
                    angleDown.style.display = 'none';
                });
            }
        });
    </script>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>
