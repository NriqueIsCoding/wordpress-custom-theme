$(document).ready(function () {
  console.log("yo");
  var wow = new WOW({
    animateClass: "animated",
    offset: 100,
    mobile: false,
    live: true,
  });
  wow.init();
});
