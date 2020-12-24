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
    let key = document.getElementById("key").value;

    if (jdata.hasOwnProperty(key))
    {
        let show_result = document.getElementById("show_result");
        
        let tr = document.createElement("tr");

        let id = document.createElement("td");
        let name = document.createElement("td");
        let nickname = document.createElement("td");
        let total = document.createElement("td");
        let today = document.createElement("td");

        let id_txt = document.createTextNode(key);
        let name_txt = document.createTextNode(jdata[key]["name"]);
        let nickname_txt = document.createTextNode(jdata[key]["nickname"]);
        let total_txt = document.createTextNode(jdata[key]["total"]);
        let today_txt;
        if (jdata[key]["today"])
        {
            today_txt = document.createTextNode("是");
        }
        else
        {
            today_txt = document.createTextNode("否");
        }
        
        id.appendChild(id_txt);
        name.appendChild(name_txt);
        nickname.appendChild(nickname_txt);
        total.appendChild(total_txt);
        today.appendChild(today_txt);

        tr.appendChild(id);
        tr.appendChild(name);
        tr.appendChild(nickname);
        tr.appendChild(total);
        tr.appendChild(today);

        show_result.innerHTML = "";
        show_result.appendChild(tr);
    }
    else
    {
        alert("查無結果");
    }
}

function show_all()
{ 
    let show_result = document.getElementById("show_result");
    show_result.innerHTML = "";
    let keys = Object.keys(jdata);

    for (let i=2;i<keys.length;i++)
    {
        let key = keys[i]

        let tr = document.createElement("tr");

        let id = document.createElement("td");
        let name = document.createElement("td");
        let nickname = document.createElement("td");
        let total = document.createElement("td");
        let today = document.createElement("td");

        let id_txt = document.createTextNode(key);
        let name_txt = document.createTextNode(jdata[key]["name"]);
        let nickname_txt = document.createTextNode(jdata[key]["nickname"]);
        let total_txt = document.createTextNode(jdata[key]["total"]);
        let today_txt;
        if (jdata[key]["today"])
        {
            today_txt = document.createTextNode("是");
        }
        else
        {
            today_txt = document.createTextNode("否");
        }

        id.appendChild(id_txt);
        name.appendChild(name_txt);
        nickname.appendChild(nickname_txt);
        total.appendChild(total_txt);
        today.appendChild(today_txt);

        tr.appendChild(id);
        tr.appendChild(name);
        tr.appendChild(nickname);
        tr.appendChild(total);
        tr.appendChild(today);

        show_result.appendChild(tr);
    }
}
