$.ajax({
  type: "GET",
  datatype: 'json',
  url: 'codCesar.php',
  success: function(data)
  {
     var arrayAscii = jQuery.parseJSON(data);
  }
});
console.log(arrayAsci);
