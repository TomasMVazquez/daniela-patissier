
const navBarUl = document.querySelector('#navUl').children;
const path = window.location.pathname;

for (oneLi of navBarUl) {
  let liHref = oneLi.children[0].getAttribute('href');

  if (path != liHref) {
    oneLi.classList.remove('active');
  }else {
    oneLi.classList.add('active');
  }
}
