<!DOCTYPE html>
<html>
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
  <title>Songbird</title>
  <link href="/assets/favicon-796b1bf30a6f430e5eb5a74f8c2861b1.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <meta content="authenticity_token" name="csrf-param" />
<meta content="nIrY/PpYJF6lwbjdpOHry3fHk9Z0OO5AV8hMRXMbfro=" name="csrf-token" />
  <link href="/assets/application-910f3726334a7c4d2ff2e26ab8928fae.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="/assets/application-aeaac117d5c344d21590279792d3c63d.js" type="text/javascript"></script>
  
  <meta name="apple-itunes-app" content="app-id=561535312">
</head>
<body>
  <div id="fb-root"></div>
  <script type="text/javascript">
  $(document).ready(function() {
    var user = null

    if (!user || user == "null") {
      user = { "id" : "guest", "name" : "Guest" };
      user.isGuest = "true";
    }


    Soundboard.welcome = false;
    Soundboard.promptArtist = false;

    Soundboard.init({
      facebookOauthUrl: 'https://www.facebook.com/dialog/oauth?client_id=246079522088793&amp;redirect_uri=http://www.songbird.me/login&amp;scope=user_likes,email,friends_likes,user_location,publish_actions&amp;state=',
      facebookAppId: '246079522088793',
      route: "discover",
      user: user,
      artist: null
    });

    //variable column stuff
    Soundboard.Utils.VariableWidth.updateSize(true);
    Soundboard.Utils.VariableWidth.updateInviteBanner();

  });
</script>

<div id="header" class="resize">
  <a href="#discover/stream" id="logo"><img alt="Songbird-logo" height="30" src="/assets/songbird-logo-fba10b5491cf48910d597b8fc74d1dc9.png" width="410" /></a>
  <div id="header-links">
    <div class="ugc-upload-tip">
      Add photos or artwork to an artist page
      <div class='arrow-right'></div>
    </div>
    <div id="ugc-upload-link">
      <div class="add">Add</div>
      <div class="plus">+</div>
    </div>
    <span class="divider"></span>
    <span class="link" id="about-link">
      <span class="text">About</span>
      <ul class="dropdown">
        <li class="first"><a href="#" id="invite-friends-link">Invite Friends</a></li>
        <li><a href="mailto:feedback@songbirdnest.com" target="_blank" id="feedback-link">Provide Feedback</a></li>
        <li><a href='/tips-for-artists' target='_blank'>Tips for Artists</a></li>
        <hr>
        <li class="first"><a href='http://getsongbird.com/about/terms.php' target='_blank'>Terms of Use</a></li>
        <li><a href='http://getsongbird.com/about/privacy.php' target='_blank'>Privacy Policy</a></li>
        <hr>
        <li class="first last">&copy; 2013 POTI, Inc.</li>
      </ul>
    </span>
    <span class="divider"></span>
      <span class="link sign-in">
        <span class="text"><a href="https://www.facebook.com/dialog/oauth?client_id=246079522088793&amp;redirect_uri=http://www.songbird.me/login&amp;scope=user_likes,email,friends_likes,user_location,publish_actions&amp;state=" id="sign_in">Login</a></span>
      </span>
  </div>
</div>
<div id="notice"></div>
<div id="app"></div>
<div class="clearer"></div>
<div id="footer">
  <div class="inner">
    <ul class='footer_links'>
      <li>&copy; 2013 POTI, Inc.</li>
      <li><a href='http://getsongbird.com/about/terms.php' target='_blank'>Terms of Service</a></li>
      <li class='last'><a href=' http://getsongbird.com/about/privacy.php' target='_blank'>Privacy Policy</a></li>
    </ul>
  </div>
</div>



    <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: '246079522088793',
        status: true,
        cookie: true,
        xfbml: true,
        oauth: true
      });

      window.setTimeout(function() {
        Soundboard.Utils.Tracking.startTracking();
      }, 250);
    };

    (function() {
      var e = document.createElement('script');

      e.async = true;
      e.src = document.location.protocol +
        '//connect.facebook.net/en_US/all.js';
      document.getElementById('fb-root').appendChild(e);
    })();
  </script>


    <!--- google analytics script -->
    <script>
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
<script type="text/javascript">if (!NREUMQ.f) { NREUMQ.f=function() {
NREUMQ.push(["load",new Date().getTime()]);
var e=document.createElement("script");
e.type="text/javascript";
e.src="/42/eum/rum.js";
document.body.appendChild(e);
if(NREUMQ.a)NREUMQ.a();
};
NREUMQ.a=window.onload;window.onload=NREUMQ.f;
};
NREUMQ.push(["nrfj","beacon-1.newrelic.com","d6f91541ee","419184","JVZcEEtXWw9SRRkNWAtcHQ1XXFIb",0,5,new Date().getTime(),"","","","",""]);</script></body>
</html>
