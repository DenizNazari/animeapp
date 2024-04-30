$("#chkbx").click(function(){
  if($(this).is(":checked")) {
    $('body').toggleClass('bk');
  }
});