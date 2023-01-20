
function addValid(form) {
    var space = /^[\ ]*$/;
    var alpha = /^[a-zA-Z\ ]+$/;
    var alphanm = /^[a-zA-Z0-9\.\:\'\ ]+$/;
    var name = /^[a-zA-Z\.\:\'\ ]+$/;
    var date = /^[0-9\/\-\ ]+$/;
    var date1 = /^[0-9\ ]+$/;
    var contact = /^[0-9\-\+]+$/;
    var email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9])+$/;


    if (form.selectarea.value == "0")
    {
        alert("Please select your Area / Nature of business");
        form.selectarea.focus();
        return false;
    }
    if (form.selectmachine.value == "0")
    {
        alert("Please select your Machine type / product");
        form.selectmachine.focus();
        return false;
    }
    if (form.txtname.value == "")
    {
        alert("Please enter your name");
        form.txtname.focus();
        return false;
    }
    if (!name.test(form.txtname.value))
    {
        console.log('test')
        alert("Please enter your valid name");
        form.txtname.focus();
        return false;
    }
    if (form.txtcompanyname.value == "")
    {
        alert("Please enter your company name");
        form.txtcompanyname.focus();
        return false;
    }
    if (form.txtadress.value == "")
    {
        alert("Please enter your address");
        form.txtadress.focus();
        return false;
    }
    if (form.selectcountry.value == "0")
    {
        alert("Please select your country");
        form.selectcountry.focus();
        return false;
    }
    if (form.txtphoneno.value == "")
    {
        alert("Please enter your phone no.");
        form.txtphoneno.focus();
        return false;
    }
    if (!contact.test(form.txtphoneno.value))
    {
        alert("Please enter your valid phone no.");
        form.txtphoneno.focus();
        return false;
    }
    if (form.txtmobileno.value == "")
    {
        alert("Please enter your mobile no.");
        form.txtmobileno.focus();
        return false;
    }
    if (!contact.test(form.txtmobileno.value))
    {
        alert("Please enter your valid mobile no.");
        form.txtmobileno.focus();
        return false;
    }
    return true;
}