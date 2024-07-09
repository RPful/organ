<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
.botao {
  background-color: #2b96ff; /* Verde */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 20px;
  cursor: pointer;
  border-radius: 25px;
  }
  type="text/css">
        .border-animation {
            animation: pulsing 3s infinite alternate;
        }

        @keyframes pulsing {
            from {
                border-width: 20px;
                border-style: solid;
                border-radius: 30px;
                border-color: #000000;
            }
            to {
                border-width: 20px;
                border-style: solid;
                border-color: #FF0000;
            }
        }
    </style>
</head>
<body>

    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="name">Nome:</label><br/><input type="text" class="form-control" id="name">
                    <label for="url_check_user">Checkuser:</label><br/><input type="text" class="form-control" id="url_check_user">
                    <label for="description">Descrição:</label><br/><input type="text" class="form-control" id="description">
                    <label for="udp_port">Porta UDP:</label><br/><input type="text" class="form-control" id="udp_port">
                    <label for="icon_image">Icone da operadora (url):</label><br/><input type="text" class="form-control" id="icon_image">
                    <label for="primary_dns_server">DNS primário:</label><br/><input type="text" class="form-control" id="primary_dns_server">
                    <label for="secondary_dns_server">DNS secundário:</label><br/><input type="text" class="form-control" id="secondary_dns_server">
                    <label>Escolha a categoria:</label><br><select id="categoryChoice" class="form-select">
                      
                    </select><br>
                     <label>Selecione modo de conexão</label><br>
                    <select id="modo" onchange="modo(this)" class="form-select">
                    <option value="ssl_proxy">SSL + PAY</option>
                    <option value="ssh_proxy">DIRECT</option>
</select><br>
                <label class="proxy_port" for="porta">Porta:</label><br/><input type="text" class="proxy_port form-control" id="proxy_port">
                <label class="payload" for="payload">Payload:</label><br/><input type="text" class="form-control payload" id="payload">
                <label class="sni" for="sni">SNI:</label><br/><input type="text" class="form-control sni" id="sni">
                <label class="proxy_hostname" for="proxy">Proxy:</label><br/><input type="text" class="form-control proxy_hostname" id="proxy_hostname">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="salvar()" data-dismiss="modal">Salvar</button>
                    <button type="button" class="btn btn-secondary" onclick="limpar()" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="confirmRemove" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Remover configuração</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Desejar continuar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirmRemove()">Remover</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <section class="cards" id="config">
    	
    </section>
    
    <header id="principal">
        <label class="button">
            <i class="fa fa-image">Carregar JSON</i><input type="file" style="display: none;" id="load" name="json">
        </label>
        <div></div>
        <label class="btn btn-primary" onclick="copiar()"><i>Copiar JSON</i></label>
    </header>
    <p>
    <a href="https://jsonformatter.curiousconcept.com/" class="botao">Json Converter</a>
