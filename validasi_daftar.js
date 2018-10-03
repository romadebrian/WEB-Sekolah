var check = function() {
  if (document.getElementById('Password1').value == "" && document.getElementById('Password2').value == "")
	{
	
	}
  else if (document.getElementById('Password1').value == document.getElementById('Password2').value) 
	{
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password Benar';
	document.getElementById('Daftar').disabled = false;
	} 
  else 
  {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Tidak Sama';
	document.getElementById('Daftar').disabled = true;
  }
}