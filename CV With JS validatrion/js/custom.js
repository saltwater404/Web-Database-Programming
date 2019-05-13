function formValid(){
    var name=document.getElementById('name');
    var phone=document.getElementById('cell');
    var user=document.getElementById('username');
    var email=document.getElementById('email');
    var pw=document.getElementById('pass');
    var rpw=document.getElementById('repass');

    if(name.value==''){
        document.getElementById('name_error').innerHTML='Please enter your name!';
        name.focus();
        return false;
    }else{
        document.getElementById('name_error').innerHTML='';
    }

    if(phone.value==''){
        document.getElementById('phone_error').innerHTML='Please enter your phone number!';
        phone.focus();
        return false;
    }else{
        document.getElementById('phone_error').innerHTML='';
    }

    if(user.value==''){
        document.getElementById('username_error').innerHTML='Please enter username!';
        user.focus();
        return false;
    }else{
        document.getElementById('username_error').innerHTML='';
    }

    if(email.value==''){
        document.getElementById('email_error').innerHTML='Please enter email address!';
        email.focus();
        return false;
    }else{
        document.getElementById('email_error').innerHTML='';
    }

    if(pw.value==''){
        document.getElementById('pass_error').innerHTML='Please enter password!';
        pw.focus();
        return false;
    }else if(pw.value.length<=5){
        document.getElementById('pass_error').innerHTML='Password minimum 6 char allow!';
        pw.focus();
        return false;
    }else if(pw.value.length>10){
        document.getElementById('pass_error').innerHTML='Password maximum 10 char allow!';
        pw.focus();
        return false;
    }else{
        document.getElementById('pass_error').innerHTML='';
    }

    if(pw.value!=rpw.value){
        document.getElementById('repass_error').innerHTML="Password didn't match!";
        pw.focus();
        return false;
    }else{
        document.getElementById('repass_error').innerHTML="Password didn't match!";
    }
}
