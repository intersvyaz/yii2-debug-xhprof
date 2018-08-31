function enableXhprof(e, enable) {
    e.preventDefault();
    e.stopPropagation();

    e.target.parentElement.parentElement.querySelector('.hide').classList.remove('hide');
    e.target.classList.add('hide');

    if (enable) {
        document.cookie='_xhprof=1';
    } else {
        document.cookie='_xhprof=1; expires=Thu, 01 Jan 1970 00:00:00 UTC';
    }
}
