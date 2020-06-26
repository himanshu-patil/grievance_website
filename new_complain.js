function validate() {
    
    if(form1.subject.value=='')
    {
    alert('Please fill the subject');
    document.form1.subject.focus();
    return false;
    }

    if(form1.issue.value=='')
    {
    alert('Please fill the issue');
    document.form1.subject.focus();
    return false;
    }

    return true;
}