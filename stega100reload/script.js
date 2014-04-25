function blinkId(id) {
  if($(id).css('visibility') == 'hidden') {
    $(id).css('visibility', 'visible');
  } else {
    $(id).css('visibility', 'hidden');
  }
  setTimeout("blinkId('"+id+"')",500);
}

$(document).ready(function()
{
    blinkId("#image");
});
