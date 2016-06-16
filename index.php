<html>
  <style>
  
    @font-face {
      font-family: "Product Sans";
      font-style: normal;
      font-weight: 400;
      src: local("Product Sans"), local("ProductSans-Regular"), url("https://fonts.gstatic.com/s/productsans/v7/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2") format("woff2");
      unicode-range: U+0-FF, U+131, U+152-153, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
    }
  
    body {
      font-family: Product Sans, 'helvetica neue',helvetica,arial,'lucida grande',sans-serif;
    }
    
    #yourLetter {
      width: 50%;
      height: 300px;
      margin-top: 200px;
    }
    
    .supportingFact {
      margin-left: 40px;
    }
  </style>
  <body>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1698769183709643',
      xfbml      : true,
      version    : 'v2.6'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };
  

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});
</script>

  <h1 id="fb-welcome"></h1>
 <div style="float: left">
    <h3>Write a letter to the evil despotic entity or *funny opposite here* of your choice!</h3>
    Recipient of your ire/admiration: <input type="text" size="30" id="recipient" name="recipient" /><br/>
    Pro / Con: <input type="radio" id="procon" name="procon" value="pro"/> Pro    <input type="radio" id="procon" name="procon" value="con"/> Con<br/>
    Greeting (todo): <select id="greeting" name="greeting"><option>Extreme</option><option>Cordial</option></select><br/>
    Supporting facts: <br/>
    <input class="supportingFact" type="checkbox" value="Bees are dying at an alarming rate">Bees are dying<br/>
    <input class="supportingFact" type="checkbox" value="Per capita, the United states is the leader in ferret-on-ferret voilence rates">Ferrer-on-ferret<br/>
    <input class="supportingFact" type="checkbox" value="The president of the United States of America, foremost leader of the free world, has not formally recognized any brand of laxatives as being his favorite">Presidential flow<br/>
    <input class="supportingFact" type="checkbox" value="Unfettered douchebaggery is the leading cause of birth defects in the third world">Those poor children<br/>
  </div>
  <div style="float: left"><img src="foundtain_pen_and_paper.png" /></div>
  
  <textarea name="yourLetter" id="yourLetter"></textarea>
  </body>
</html>
