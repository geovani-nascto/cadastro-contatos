const menuIcon = document.getElementById('menu-icon');
const nav = document.getElementById('nav');

function toggle(){
    if(nav.style.display == 'none'){
        nav.style.display = 'flex';
    } else{
        nav.style.display = 'none';
    }
}

menuIcon.addEventListener('click', toggle);