import { handleButtonClick } from './utils/functions';
import './styles/main.css';

export const url = '/api/hello.php';

const helloBtn = document.getElementById('hello') as HTMLButtonElement;
const invalidBtn = document.getElementById('invalid') as HTMLButtonElement;

helloBtn.addEventListener('click', () => {
    invalidBtn.style.outline = 'none';
    handleButtonClick('hello');
});

invalidBtn.addEventListener('click', () => {
    handleButtonClick('invalid');
});
