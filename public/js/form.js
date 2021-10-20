let endedAtEl = document.querySelector('#ended_at');
let ongoingEl = document.querySelector('#ongoing');

let isChecked = () => {
  if (ongoingEl.checked == true) {
    endedAtEl.disabled = true;
    endedAtEl.value = null;
    endedAtEl.classList.add('bg-opacity-80', 'bg-gray-300');
    console.log(endedAtEl.value);
    
  } else {
    endedAtEl.disabled = false;
    endedAtEl.classList.remove('bg-opacity-80', 'bg-gray-300');
  }
}  

ongoingEl.addEventListener("click", isChecked);


