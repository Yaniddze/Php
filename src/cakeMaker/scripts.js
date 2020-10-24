const slider = document.getElementsByClassName('slider')[0];

const buttons = slider.getElementsByClassName('slider__buttons')[0];
const imgs = slider.getElementsByClassName('slider__imgs-1')[0];

for (let index = 0; index < buttons.childNodes.length; index++) {
  const button = buttons.childNodes[index];
  const image = imgs.childNodes[index];

  button.addEventListener('click', (e) => {
    for (let index = 0; index < buttons.childNodes.length; index++) {
      const innerButton = buttons.childNodes[index];
      const innerImage = imgs.childNodes[index];
      
      innerImage.className = "no_active";
      innerButton.className = "no_active";
    }
    button.className = "active";
    image.className = "active";
    e.preventDefault();
  })
}

