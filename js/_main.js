
(function setDate() {
  let d = new Date();
  let p = new Date(d.getTime() - 5 * 86400000);
  let monthA = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря',
  ];
  $(".by").html(p.getDate() + " " + monthA[p.getMonth()] + " ");

  p = new Date(d.getTime());
  $(".to").html(p.getDate() + " " + monthA[p.getMonth()] + " " + p.getFullYear() + " года ");
})();


  const name1 = document.getElementById('name');
  const phone1 = document.getElementById('phone');
  const form1 = document.getElementById('form');
  const btn1 = document.getElementById('btn');
  
  function setWithExpiry(key, value, ttl) {
    const now = new Date();
  
    const item = {
      value: value,
      expiry: now.getTime() + ttl,
    };
  
    localStorage.setItem(key, JSON.stringify(item));
  }
  
  function setButtonSubmitProperties() {
    btn.style.opacity = "0.7";
    btn.textContent = "Отправка заявки";
    btn.disabled = true;
  
    setTimeout(() => {
      btn.style.opacity = "1";
      btn.textContent = "Отправить заявку";
      btn.disabled = false;
    }, 2000);
  }
  
  form.addEventListener("submit", function (e) {
    setButtonSubmitProperties();
  
    let formData = {
      name: name.value,
      phone: phone.value,
    };
  
    setWithExpiry("myKey", formData, 20000);
  });