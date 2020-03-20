
<script>  
function validateform(){  
var username=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (username==null || username==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
} 
function matchpass(){  
var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.password2.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
}   

function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}
function validate(){  
var num=document.myform.num.value;  
if (isNaN(num)){  
  document.getElementById("numloc").innerHTML="Enter Numeric value only";  
  return false;  
}else{  
  return true;  
  }  
}    
</script>  
<body>  
<form name="SignUp" method="post" action="project.js" onsubmit="return validateform()" >  
Name: <input type="text" name="username"><br/>  
Password: <input type="password" name="password"><br/>  
 <form name="SignUp" action="project.js" onsubmit="return matchpass()">  
Password:<input type="password" name="password" /><br/>  
Re-enter Password:<input type="password" name="confirm password"/><br/>  


  
<form name="Sign"  method="post" action="#" onsubmit="return validateemail();">  
Email: <input type="text" name="email"><br/>  

<form name="SignUp" onsubmit="return validate()" >  
Number: <input type="text" name="num"><span id="numloc"></span><br/>  
</body>
</form>  