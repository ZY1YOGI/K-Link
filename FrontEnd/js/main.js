const splash = document.getElementById("splash"),
  body = document.querySelector("body"),
  modeSwitch = body.querySelector("#switch-mode");

window.onload = () => {
  splash.style.display = "none";
  console.log("Done");
};

modeSwitch.onclick = () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeSwitch.innerText = "Light";
  } else {
    modeSwitch.innerText = "Dark";
  }
};

const Reqs = new XMLHttpRequest();
Reqs.onreadystatechange = () => {
  console.log(this.readyState);
  console.log(this.status);

  if (this.readyState === 4 && this.status === 200) {
    console.log(this.responseText);
  }
};

Reqs.open("GET", "css/normalize.css", true);
Reqs.send();
