const passField = document.querySelector("#pswrd_1");
    const showBtn = document.querySelector("span i");
    showBtn.onclick = (() => {
      if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.add("hide-btn");
      } else {
        passField.type = "password";
        showBtn.classList.remove("hide-btn");
      }
    });    