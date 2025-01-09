fetchJSON();

function fetchJSON() {
    fetch("./Data/articles.json")
    .then(response => response.json())
    .then(data => initIndexArticles(data));
}

function showInfo(data) {
    console.table(data.articles);
}

function initIndexArticles(data) {
    var articleDiv = document.querySelector(".service-news");
    var articles = data.articles

    var articleBoxes = articleDiv.querySelectorAll(".index-news");

    for (let i = 0; i < 3; i++) {
        var article = articles[i];
        var articleBox = articleBoxes[i];

        var newCoverPhoto = document.createElement("img");
        newCoverPhoto.setAttribute("src", "./"+article.photo);
        newCoverPhoto.style.width = "140px";
        newCoverPhoto.style.height = "100px";
        newCoverPhoto.style.margin = "10px";

        var textDiv = document.createElement("div");
        
        var newTitle = document.createElement("p");
        newTitle.innerHTML = article.title+" - "+article.creationDate;
        newTitle.style.fontSize = "20px";
        newTitle.style.fontFamily = "Montserrat";
        newTitle.style.fontWeight = "bold";


        var newContent = document.createElement("p");
        newContent.innerHTML = article.resume;
        newContent.style.fontSize = "20px";
        newContent.style.fontFamily = "Source Sans 3", "Serif";

        textDiv.appendChild(newTitle);
        textDiv.appendChild(newContent);

        articleBox.appendChild(newCoverPhoto);
        articleBox.appendChild(textDiv);

    }
}