import "./style.scss";
import { TextBaseElement } from "./BaseElements/TextBaseElement";

TextBaseElement();

const el = document.createElement("div");
el.innerHTML = "JavaScript is working.";
document.body.appendChild(el);
