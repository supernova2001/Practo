<head>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href="{{asset('css/list_of_bookings.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Comic Neue|Lobster|Yanone Kaffeesatz|Prompt|Taviraj|Anton|VT323|Pacifico|Geo|Questrial|Inconsolata|Kanit|Anton|Poppins|Hammersmith One|Kalam|Josefin Sans|Teko|Montserrat Alternates|Handlee|Ropa Sans|Russo One|Bellota|Electrolize|Prompt|Lobster Two|Source Code Pro|Questrial|Do Hyeon|Acme|Righteous|Kanit|Baloo Bhai 2">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="heading">
            <h3>List of Bookings</h3>
            <br />
            <br />
            <table class="table table-bordered table-hover table-lg-responsive">
                <thead>
                    <tr>
                        <th scope="col">User-Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">EmailId</th>
                        <th scope="col">PhoneNumber</th>
                        <th scope="col">test-Name</th>
                        <th scope="col">Lab-Name</th>
                       <th scope="col">Date</th>
                       <th scope="col">Time-Slot</th>


                    </tr>
                </thead>
                <tbody>
                @foreach($data as $value){
                    <tr>
                        <td>{{$value->user_id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->emailid}}</td>
                        <td>{{$value->phonenumber}}</td>
                        <td>{{$value->mentorminds->test_name}}</td>
                        <td>{{$value->mentorminds->lab_name}}</td>
                        <td>{{$value->date_of_test}}</td>
                        <td>{{$value->time_slot}}</td>

                    </tr>
                    }
                @endforeach
</body>
</html>