<a href="http://www.unit-conversion.info/texttools/compress/" class="botao">Encriptar Cert OpenVPN</a>
<a href="https://t.me/+josYBwgS0ARmM2Rh" class="botao">Grupo GLTunnel MOD</a>
<a href="https://t.me/VEM_BRABO" class="botao">Modder</a>
<div class="border-animation">
        <center>@VEM_BRABO</h1></center>
    </div>
    <script>
    const print = console.log
    let categorias = [{"name": "VIVO", 
"id": 1, "status": "ACTIVE", "sort_order": 1, "user_id": 1, "slug": "e5f3da23-dd2d-4871-9a03-59e315080e7c","description": ""}, {"name": "TIM", "id": 2, "status": "ACTIVE", "sort_order": 1, "user_id": 1, "slug": "e5f3da23-dd2d-4871-9a03-59e315080e7c","description": "" },{"name":"CLARO","id":3,"status":"ACTIVE","sort_order":1,"user_id":1,"slug":"e5f3da23-dd2d-4871-9a03-59e315080e7c","description":""},{"name":"OI","id":4,"status":"ACTIVE","sort_order":4,"user_id":4,"slug":"e5f3da23-dd2d-4871-9a03-59e315080e7c","description":""}]

    const inputElement = document.getElementById("load");
      let padrao = ["secondary_dns_server","primary_dns_server","udp_port","description","url_check_user","icon_image","name"]
      let modos = {
        "ssl_proxy":["payload","proxy_port","sni","proxy_hostname"],
        "ssh_proxy":["payload","proxy_port","proxy_hostname"]
      }
    let configFinal = { 
"status": 200, 
"data": { 
"prev_page": null, 
"next_page": null, 
"has_prev": false, 
"has_next": false, 
"total": 10, 
"current_page": 1, 
"pages": 1, 
"results": [ 
{ 
"name": "VIVO SSL EXEMPLO", 
"config_v2ray": "", 
"server_hostname": "", 
"description": "Sua descricao", 
"username": "", 
"server_port": 443, 
"icon_image": "https://i.imgur.com/R8VEftk.jpg", 
"user_id": 2, 
"password": "", 
"udp_port": "7300", 
"category_id": 1, 
"v2ray_uuid": "", 
"primary_dns_server": "8.8.8.8", 
"payload": "GET wss://ayuda.tigo.com.sv HTTP/1.1[crlf]Host: seudominio[crlf]Upgrade: websocket[crlf][crlf]", 
"status": "ACTIVE", 
"secondary_dns_server": "8.8.4.4", 
"sni": "ayuda.tigo.com.sv", 
"config_mode": "ssl_proxy", 
"url_check_user": "", 
"config_openvpn": "", 
"proxy_hostname": "ayuda.tigo.com.sv", 
"sort_order": 1, 
"id": 1, 
"proxy_port": 443, 
"category": { 
"name": "VIVO", 
"id": 1, 
"status": "ACTIVE", 
"sort_order": 1, 
"user_id": 1, 
"slug": 
"e5f3da23-dd2d-4871-9a03-59e315080e7c", 
"description": "" } 

}, { 
"name": "VIVO DIRECT EXEMPLO", 
"SSH": "", 
"server_hostname": "104.16.51.111", 
"description": "Sua descricao", 
"username": "", 
"server_port": 80, 
"icon_image": 
"https://i.imgur.com/R8VEftk.jpg", 
"user_id": 2, 
"password": "", 
"udp_port": "7300", 
"category_id": 1, 
"v2ray_uuid": "", 
"primary_dns_server": "8.8.8.8", 
"payload": "GET / HTTP/1.1[crlf]Host: seudominio[crlf]Upgrade: Websocket[crlf][crlf]", 
"status": "ACTIVE", 
"secondary_dns_server": "8.8.4.4", 
"sni": "", 
"config_mode": "ssh_proxy", 
"url_check_user": "", 
"config_openvpn": "", 
"proxy_hostname": "104.16.51.111", 
"sort_order": 2, 
"id": 2, 
"proxy_port": 80}, { 
"name": "TIM DIRECT EXEMPLO", 
"SSH": "104.16.53.111", 
"server_hostname": "104.16.53.111",
"description": "Sua descricao", 
"username": "", 
"server_port": 80, 
"icon_image": "https://i.imgur.com/Wvdsv5r.jpg",
"user_id": 4, 
"password": "", 
"udp_port": "7300", 
"category_id": 2, 
"v2ray_uuid": "", 
"primary_dns_server": "8.8.8.8", 
"payload": "GET / HTTP/1.1[crlf]Host: seudominio[crlf]Upgrade: Websocket[crlf][crlf]", 
"status": "ACTIVE", 
"secondary_dns_server": "8.8.4.4", 
"sni": "", 
"config_mode": "ssh_proxy", 
"url_check_user": "Seu checkuser", 
"config_openvpn": "", 
"proxy_hostname": "104.16.53.111", 
"sort_order": 1, 
"id": 4, 
"proxy_port": 80,
}, { 
"name": "TIM SSL EXEMPLO", 
"SSH": "", 
"server_hostname": "",
"description": "Sua descricao", 
"username": "", 
"server_port": 443, 
"icon_image": "https://i.imgur.com/Wvdsv5r.jpg",
"user_id": 5, 
"password": "", 
"udp_port": "7300", 
"category_id": 2, 
"v2ray_uuid": "", 
"primary_dns_server": "8.8.8.8", 
"payload": "GET wss://workplaceservices.surveymonkey.com/ HTTP/1.1[crlf]Host: seudominio[crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep- Vivo[crlf][crlf]", 
"status": "ACTIVE", 
"secondary_dns_server": "8.8.4.4", 
"sni": "workplaceservices.surveymonkey.com", 
"config_mode": "ssl_proxy", 
"url_check_user": "Seu checkuser", 
"config_openvpn": "", 
"proxy_hostname": "workplaceservices.surveymonkey.com", 
"sort_order": 5, 
"id": 5, 
"proxy_port": 443 }, 
{ 
"name": "CLARO SSL EXEMPLO", 
"SSH": "", 
"server_hostname": "",
"description": "Sua descricao", 
"username": "", 
"server_port": 443, 
"icon_image": "https://i.imgur.com/8jnipnI.jpg",
"user_id": 7, 
"password": "", 
"udp_port": "7300", 
"category_id": 3, 
"v2ray_uuid": "", 
"primary_dns_server": "8.8.8.8", 
"payload": "GET wss://Atendimento.descomplica.com.br/ HTTP/1.1[crlf]Host: seudominio[crlf]Upgrade: websocket[crlf][crlf]", 
"status": "ACTIVE", 
"secondary_dns_server": "8.8.4.4", 
"sni": "Atendimento.descomplica.com.br", 
"config_mode": "ssl_proxy", 
"url_check_user": "Seu checkuser", 
"config_openvpn": "", 
"proxy_hostname": "Atendimento.descomplica.com.br", 
"sort_order": 7, 
"id": 7, 
"proxy_port": 443 }, { 
"name": "OI SSL EXEMPLO", 
"config_v2ray": "", 
"server_hostname": "", 
"description": "Sua descricao", 
"username": "", 
"server_port": 443, 
"icon_image": "https://i.imgur.com/56XWKDf.jpg", 
"user_id": 1, 
"password": "", 
"udp_port": "7300", 
"category_id": 4, 
"v2ray_uuid": "", 
"primary_dns_server": "8.8.8.8", 
"payload": "GET wss://www.hbogo.com.br/ HTTP/1.1[lf]Host: seudominio[lf]Proxy-Connection: Keep-Alive[lf]User-Agent: [ua][lf]Connection: upgrade[lf]Upgrade: websocket[lf]Sec-Websocket-Extensions: superspeed[lf][lf]", 
"status": "ACTIVE", 
"secondary_dns_server": "8.8.4.4", 
"sni": "www.hbogo.com.br", 
"config_mode": "ssl_proxy", 
"url_check_user": "Seu checkuser", 
"config_openvpn": "", 
"proxy_hostname": "www.hbogo.com.br", 
"sort_order": 1, 
"id": 10, 
"proxy_port": 443}] } }
configFinal.data.results.map(x=> {
  let c = categorias.find(z => z.id == x.category_id)
  x.category = c
  return x
})
////print(configFinal)
    let toRemove = null
    let editIndex = null
    let toEdit = null
    let cat = null
    inputElement.addEventListener("change", handleFiles, false);
    async function handleFiles() {
    const fileList = this.files;
    text = await fileList[0].text()
    try{
        text = JSON.parse(text)
        
        update(text)
    } catch(e){
        alert("JSON inválido.")
        }
    }
    function update(config){
      categorias = []
      let categoriaid = []
      for (x in config.data.results){
        categoriaid.push(config.data.results[x].category.id)
      }
      categoriaid = categoriaid.filter((item,index) => categoriaid.indexOf(item) === index);
      for (z in categoriaid){
       categorias.push(config.data.results.find(x=>x.category.id == categoriaid[z]).category)
      }
      $("#categoryChoice").empty()
      for (x in categorias){
        $("#categoryChoice").append($('<option>', {
    value: categorias[x].id,
    text: categorias[x].name
        }))
      }
//      //print(config)
      //print(categorias)
        $("#config").text("")
        let categorys = []
        config.data.results.sort(function(a, b){return a.category.sort_order - b.category.sort_order});
        for (index in config.data.results){
            c = config.data.results[index]
            let nc = "category_id" + c.category_id
            if (!categorys.includes(nc)) categorys.push(nc)
            if ($("#"+nc).length == 0) $("#config").append(`<div class="category" id=${nc}><h1 id="category-name">${c.category.name}</h1></div>`)
            
            $("#"+nc).append(`
                <div class="cnf-div">
                    <h2 class="cnf-name">${c.name}</h2>
                    <h3 class="cnf-info">${c.config_mode.replace(/_/gi,"/")}</h3>
                    <div class="div-icons">
                        <button name="edit${index}" onclick="onedit(this)" type="submit" title="Add">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="512" height="512"><path d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z"/><path d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z"/></svg>
                        </button>
                        <button onclick="onremove(this)" name="remove${index}" title="Remove">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512" height="512"><g id="_01_align_center" data-name="01 align center"><path d="M22,4H17V2a2,2,0,0,0-2-2H9A2,2,0,0,0,7,2V4H2V6H4V21a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V6h2ZM9,2h6V4H9Zm9,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V6H18Z"/><rect x="9" y="10" width="2" height="8"/><rect x="13" y="10" width="2" height="8"/></g></svg>
                        </button>
                    </div>
                </div>`
            )
        }
        configFinal = config

        for (i in categorys){
            $("#"+categorys[i]).append(`
                <label id="${categorys[i]}" onclick="addConfig(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" data-name="Layer 1"><path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm5-10a1 1 0 0 1 -1 1h-3v3a1 1 0 0 1 -2 0v-3h-3a1 1 0 0 1 0-2h3v-3a1 1 0 0 1 2 0v3h3a1 1 0 0 1 1 1z"/></svg>
                    Adicionar
                </label>
            `)
        }
    }
   let all = ["payload","proxy_port","sni","name","proxy_hostname","description","url_check_user","udp_port","primary_dns_server","icon_image","secondary_dns_server"]
    $(document).ready(()=>{
      for (x in all){
       $("."+all[x]).hide()
      }
      update(configFinal)
      for (x in categorias){
      $('#categoryChoice').append($('<option>', {
    value: categorias[x].id,
    text: categorias[x].name
}));
}
      $('input[id="proxy_port"]').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    this.value = this.value.replace(/\D/g, '');
  }
});
    })
  
  
  function copiar() {
    let text = JSON.stringify(configFinal)
   const elem = document.createElement('textarea');
   elem.value = text;
   document.body.appendChild(elem);
   elem.select();
   document.execCommand('copy');
   document.body.removeChild(elem);
   alert("JSON copiado.")
}
    function onedit(t){
        t.name = t.name.replace("edit","").replace(/ /gi,"")
        editIndex = parseInt(t.name)
        toEdit = configFinal.data.results[parseInt(t.name)]
        modo(document.getElementById("modo"))
        $("#categoryChoice").val(toEdit.category_id)
        $("myModal").removeClass("add")
        $("myModal").addClass("edit")
        $("#modo").val(toEdit.config_mode)
        modo(document.getElementById("modo"))
        for (x in all){
          $("#"+all[x]).val(toEdit[all[x]])
        }
        $('#myModal').modal('show');
        
    }
    function onremove(t){
        $('#confirmRemove').modal('show');
        t.name = t.name.replace("remove","").replace(/ /gi, "")
        ////print(t.name)
        toRemove = parseInt(t.name)
    }
    function confirmRemove(){
        delete configFinal.data.results[toRemove]
        
        configFinal.data.results = configFinal.data.results.filter(z => z != null && z != undefined && z != "")
        update(configFinal)
    }
    function addConfig(t){
    cat = t.id.replace("category_id","")
    ////print(cat)
    modo(document.getElementById("modo"))
    $("#categoryChoice").val(cat)
    $("myModal").removeClass("edit")
    $("#myModal").addClass("add")
    $("#primary_dns_server").val("8.8.8.8")
    $("#secondary_dns_server").val("8.8.4.4")
    $('#myModal').modal('show');
    }
    function limpar(){
      for (x in all){
        $("#"+all[x]).val("")
      }
      $('#modo').prop('selectedIndex',0);
      $("#myModal").removeClass("add")
      $("#myModal").removeClass("edit")
    }
    function modo(t){
      escolhido = t.value
      for (x in all){
       $("."+all[x]).hide()
      }
      for (x in modos[escolhido]){
       $("."+modos[escolhido][x]).show()
      
      }
    }
    function salvar(){
      let isAdd = $("#myModal").hasClass("add")
      
      if (isAdd){
         let escolhido = $('#modo').find(":selected").val()
         let categoriaEscolhida = $("#categoryChoice").find(":selected").val()
         let category = categorias.find(x=> x.id == categoriaEscolhida)
         ////print(category)
         let toAdd = {
"name": "", 
"config_v2ray": "", 
"server_hostname": "", 
"description": "", 
"username": "", 
"server_port": "", 
"icon_image": "", 
"user_id": 2, 
"password": "", 
"udp_port": "", 
"category_id": 1, 
"v2ray_uuid": "", 
"primary_dns_server": "", 
"payload": "",
"status": "ACTIVE", 
"secondary_dns_server": "", 
"sni": "", 
"config_mode": escolhido,
"url_check_user": "", 
"config_openvpn": "", 
"proxy_hostname": "", 
"sort_order": 1, 
"id": 1, 
"proxy_port": "", 
"category": category
}
toAdd.category_id = categoriaEscolhida
let sameCategory = configFinal.data.results.filter(x=> x.category_id == toAdd.category_id)
toAdd.server_hostname = toAdd.proxy_hostname
let nextOrder = sameCategory.sort(function(a, b){return a.sort_order - b.sort_order});
let nextId = sameCategory.sort(function(a, b){return a.id - b.id});
toAdd.id = nextId[nextId.length - 1].id + 1
toAdd.user_id = toAdd.id
toAdd.sort_order = nextOrder[nextOrder.length - 1].sort_order + 1
////print(toAdd)
toAdd.server_port = parseInt($("#proxy_port").val())
for (x in modos[escolhido]){
          toAdd[modos[escolhido][x]] = $("#"+modos[escolhido][x]).val()
        }
        for (x in padrao){
          toAdd[padrao[x]] = $("#"+padrao[x]).val()
        }
        toAdd.proxy_port = toAdd.server_port
  configFinal.data.results.push(toAdd)
      } else {
        let categoriaEscolhida = $("#categoryChoice").find(":selected").val()
          let escolhido = $('#modo').find(":selected").val()
          configFinal.data.results[editIndex].config_mode = escolhido
          configFinal.data.results[editIndex].category_id = categoriaEscolhida
          configFinal.data.results[editIndex].category = categorias.find(x => x.id == categoriaEscolhida)
        for (x in all){
          configFinal.data.results[editIndex][all[x]] = ""
        }
        for (x in modos[escolhido]){
          configFinal.data.results[editIndex][modos[escolhido][x]] = $("#"+modos[escolhido][x]).val()
        }
        configFinal.data.results[editIndex].server_port = parseInt(configFinal.data.results[editIndex].proxy_port)
        configFinal.data.results[editIndex].proxy_port = parseInt($("#proxy_port").val())
        for (x in padrao){
          configFinal.data.results[editIndex][padrao[x]] = $("#"+padrao[x]).val()
        }
        configFinal.data.results[editIndex].server_hostname = configFinal.data.results[editIndex].proxy_hostname
      }
        update(configFinal)
      limpar()
      
    }
    
    </script>
</body>
</html>