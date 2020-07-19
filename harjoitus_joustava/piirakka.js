// JavaScript Document
$$('.pie').forEach(function(pie) {
  var p = parseFloat(pie.textContent);
  pie.style.animationDelay = '-' + p + 's';
});