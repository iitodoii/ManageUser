function getMarketPrice() {
    return $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
        url: "_getmarketPrice.php",
        data: { rev: 1 },
        async: false,
        dataType: 'json',
        success: function (getData) {
            marketPriceData = tranformMarketPrice(getData);
        }
    });//.responseText;

}

function getCandle() {
    $.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
        url: "_getcandle.php",
        data: { rev: 1 },
        async: false,
        dataType: 'json',
        success: function (getData) {
            data = tranfromdata(getData);
        }
    });//.responseText;
}

function tranformMarketPrice(rawdata) {
    var data = [];
    $.each(rawdata, function (index, value) {
        data.push({
            x: new Date(),
            y: rawdata.price
        });
    });
    return data;
}

function tranfromdata(rawdata) {
    var data = [];
    $.each(rawdata, function (index, value) {
        data.push({
            x: new Date(value[0]),
            y: [value[1], value[2], value[3], value[4]]
        });
    });
    return data;
}

function tranfromdatatopten(rawdata) {
    var data = [];
    $.each(rawdata, function (index, value) {
        console.log(value[0]);
    });
    return data;
}

function testAjax() {
    var result = "";
    $.ajax({
        url: "getvalue.php",
        async: false,
        success: function (data) {
            result = data;
        }
    });
    return result;
}

function getCurrencyRate() {
    var result = "";
    $.ajax({
        url: "_getCurrencyRate.php",
        async: false,
        dataType: 'json',
        success: function (data) {
            result = data;
        }
    });
    return result;
}

function getTopten() {
    var result = "";
    $.ajax({
        url: "_getTopTen24h.php",
        async: false,
        dataType: 'json',
        success: function (data) {
            result = data;
        }
    });
    return result;
}

function dynamicSort(data) {
    console.log(data);
    return data.sort((a, b) => (parseFloat(a.priceChangePercent) < parseFloat(b.priceChangePercent)) ? 1 : (a.priceChangePercent === b.priceChangePercent) ? ((a.size > b.size) ? 1 : -1) : -1 );
}