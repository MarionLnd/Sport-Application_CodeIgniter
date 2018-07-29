// JS gérant l'API des NEWS Sportives

// Déclaration des variables
// URL de l'API
var url = 'https://newsapi.org/v2/top-headlines?' +
          'sources=lequipe&' +
          'apiKey=77c1aaba94264809a4175173ad24e474';
// Div #actus qui va contenir tous les articles
var articlesElt = document.getElementById("actus");


// Fonction gérant l'AJAX
function ajaxGet(url, callback) {
  var req = new XMLHttpRequest();

  req.open("GET", url);
  req.addEventListener("load", function () {

    if (req.status >= 200 && req.status < 400) {
      // Appelle la fonction callback en lui passant la réponse de la requête
      callback(req.responseText);
    } else {
      console.error(req.status + " " + req.statusText + " " + url);
    }
  });

  req.addEventListener("error", function () {
    console.error("Erreur réseau avec l'URL " + url);
  });
  req.send(null);
}


ajaxGet(url, function (reponse) {
    // Transforme la réponse en un tableau d'articles
    var actus = JSON.parse(reponse);
    actus = actus.articles;

   // console.log(UIkit.img.props);

    for (var i = 0; i < 6; i++) {
      var img = new UIkit.img();
      var divElt = document.createElement("div");
      var divHeader = document.createElement("div");
      var divBody = document.createElement("div");
      var divImg = document.createElement("div");
      var divContainerCard = document.createElement("div");
      var footer = document.createElement("div");
      var titreElt = document.createElement("h3");
      var contentElt = document.createElement("p");
      var author = document.createElement("p");
      var source = document.createElement("a");
      var logoElt = document.createElement("img");

      // Div qui contient les articles
      //divElt.classList.add("col-md-4");
      divElt.classList.add("uk-card");
      divElt.classList.add("uk-card-default");
      divElt.classList.add("uk-card-medium");
      divElt.classList.add("uk-height-medium");
      divElt.classList.add("uk-margin-medium");

      divContainerCard.classList.add('uk-width-1-2');

      // Header div
      divHeader.classList.add('uk-card-header');
      divHeader.style.height = '45px';

      // Div du body
      divBody.classList.add("uk-card-body");
      divBody.classList.add('uk-height-small');

      // Titre
      titreElt.textContent = actus[i].title;
      titreElt.style.fontSize = '17px';
      titreElt.classList.add("uk-card-title");
      titreElt.classList.add("uk-text-center");

      // Contenu
      contentElt.textContent = actus[i].description;
      contentElt.style.fontSize = '14px';
      contentElt.classList.add("uk-text-justify");


      // Image liée à l'article
      logoElt.src = actus[i].urlToImage;
      logoElt.classList.add("img-responsive");
      logoElt.classList.add("text-center");
      logoElt.style.width = "200px";
      divImg.classList.add('uk-card-media-bottom');

      // Footer
      footer.classList.add('uk-card-footer');
      footer.style.height = '70px';
      author.textContent = 'Source : ' + actus[i].author;
      author.classList.add('uk-align-left');

      // Source de l'article
      source.textContent = "READ MORE";
      source.classList.add("uk-button");
      source.classList.add("uk-button-text");
      source.classList.add('uk-align-right');
      source.href = actus[i].url;

      footer.appendChild(author);
      footer.appendChild(source);
      divImg.appendChild(logoElt);
      divHeader.appendChild(titreElt);
      divBody.appendChild(contentElt);
      divElt.appendChild(divHeader);
      divElt.appendChild(divBody);
     // divElt.appendChild(divImg);
      divElt.appendChild(footer);
      divContainerCard.appendChild(divElt);

      articlesElt.appendChild(divContainerCard);
    }
});

//sendData();
