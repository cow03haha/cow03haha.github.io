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
    let id = document.getElementById("key").value;

    if (jdata.hasOwnProperty(id))
    {
        let show_result = document.getElementById("show_result");
        
        let tr = document.createElement("tr");

        let name = document.createElement("td");
        let nickname = document.createElement("td");
        let total = document.createElement("td");
        let today = document.createElement("td");

        let name_txt = document.createTextNode(jdata[id]["name"]);
        let nickname_txt = document.createTextNode(jdata[id]["nickname"]);
        let total_txt = document.createTextNode(jdata[id]["total"]);
        let today_txt;
        if (jdata[id]["today"])
        {
            today_txt = document.createTextNode("是");
        }
        else
        {
            today_txt = document.createTextNode("否");
        }
        
        name.appendChild(name_txt);
        nickname.appendChild(nickname_txt);
        total.appendChild(total_txt);
        today.appendChild(today_txt);

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
        let id = keys[i]

        let tr = document.createElement("tr");

        let name = document.createElement("td");
        let nickname = document.createElement("td");
        let total = document.createElement("td");
        let today = document.createElement("td");

        let name_txt = document.createTextNode(jdata[id]["name"]);
        let nickname_txt = document.createTextNode(jdata[id]["nickname"]);
        let total_txt = document.createTextNode(jdata[id]["total"]);
        let today_txt;
        if (jdata[id]["today"])
        {
            today_txt = document.createTextNode("是");
        }
        else
        {
            today_txt = document.createTextNode("否");
        }

        name.appendChild(name_txt);
        nickname.appendChild(nickname_txt);
        total.appendChild(total_txt);
        today.appendChild(today_txt);

        tr.appendChild(name);
        tr.appendChild(nickname);
        tr.appendChild(total);
        tr.appendChild(today);

        show_result.appendChild(tr);
    }
}
