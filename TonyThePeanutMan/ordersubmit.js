function validateForm() 
{

	var nameregex = /^(([A-Za-z]+[\-\']?)*([A-Za-z]+)?\s)+([A-Za-z]+[\-\']?)*([A-Za-z]+)?$/;
    var xName = document.forms["myForm"]["name"].value;
    if (xName == "") 
    {
        alert("Name must be filled out");
        return false;
    }
   
    var emailregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    var xEmail = document.forms["myForm"]["email"].value;
    if (xEmail == "") 
    {
        alert("Email must be filled out");
        return false;
    }

    
    var addressregex = /^[a-zA-Z0-9\s,'-]*$/;
    var xAddress = document.forms["myForm"]["address"].value;
    if (xAddress == "") 
    {
        alert("Address must be filled out");
        return false;
    }
    
    var zipregex = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
    var xZip = document.forms["myForm"]["zip"].value;
    if (xZip == "") 
    {
        alert("Zip Code must be filled out");
        return false;
    }

    
    var phoneregex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var xPhone = document.forms["myForm"]["phone"].value;
    if (xPhone == "") 
    {
        alert("Phone Number must be filled out");
        return false;
    }
    	if(phoneregex.test(phone)) 
    {
    	return true;
    }
    else
    {
        alert("Phone Number is not valid");
        return false;
    }
   

}
	
