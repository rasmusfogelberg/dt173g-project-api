// Function to grey out input field 'ended_at' if checkbox
// 'ongoing' is checked

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
  
if (ongoingEl) {
ongoingEl.addEventListener("click", isChecked);
}


