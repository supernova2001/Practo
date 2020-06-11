<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href="{{asset('css/bookings-page.css')}}" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Comic Neue|Lobster|Yanone Kaffeesatz|Prompt|Taviraj|Anton|VT323|Pacifico|Geo|Questrial|Inconsolata|Kanit|Anton|Poppins|Hammersmith One|Kalam|Josefin Sans|Teko|Montserrat Alternates|Handlee|Ropa Sans|Russo One|Bellota|Electrolize|Prompt|Lobster Two|Source Code Pro|Questrial|Do Hyeon|Acme|Righteous|Kanit|Baloo Bhai 2">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<html>
<body>
    <div class="container-fluid">
        <div class="heading" align="right">
            <a href="tests-page">Go back to the Previous page</a>
        </div>
        <hr />
    <div class="row first">
   <form action="submit" method="POST">
   @csrf
  <div class="form-row">
    <div class="col col-6">
      <label for="validationCustom01">Name</label>
      <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="First name">
    </div>
    <div class="col col-6">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="email" class="form-control" name="mailid" id="validationCustomUsername" placeholder="Email Id"
          aria-describedby="inputGroupPrepend">
      </div>
    </div>
  </div>
    <div class="form-row">
  <div class="col col-6">
      <label for="validationCustom04">Date</label>
   <input type="date" class="form-control" id="validationCustom04" name="on"
       value="YYYY-MM-DD"
       min="1900-01-01" max="2030-12-31" required>
    </div>
    <div class="col col-6">
      <label for="validationCustom05">Slot</label>
        <div class="form-group">
    <select class="custom-select browser-default"  name="time" required>
      <option value="">Select a Slot</option>
      <option value="9-11">9:00-11:00 AM</option>
      <option value="1-3">1:00-3:00 PM</option>
      <option value="4-7">4:30-7:00 PM</option>
    </select>
  </div>
  </div>
  </div>
  <div class="form-row">
    <div class="col col-6">
      <label for="validationCustom03">PhoneNumber</label>
      <input type="number" class="form-control" name="number" id="validationCustom03" placeholder="PhoneNumber">

   <div class="form-group" id="textarea">


                                           <label>Delivery Address</label><br />
                                           <textarea class="form-control" rows="5" cols="50" id="comment"></textarea>
        </div>
    </div>
    </div>
    <div class="buttons">
        <div class="row">
            <div class="col col-4">
            <button type="submit"class="btn"id="save">Save and Submit</button>
                </div>
        </div>
    </div>
</form>
</body>
</html>
