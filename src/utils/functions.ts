import axios from "axios";
import { url } from "../index";

async function sendApiRequest(url: string, formData: FormData) {
    try {
      const response = await axios({
        url: url,
        method: "post",
        data: formData,
        headers: {
          "X-Requested-With": "XMLHttpRequest",
          "Content-Type": "multipart/form-data",
        },
      });

      return response.data;
    } catch (error) {
      throw error;
  }
}

function showMessage(data: Array<string>){
    const apiResponseDiv = document.getElementById('api-response') as HTMLDivElement;
    const [status, message, cause] = data; // Response from API is an array that has 3 elements: status, message and cause
    apiResponseDiv.classList.add(status);
    apiResponseDiv.innerHTML = message;
    if(status === 'error'){
        const causeElement = document.getElementById(cause) as HTMLElement;
        causeElement.style.outline = '3px solid red';
    }
}

export function handleButtonClick(requestType: string) {
    const formData = new FormData();
    formData.set('request', requestType);
    const response = sendApiRequest(url, formData);
    response.then(showMessage);
    formData.delete('request');
}