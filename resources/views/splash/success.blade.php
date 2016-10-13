<div id="content">
  <div id="container">
    <div class="header">
      <div id="icon_cell">
      </div>
    </div>

    <div id="continue">
      <h1>Success</h1>
      <p>Success</p>
      <p id='ajaxResponse'>Success1</p>




    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  //$('.send-btn').click(function(){
    $.ajax({
    //url: 'http://signee.riverviewms.com/index.php?KEY=978c173255b5763c4f75e9497c15819a49c57f34&SEC=ef07910940ec4d5c1be3e6e5e5a4305758a30576fe758686c41825789adb37ab&API=http://uat.riverviewms.com/api/ads',
    //  url: 'http://qamobile.riverviewms.com/api/loyalty/mobileuser/212?auth_version=1.0&auth_timestamp=1473668407&auth_key=fc8fe74e1aa95e5d63d3ffc75db998a7c78d7f04&auth_signature=f930e864db07faf9aa88de593b6fe05a9dff38c9902c4563db7685fba64ea646',
      type: "GET",
      contentType: "application/json",
      url: "http://signee.riverviewms.com/index.php",
      data: {'KEY':'978c173255b5763c4f75e9497c15819a49c57f34','SEC':'ef07910940ec4d5c1be3e6e5e5a4305758a30576fe758686c41825789adb37ab','API':'http://uat.riverviewms.com/api/ads'},
      dataType: "json",
      success: function(data){
        // alert();
          $("#ajaxResponse").html("<div>"+JSON.stringify(data)+"</div>");
      }
    });
  //});
});
</script>
