import { initHeader } from "./modules/header.js";
import { initContactForm } from "./modules/contact.js";
import { initAnimations } from "./modules/animations.js";

console.log("javascript file is linked");

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initContactForm();
  initAnimations();
});
