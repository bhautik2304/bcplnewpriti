function numburcheck(){
    console.log('heloo')
    const mobaile=$('#mobail').val();
    console.log(mobaile.length)
}



$('#formSubmit').submit(function (e) {
    e.preventDefault();

   const name= $('#FullName').val();
   const email= $('#email').val();
   const mobail= $('#mobail').val();
   const subject= $('#subject').val();
   const msg= $('#msg').val();



async function callapi(){
    const data={
        name:name,
        email:email,
        mobail:mobail,
        subject:subject,
        msg:msg
   }
    var url=$(location).attr('protocol')+"api/contactus";
        await $.ajax({
            url: url,
            type: "post",
            data: data,
         success:function (res) {
            alert(res.msg)
          $('#FullName').val("");
          $('#email').val("");
          $('#mobail').val("");
          $('#subject').val("Select Subject");
          $('#msg').val("");
         },
     });

    }
    callapi()
});
