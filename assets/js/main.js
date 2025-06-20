const translations = {
  en: {
    welcome: "Welcome to IremboGov",
    desc: "Please register or login to continue."
  },
  rw: {
    welcome: "Murakaza neza kuri IremboGov",
    desc: "Mwiyandikishe cyangwa winjire kugira ngo ukomeze."
  }
};

document.getElementById('langSelect').addEventListener('change', function() {
  const lang = this.value;
  document.getElementById('welcomeText').textContent = translations[lang].welcome;
  document.getElementById('descText').textContent = translations[lang].desc;
});
