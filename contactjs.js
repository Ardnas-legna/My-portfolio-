function validate(){
    const name=document.getElementById("name").value;
    if(name==""||name=="null"){
        alert("please fill in your name")
    }
    const email=document.getElementById("email").value;
    if(email==""||email=="null"){
        alert("please fill in your email")
    }
    const subject=document.getElementById("subject").value;
    if(subject==""||subject=="null"){
        alert("please fill in a subject")
    }
    const textarea=document.getElementById("textarea").value;
    if(textarea==""||textarea=="null"){
        alert("please fill in the textarea")
    }
}