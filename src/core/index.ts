import { handleButtonClick } from "@/utils/functions";
import "./core.css";

export const todoURL = "/api/get-todo.php";
export const customURL = "/api/custom-api.php";

const helloBtn = document.getElementById("get-todo") as HTMLButtonElement;
const customBtn = document.getElementById("custom") as HTMLButtonElement;
const invalidBtn = document.getElementById("invalid") as HTMLButtonElement;

helloBtn.addEventListener("click", () => {
  invalidBtn.style.outline = "none";
  handleButtonClick("get-todo");
});

customBtn.addEventListener("click", () => {
  invalidBtn.style.outline = "none";
  handleButtonClick("custom");
});

invalidBtn.addEventListener("click", () => {
  handleButtonClick("invalid");
});
