<div id="content">
  <div id="container">
    <div class="header">
      <div id="icon_cell">
      </div>
    </div>

    <div id="continue">
      <h1>Login</h1>
      <p>Please enjoy our complimentary WiFi.</p>

      <form action="/api/v1/splash/signin" method="post" class="form col-md-12 center-block">
        <input type="hidden" name="baseGrantUrl" value="{{$data['baseGrantUrl']}}">
        <input type="hidden" name="userContinueUrl" value="{{$data['userContinueUrl']}}">
        <div class="form-group">
          <input class="form-control input-lg" placeholder="Email" type="text" name="form1[email]" required>
        </div>

        <div class="form-group">
          <button class="btn btn-primary btn-lg btn-block">Sign In</button>

          <span class="pull-left"><a href="#">Terms and Conditions</a></span>

        </div>
      </form>


    </div>
  </div>
  <div class="footer">
    <p>Your IP: {{$data['clientIp']}}</p>
    <p>Your MAC: {{$data['clientMac']}}</p>
    <p>AP MAC: {{$data['nodeMac']}}</p>
  </div>
</div>
