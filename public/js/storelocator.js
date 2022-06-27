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
                $(".store").append("<h1><center>we are coming soon</center></h1>");
                return null
            }
            $(".store").append("<h1><center>pls select Your city</center></h1>");
            var html2 = "<option selected value='0' >City</option>"
            $(".appendcity").append(html2);
            for (var i = 0; i < res.city.length; i++) {
                var html = "<option value=" + res.city[i].id + " >" + res.city[i].name + "</option>"
                $(".appendcity").append(html);
            }
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
        $(".store").append("<h1><center>Pls Select Your City</center></h1>")
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
                $(".store").append("<h1><center>we are coming soon</center></h1>");
                $(".iframes").show();
                return null
            }
            const ifram = res.ifram[0].ifram
            $(".iframes").hide();
            for (var i = 0; i < res.store.length; i++) {
                var html =
                    '<p class="storehead">' +
                    res.store[i].storename +
                    '</p><p class="storedata">' +
                    res.store[i].storeaddress +
                    '</p>';
                $(".store").append(html);
            }
            $(".iframe").append(ifram);
        },
    });
}
