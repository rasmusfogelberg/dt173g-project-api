let endedAtEl = document.querySelector('#ended_at');
let ongoingEl = document.querySelector('#ongoing');

let isChecked = () => {
  if (ongoingEl.checked == true) {
    endedAtEl.disabled = true;
    endedAtEl.classList.add('bg-opacity-80', 'bg-gray-300');
    
  } else {
    endedAtEl.disabled = false;
    endedAtEl.classList.remove('bg-opacity-80', 'bg-gray-300');
  }
}  

ongoingEl.addEventListener("click", isChecked);


