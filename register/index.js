const validation = () => {
  let email = document.register.email.value;
  let pwd = document.register.pwd.value;
  let name = document.register.name.value;
  const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
  function CheckPassword(pwd) {
    var passw = /^[A-Za-z]\w{7,14}$/;
    if (pwd.value.match(passw)) {
      alert("Correct, try another...");
      return true;
    } else {
      alert("Wrong...!");
      return false;
    }
  }
  if (validateEmail(email) && !(name == "") && CheckPassword(pwd)) {
    return true;
  } else {
    return false;
  }
};
