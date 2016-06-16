<html>
  <style>
    body {
      font-family: Freight Sans, 'helvetica neue',helvetica,arial,'lucida grande',sans-serif;
    }
    
    #yourLetter {
      width: 50;
      height: 300px;
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
  <h3>Write a letter to the evil despotic entity or *funny opposite here* of your choice!</h3>
  Recipient of your ire/admiration: <input type="text" size="30" id="recipient" name="recipient" /><br/>
  Pro / Con: <input type="radio" id="procon" name="procon" value="pro"/> Pro    <input type="radio" id="procon" name="procon" value="con"/> Con<br/>
  </body>
</html>
