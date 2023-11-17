$(document).on("click", ".link", function () {
    var link = $(this).attr("link");
    var sendData = $(this).attr("data");
    var headerName = $(this).text();
    $.ajax(
      {
        url: link,
        type: "post",
        data: {
          headerName: headerName,
          sendData: sendData
        },
        success: function (data) {
          $(".phone").html(data);
          $(".phone").removeClass('withBg');
          if(link == '/pages/method.php') {
            $(".phone").addClass('blueBg');
            $(".phone").addClass('textBg');
            $(".phone").addClass('noJustify');
          }
          if(link == '/pages/deliver.php') {
            $(".phone").removeClass('blueBg');
            $(".phone").removeClass('textBg');
          }
        }
      })
  });


  let clickCount = 0;
  $(document).on('click', '.addItem', function() {
    clickCount++;

    alert(`You have added ${clickCount} item(s) to your basket.`);
  });
