var items = ("a");
items.on("click",function(){
  items.removeClass("active");
  $(this).toggleClass("active");
});