<!DOCTYPE html>
  <html>
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/mystyle.css"/>
      <script>
        var dataObj = {
          "Apple": null,
          "Microsoft": null,
          "Google": null
        }
        $(document).ready(function(){
          $('input.autocomplete').autocomplete({
            data: dataObj,
          });
        });
      </script>
      <title>FOX Forums</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">one</a></li>
          <li><a href="#!">two</a></li>
          <li class="divider"></li>
          <li><a href="#!">three</a></li>
        </ul>
        <nav>
          <div class="nav-wrapper red accent-4">
            <a href="#!" class="brand-logo left responsive-img"><img src="img/fox-logo.png" style="object-fit: contain; width:auto; height: 64px" alt=""></a>
            <ul class="right">
              <li><a href="#">Menu Hit 1</a></li>
              <li><a href="#">Menu Hit 2</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-trigger" href="" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
          </div>
        </nav>
      </header>
        
      <main>
        <!-- Page Layout here -->
        <div class="container">
          <h1>Welcome!</h1>
          <p>Test for the landing page.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus, orci quis sagittis commodo, lacus sapien congue ligula, quis tempor eros metus vel lectus. Vivamus sit amet porttitor ex. Ut non elit vulputate, lobortis justo ac, sodales ex. Cras gravida aliquam felis, id sagittis felis efficitur non. Etiam vel purus convallis, eleifend orci in, rutrum dui. Fusce gravida congue imperdiet. Phasellus ac luctus urna, et pulvinar risus. Phasellus suscipit tortor in nunc finibus, sit amet feugiat justo aliquam. Sed eget metus eu ante porta finibus. Morbi eget sapien eget mauris pretium fringilla. Duis volutpat dignissim consequat. Nullam mauris sapien, malesuada eget velit pulvinar, efficitur sagittis ex. Nullam fermentum pharetra ex eget pretium. Vestibulum vel laoreet risus.</p>
	  <blockquote><?php echo phpversion(); ?></blockquote>
          <div class="row">
            <form class="col s6">
              <div class="row">
                <h3>PoC 1</h3>
                <div class="input-field col s12">
                  <i class="material-icons prefix">textsms</i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">This autocomplete input box has a XSS vulnerability! Find it!</label>
                  <a class="waves-effect waves-light btn" onclick="addElement();">button</a>
                  <!-- what -->
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </main>
          
      <footer class="page-footer" style="background-color: rgba(0,0,0,0)!important;">
        <div class="footer-copyright red accent-4">
          <div class="container">
            2023 - Nuno Dias, CELFOCUS
            <a class="grey-text text-lighten-4 right" href="#">More Links</a>
          </div>
        </div>
      </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="./js/materialize.js"></script>
      <script type="text/javascript" src="./js/myjs.js"></script>
      <script>
        function addElement(){
          let newEntry = $('input.autocomplete').val();
          console.log(newEntry);
          dataObj[newEntry] = null;
          $('input.autocomplete').autocomplete("updateData", dataObj);
        }
      </script>
    </body>
  </html>
