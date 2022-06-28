function subscribe() {
    const email= $('#sub').val();
    async function callapi(){
        const data={
            email:email,
       }
        var url=$(location).attr('protocol')+"api/subscribe";
            await $.ajax({
                url: url,
                type: "post",
                data: data,
             success:function (res) {
                 $('#sub').val("");
                 alert(res.msg); //suceess msg
             },
         });
    
        }
        callapi()
}
