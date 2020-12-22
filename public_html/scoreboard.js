let jdata;

window.onload = function () {
    let url = "member.json"
    let request = new XMLHttpRequest();
    request.open("get", url);
    request.send(null);
    request.onload = function () {
        if (request.status == 200) {
            jdata = JSON.parse(request.responseText);
        }
    }
}

function search()
{
    key = document.getElementById("key").value;
    result_area = document.getElementById("result_area");

    if (jdata.hasOwnProperty(key))
    {
        document.getElementById("name").innerHTML = jdata[key]["name"];
        document.getElementById("nickname").innerHTML = jdata[key]["nickname"];
        document.getElementById("total").innerHTML = jdata[key]["total"];
        if(jdata[key]["today"]) document.getElementById("today").innerHTML = "是";
        else document.getElementById("today").innerHTML = "否";
    }
    else
    {
        alert("查無結果");
    }
}
