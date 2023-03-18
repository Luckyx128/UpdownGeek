const imagens = document.querySelectorAll(".corpo .galeria img");
let indiceAtual = 0;

function slide() {
  for (let i = 0; i < imagens.length; i++) {
    imagens[i].classList.remove("ativa");
  }

  indiceAtual = (indiceAtual + 1) % imagens.length;
  imagens[indiceAtual].classList.add("ativa");
}

setInterval(slide, 2000);
