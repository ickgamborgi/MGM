import { initHeader } from "./modules/header.js";
import { initAnimations } from "./modules/animations.js";

console.log("javascript file is linked");

document.addEventListener("DOMContentLoaded", () => {
  initHeader();
  initAnimations();
});
