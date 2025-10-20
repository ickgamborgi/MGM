import { initHeader } from "./modules/header.js";
import { initContactForm } from "./modules/contact.js";

console.log("javascript file is linked");

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initContactForm();
});
