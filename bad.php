<html>
<head>
<script type="text/javascript">
function check_val()
{
 var bad_words=new Array("death","kill","murder","fuck","stupid",);
 var check_text=document.getElementById("text").value;
 var error=0;
 for(var i=0;i<bad_words.length;i++)
 {
  var val=bad_words[i];
  if((check_text.toLowerCase()).indexOf(val.toString())>-1)
  {
   error=error+1;
  }
 }
	
 if(error>0)
 {
  document.getElementById("bad_notice").innerHTML="Some Bad Words In Your Text!";
 }
 else
 {
  document.getElementById("bad_notice").innerHTML="";
 }
}
</script>
</head>
<body>
<div id="wrapper">
 <textarea id="text" placeholder="Write Some Text Having Words 'death', 'kill', 'murder'"></textarea>
 <p id="bad_notice"></p>
 <input type="button" onclick="check_val();" value="CHECK WORDS">
</div>
</body>
</html>
