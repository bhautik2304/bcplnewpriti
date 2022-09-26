const store = () => {
    var hostname = $(location).attr('protocol');
    const StoreValue = $("#store").val();
    $(".appendcity").empty();
    $(".store").empty();
    var data = {
        store: StoreValue
    };
    $.ajax({
        url: hostname + "api/city",
        type: "post",
        data: data,
        success: function (res) {
            $(".store").empty();
            if (res.length == 0) {
                $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>We are coming soon</center></h1>");
                return null
            }
            $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>Please select your city</center></h1>");
            var html2 = "<option selected value='0' >City</option>"
            $(".appendcity").append(html2);
            for (var i = 0; i < res.city.length; i++) {
                var html = "<option value=" + res.city[i].id + " >" + res.city[i].name + "</option>"
                $(".appendcity").append(html);
            }
            $('.owl-carousel').owlCarousel({
                margin:10,
                loop:true,
                autoWidth:true,
                items:1
            })
        },
    });
};



const storeCity = () => {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    var hostname = $(location).attr('protocol');
    const StoreValue = $("#store").val();
    const CityValue = $("#storeCity").val();
    if (CityValue == 0) {
        $(".store").empty();
        $(".iframe").empty();
        $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>Please select your city</center></h1>")
        return null
    }
    var data = {
        store: StoreValue,
        city: CityValue,
    };
    $.ajax({
        url: hostname + "api/store/",
        type: "get",
        data: data,

        success: function (res) {
            $(".store").empty();
            $(".iframe").empty();
            if (res.store.length == 0) {
                $(".store").append("<h1 style='font-family: montserrat, sans-serif;font-size:20px; font-weight:bold;' ><center>We are coming soon</center></h1>");
                $(".iframes").show();
                return null
            }
            const ifram = res.ifram[0].ifram
            $(".iframes").hide();
            for (var i = 0; i < res.store.length; i++) {
                let modelid=makeid(5)
                var sum=makeid(5)
                var html =

                '<div class="modelshow"></div>'+
                '<div class="'+sum+'"></div>'+
                '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#'+modelid+'">aunch demo modal</button>'+
                '<p class="storehead">' +
                res.store[i].storename +
                '</p><p class="storedata">' +
                res.store[i].storeaddress +
                '</p>'+'<br><script class="script"></script>';
                $(".store").append(html);
                models(res.store[i],modelid)
                // javascript(classes)
            }
            $(".iframe").append(ifram);
        },
    });
}


function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() *
 charactersLength));
   }
   return result;
}
/*
models logic:

1. models function create models
2. models data function check models img ya models video
*/


const models=(data,id)=>{
    if(data.store_images.length>0){
        const modelsdata=(i,data)=>{
            if(data.store_images[i].Image!=null){
               return '<div class="mySlides1"><img src="'+i.img+'" style="width:100%" height="600px" /><div class="note"></div></div>'

            }else if(data.store_images[i].Video!=null){
                const video='<div class="mySlides1"><img src="'+data.store_images[i].video+'" style="width:100%" height="600px" /><div class="note"></div></div>'

            }else{

            }
        }
    const html='<div class="modal fade" id="'+id+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Modal title</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><div class="owl-carousel">'+data.store_images.map((i)=>
        `<div class="mySlides1">
        <img src="${i.img}" style="width:100%" height="600px" />
        <div class="note"></div>
        </div>`
        )+
        `</div></div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div></div></div></div><script>$(".owl-carousel").owlCarousel({center: true,items:1,loop:true,margin:10,});</script>`
    $('.modelshow').append(html.toString());
    }else{
        console.log('no data found')
    }
}

// $('.owl-carousel').owlCarousel({center: true,items:1,loop:true,margin:10,});

// model click func

function model(data) {
    $("#model").addClass("show");
    $("#model").css('display','block')
 }

 function closemodel(){
    $("#model").removeClass("show");
    $("#model").css('display','none')
 }
