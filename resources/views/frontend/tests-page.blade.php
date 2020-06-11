<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href="{{asset('css/tests-page.css')}}" />
      <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Comic Neue|Lobster|Yanone Kaffeesatz|Josefin Sans|Varela Round
  Anton|VT323|Pacifico|Geo|Questrial|Inconsolata|Kanit|Anton|Poppins|Hammersmith One|Kalam|Josefin Sans|Teko|Montserrat Alternates|Handlee|Ropa Sans|Russo One|Bellota|Electrolize|Prompt|Lobster Two|Source Code Pro|Questrial|Do Hyeon|Acme|Righteous|Kanit|Baloo Bhai 2">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<html>
<body>
  <div class="container-fluid">
      <div class="heading">
          <div class="row">
              <div class="col col-6">
                  <h5>Book a Diagnostic Test</h5>
              </div>
              <div class="col col-6 go" align="right">
                  <a href="home">Go back to Home</a>
              </div>
          </div>
      </div>
      <hr />
      <div class="container-fluid" id="titlebox">
          <h3>Please fill the details carefully inorder to get a diagnostic test registered for you. You cannot make any changes after submission. Upload a Prescription given by a registered doctor. Invalid prescriptions will be ruled out and legal action will be taken.
          </h3>
          <h6>Thank you. <br />Stay Safe and Stay Healthy.</h6>
      </div>
      <div class="tests" align="center">
      <form action="bookings-page" method="POST" enctype="multipart/form-data">
      @csrf
          <label>Select a Test/Tests</label><br />
          <select class="form-control" name="dropdown" required>
              <option value="default" selected>Select a Test</option>
              <option value="All in One" name="All in One">All in One(includes all the below tests)</option>
              <option value="Clinical Exam" name="Clinical Exam">Clinical exam</option>
                            <option value="MRI scan" name="MRI scan">MRI scan</option>
              <option value="X-Ray" name="X-Ray">X-ray</option>
              <option value="Biopsy" name="Biopsy">Biopsy</option>
              <option value="Mammography" name="Mammography">Mammography</option>
              <option value="Colonoscopy" name="Colonoscopy">Colonoscopy</option>
          </select>
          <br />
          <div class="row">
              <div class="choose">
                  <br />
                      <label> Upload Prescription</label><br />
                      <input type="file" id="myFile" name="prescription_image">
              </div>
          </div>
      </div>
      <br />
      <br />
      <div class="lab" align="center">
    <input type="button" id="btnGenerate" value="Get Lab names" onclick="PopulateDropDownList()" required/>
          <select id="ddlCustomers"name="labs">
    </select>
      </div>
      <br />
      <div class="continue" align="right">
          <button class="btn" type="submit">Continue</a></button>
      </div>
      <br />
      </form>
  </div>
</body>
</html>
<script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        function PopulateDropDownList() {
            //Build an array containing Customer records.
            var customers = [{"name":"SRI VENKATA SAI DIAGNOSTICS"},
            {"name":"VIJAYA DIAGNOSTIC CENTRE (YOUSUFGUDA)"},
            {"name":"SWETHA DIAGNOSTIC CENTRE (LB NAGAR)"},
            {"name":"MEDI POINT DIAGNOSTIC CENTRE(MALAKPET)"},
            {"name":"TAPADIA DIAGNOSTIC CENTRE (UPPAL)"},
            {"name":"THYROCARE BAGH AMBERPET"},
            {"name":"YOUSUF MEMORIAL DIAGNOSTIC CENTRE(RAJENDRANAGAR)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            {"name":"RAKSHA MEDINOSTICS(BOLARAM)"},
            ];
 
            var ddlCustomers = $("#ddlCustomers");
            $(customers).each(function () {
                var option = $("<option />");
 
                //Set Customer Name in Text part.
                option.html(this.name);
                //Add the Option element to DropDownList.
                ddlCustomers.append(option);
            });

        } 
    </script>

</script>
