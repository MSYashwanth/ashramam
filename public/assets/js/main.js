const searchInput = document.getElementById('navSearchInput');
const resetBtn = document.getElementById('resetBtn');

searchInput.addEventListener('input', function() {
    if (this.value.length > 0) {
        resetBtn.style.display = 'block';
    } else {
        resetBtn.style.display = 'none';
    }
});

resetBtn.addEventListener('click', function() {
    this.style.display = 'none';
    searchInput.focus();
});