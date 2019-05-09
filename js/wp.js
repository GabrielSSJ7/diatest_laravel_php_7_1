$(document).ready(function() {
    const URL_ = "http://localhost/Jobs/diatest/app/";

$(".banner").css("cursor","pointer");
    $(".li-fac").on("click", function(e) {
        localStorage.setItem(
            "fac",
            $(this)
                .children("a")
                .text()
        );
    });

	$(".banner").on("click", function(){
		console.log($("input[name='_token']").val())
		$.ajax({
		  type: 'POST',
		  headers: {
		    'X-CSRF-TOKEN': $("input[name='_token']").val()
		  },
		  url: "http://server1.rgdsolution.com.br:55336/diatest_laravel/produtos/search",
		  data: {key: "ogivas"},
		  success: function(res){
			console.log(res)
			$("html").html(res);
			},
		  dataType: "html",
		  async:false
		});
	})

    $("#search-btn").on("click", function(e) {
        const search = $("#search-input").val();
        window.location.href = `./produtos.html?function=searchProducts&key=${search}`;
        e.preventDefault();
        return false;

        // $.ajax({
        //   url: `${URL}queries.php?function=searchProducts&key=${search}`,
        //   method: 'GET',
        //   success: function(data){
        //     console.log(data);

        //     $("#products_").append(data);
        //   },
        //   error: function(error){
        //     console.log(erro);
        //   }
        // });
    });

    $(".produto-imgs").on("click", function() {
        const imgSrc = $(this).prop("src");

        //$("#produto-img").prop('src', imgSrc);

        const image = $("#produto-img");

        image.fadeOut("fast", function() {
            //image.prop('src', imgSrc);
            image.css("background-image", `url(${imgSrc})`);
            image.prop("src", `${imgSrc}`);
            image.fadeIn("slow");
        });
    });

/*    let childrens = $(".li-fac");


    for(let x = 0; x < childrens.length; x++) {

        let opt = childrens[x].children[0].firstChild.data;
        switch(opt) {
            case "DIATEST":
            childrens[x].children[0].style.color = "#005baa"
            break;
            case "SYLVAC":
            childrens[x].children[0].style.color = "#fdc62e"
            break;
            case "KROEPLIN":
            childrens[x].children[0].style.color = "#0c588a"
            break;
            case "KAFER":
            childrens[x].children[0].style.color = "#e4322c"
            break;
            case "WEST. PEGASUS":
            childrens[x].children[0].style.color = "#a60029"
            break;
            case "PROCEQ":
            childrens[x].children[0].style.color = "#00838a"
            break;
            case "KORDT":
            childrens[x].children[0].style.color = "#004576"
            break;
            case "MAHR":
            childrens[x].children[0].style.color = "#d50100"
            break;
        }
    } */

    // const path = location.pathname;

    // switch(path.replace('Jobs/diatest/', '')) {
    //   case '/':
    //     setCategories('');
    //     setProducts('?function=fetchProductsForHome');
    //   break;

    //   case '/index.html':
    //   setCategories('');
    //     setProducts('?function=fetchProductsForHome');
    //   break;

    //   case '/produtos.html':
    //   const url = new URL(location.href);
    //   const fac = localStorage.getItem('fac');
    //   const _function = url.searchParams.get("function");
    //   const key = url.searchParams.get("key");
    //   if(_function == 'fetchProductsByFactory') {
    //     $("#title-produtos").html(`<h2 class='tittle' style="text-transform: uppercase">${key}</h2>`)
    //   }
    //   setProducts(`?function=${_function}&key=${key}`);
    //   break;
    // }

    function setProducts(params) {
        $.ajax({
            url: `${URL_}queries.php${params}`,
            method: "GET",
            success: function(data) {
                console.log(data);
                $("#products_").append(data);
            },
            error: function(erro) {
                console.log(erro);
            }
        });
    }

    function setCategories(params) {
        $.ajax({
            url: `${URL_}queries.php${params}`,
            method: "GET",
            success: function(data) {
                $("#lista-categorias").append(data);
            },
            error: function(erro) {
                console.log(erro);
            }
        });
    }

    //setProducts();
    setCategories();

    /*const categorias = {
    home: [
      {
        main_category: "Ogivas de Medição",
        sub_categories: [
          "Ogivas de medição",
          "Aplicações especiais para Ogivas de Medição",
          "Acessórios para Ogivas de Medição"
        ]
      },
      {
        main_category: "Unidades de Leitura",
        sub_categories: "Unidades Multiplexadoras"
      },
      {
        main_category: "Paquímetros",
        sub_categories: [
          "Pinças de medição Standard",
          "Pinças de medição para furos cegos",
          "Aplicações especiais para pinças de medição"
        ]
      },
      {
        main_category: "Calibradores",
        sub_categories: [
          "Calibradores de Rosca"
        ]
      },
      {
        main_category: "Micrômetros",
        sub_categories: [
          "Micrômetros Externos Digitais",
          "Micrômetros Internos Digitais",
          "Cabeçotes Micrômetros",
          "Micrômetros Externos Analógicos",
          "Micrômetros Internos Analógicos"
        ]
      },
      {
        main_category: ""
      }
    ],
    diatest: [
      {
        main_category: "Outros Medidores",
        sub_categories: [
          "Medidores de Chanfro",
          "Medidores de Estriados",
          "Medidores de Rosca",
          "Medidores Externos",
          "Medidores Aerosol",
          "Medidores de Espessura",
          "Medidores Internos",
          "Medidores de Profundidade"
        ]
      },
      {
        main_category: "Unidades de Leitura",
        sub_categories: [
          "Ogivas de Medição",
          "Unidades de Leitura",
          "Paquímetros",
          "Pinças de medição",
          "Calibradores",
          "Micrômetros",
          "Mesas de Medição",
          "Rugosímetros",
          "Relógios Comparadores",
          "Traçadores de Altura",
          "Relógios Apalpadores",
          "Outros Medidores",
          "Goniômetros",
          "Sensores",
          "Coletores de Dados",
          "Padrões",
          "Aferidores",
          "Durômetros",
          "Escalas Digitais",
          "Acessórios"
        ]
      },

      {
          main_category: "Padrões",
          sub_categories: [
            "Outros Padrões",
            "Anéis Padrão",
            "Blocos Padrão",
            "Tampões Padrão",
            "Calibradores",
            "Pinças de medição",
            "Ogivas de Medição"
          ]
      },

      {
          main_category: "Calibradores",
          sub_categories: [
              "Calibradores de rosca"
          ]
      },

      {
          main_category: "Pinças de medição",
          sub_categories: [
              "Pinças de medição Standard",
              "Pinças de medição para furos cegos",
              "Aplicações especiais para pinças de medição"
          ]
      }
    ]
  };*/
});
